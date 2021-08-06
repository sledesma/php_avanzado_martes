<?php
/**
 * Recibir la PETICION ACTUAL
**/

require_once 'core/Request.php';
require_once 'core/Response.php';

$peticionActual = new Request();
$respuesta = new Response();

$respuesta->status(501);
/*
define('URI_PREFIJO', '/php_avanzado_martes');

$peticionActual = [
  'uri' => $_SERVER['REQUEST_URI'],
  'metodo' => $_SERVER['REQUEST_METHOD'],
  'cuerpo' => file_get_contents('php://input'),
  'cabeceras' => apache_request_headers()
];
*/
/*
// Funciones de Alto Nivel => Tienen una sintaxis más cercana al humano
echo 'Hola mundo<br>'; // "Sacar" datos de PHP
print_r('Hola mundo<br>'); // "Sacar" datos de PHP
var_dump('Hola mundo'); // "Sacar" datos de PHP
// El buffer php://output es la versión "de bajo nivel" de los 3 anteriores
// O dicho de otra forma, las tres funciones anteriores son "simplificaciones" de
// php://output
echo "<hr /> Desde el buffer: <br>";
echo file_get_contents('php://input');
*/
//var_dump($peticionActual);


/*
switch($peticionActual['uri']) {

  case URI_PREFIJO.'/':
    echo 'Hola mundo desde home';
    break;

  case URI_PREFIJO.'/contacto':
    echo 'Estas en contacto';

}
*/

/**
 * Enviar una RESPUESTA
**/
