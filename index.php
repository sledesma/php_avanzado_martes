<?php
/**
 * Recibir la PETICION ACTUAL
**/

define('URI_PREFIJO', '/php_avanzado_martes');

$peticionActual = [
  'uri' => $_SERVER['REQUEST_URI'],
  'metodo' => '',
  'cuerpo' => '',
  'cabeceras' => ''
];

switch($peticionActual['uri']) {

  case URI_PREFIJO.'/':
    echo 'Hola mundo desde home';
    break;

  case URI_PREFIJO.'/contacto':
    echo 'Estas en contacto';

}


/**
 * Enviar una RESPUESTA
**/
