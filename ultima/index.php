<?php

require_once 'core/Request.php';
require_once 'core/Response.php';
require_once 'core/Router.php';

$router = new Router('/php_avanzado_martes/ultima');

$router->add('/home', 'Hola desde home');
$router->add('/contacto', 'Hola desde contacto');

$router->handle();