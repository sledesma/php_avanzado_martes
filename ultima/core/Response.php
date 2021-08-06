<?php

class Response {

  public function status($code) {
    http_response_code($code);
  }

  public function text($data) {
    header('Content-type: text/plain');
    echo $data;
  }

  public function json($data) {
    header('Content-type: application/json');
    echo json_encode($data);
  }

}