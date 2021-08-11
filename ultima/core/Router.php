<?php

class Router {

  private $routerDict = [];

  public function add($method, $uri, $response) {
    $this->dict[strtoupper($method).'@'.'#^'.$uri.'$#'] = $response;
  }

  public function handle($peticion) {
    /**
     * Tomar la petición dada y el diccionario de rutas, y, en base a eso,
     * definir la respuesta a dar
     */

     $founded = false;

     foreach ($this->dict as $pattern => $response) {
      $partes = explode('@',$pattern);
      $uriActual = $partes[1];
      $metodoActual = $partes[0]; 
    
      if(
        $metodoActual == $peticion->getMethod() &&
        preg_match($uriActual, $peticion->getUri(), $coincidencias)
      ) {

        array_shift($coincidencias); // Para borrar el primer elemento

        $response(
          $peticion,
          new Response(),
          $coincidencias
        );

        $founded = true;
        break;

      }
      
    }

    if(!$founded) {
      $res = new Response();
      $res->status(404);
      die();
    }

  }



}
