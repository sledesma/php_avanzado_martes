<?php

require_once 'core/Request.php';
require_once 'core/Response.php';
require_once 'core/Router.php';

$app = new Router();

$app->add('GET','/', function($req, $res, $params){
  
  $res->page('home');
  
});

$app->add('POST','/procesar', function($req, $res, $params){
  var_dump($req);
  echo "<hr />";
  var_dump($res);
  echo "<hr />";
  var_dump($params);
});

$app->handle(new Request());