<?php

class Request {

  private $uri;
  private $method;
  private $headers;
  private $body;

  public function __construct($requestInit = []) {
    $this->uri = isset($requestInit['uri']) ? $requestInit['uri'] : $_SERVER['REQUEST_URI'];
    $this->method = isset($requestInit['method']) ? $requestInit['method'] : $_SERVER['REQUEST_METHOD'];
    $this->body = isset($requestInit['body']) ? $requestInit['body'] : file_get_contents('php://input');
    $this->headers = isset($requestInit['headers']) ? $requestInit['headers'] : apache_request_headers();
  }

  public function getUri() { return $this->uri; }
  public function getMethod() { return $this->method; }
  public function getHeaders() { return $this->headers; }
  public function getBody() { return $this->body; }

}

