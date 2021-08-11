<?php

class Request {

  // Atributos = Variable + Acceso
  private $uri;
  private $method;

  // Metodos = Funcion + Acceso
  public function __construct($options = []) {
    // Se ejecute al inicio y una sola vez
    $this->uri = isset($options['uri']) ? $options['uri'] : $_SERVER['REQUEST_URI'];
    $this->method = isset($options['method']) ? $options['method'] : $_SERVER['REQUEST_METHOD'];
    $this->body = isset($options['body']) ? $options['body'] : file_get_contents('php://input');
  }

  public function getUri() { return $this->uri; }
  public function getMethod() { return $this->method; }
  public function getBody() { return $this->body; }

}
