<?php

require_once 'core/Request.php';
require_once 'core/Response.php';
require_once 'core/Router.php';

$app = new Router();

$app->add('GET','/', function($req, $res, $params){
  var_dump($req);
  echo "<hr />";
  var_dump($res);
  echo "<hr />";
  var_dump($params);
});

$app->add('POST','/', function($req, $res, $params){
  var_dump($req);
  echo "<hr />";
  var_dump($res);
  echo "<hr />";
  var_dump($params);
});

$app->add('GET','/clientes/([0-9]+)', function($req, $res, $params){
  var_dump($req);
  echo "<hr />";
  var_dump($res);
  echo "<hr />";
  var_dump($params);
});

$app->add('POST', '/clientes/([0-9]+)/compras', function($req, $res, $params){
  var_dump($req);
  echo "<hr />";
  var_dump($res);
  echo "<hr />";
  var_dump($params);
});

$app->handle(new Request());