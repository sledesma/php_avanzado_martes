<?php

class Response {

  public function status($code) {
    http_response_code($code); // Estado HTTP: Un número que resume la respuesta
  }

  public function text($data) {
    header('Content-type: text/plain'); // Cabecera
    echo $data; // Cuerpo
  }

  public function json($data) {
    header('Content-type: application/json'); // Cabecera
    echo json_encode($data); // Cuerpo
  }

}