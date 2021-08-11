<?php

class Response {

  /**
   * 1. código de estado
   * 2. cabeceras
   * 3. cuerpo
  **/

  public function status($code) {
    http_response_code($code);
  }

  public function json($data) {
    // Cabeceras
    header('Content-type: application/json');

    // Cuerpo
    echo json_encode($data);
  }

  public function text($data) {
    // Cabeceras
    header('Content-type: text/plain');

    // Cuerpo
    echo $data;
  }

  public function html($data) {
    // Cabeceras
    header('Content-type: text/html');

    // Cuerpo
    echo $data;
  }

  public function page($url) {
    require_once 'pages/'.$url.'.php';
  }

  public function __toString() {
    return "Esto es una respuesta";
  }

}