<?php

require_once 'core/Request.php';
require_once 'core/Response.php';
require_once 'core/Router.php';

$router = new Router('/php_avanzado_martes/ultima');

$router->add('/', function($req, $res, $params){
  echo 'Hola desde el callback de Home';
});
$router->add('/categoria', function($req, $res, $params){
  $mockDb = [
    [ 'user' => 1, 'name' => 'Carla' ],
    [ 'user' => 2, 'name' => 'Andres' ]
  ];

  $res->json($mockDb);
});
$router->add('/categoria/([0-9]+)', function($req, $res, $params){
  // TODO: ¿Como se en CUAL categoria estoy?
  echo "Hola desde la categoria ".$params[0];
});
$router->add('/producto', function($req, $res, $params){
  echo "Hola desde todos los productos";
});
$router->add('/producto/([0-9]+)', function($req, $res, $params){
  // TODO: ¿Como se en CUAL categoria estoy?
  echo "Hola desde un solo producto";
});

$router->handle();


