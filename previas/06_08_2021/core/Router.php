<?php

/**
 * La clase Router seguirá una lógica de Tabla Hash o "Diccionario",
 * en donde las claves son las peticiones contempladas y los valores
 * son las respuestas asociadas a dichas peticiones
 */
class Router {

  private $dict = [];
  private $prefix;

  public function __construct($prefix = '') {
    $this->prefix = $prefix;
  }

  /**
   * Agregar un par clave / valor a una petición.
   * PRIMERA VERSION: la clave será la URI y el valor será el TEXTO a mostrar
   */
  public function add($uri, $callback) {
    $this->dict['#^'.$this->prefix.$uri.'$#'] = $callback;
  }

  /**
   * El método Handle procesa la petición actual en base al diccionario
   * de rutas.
   */
  public function handle() {
    $peticion = new Request();

    $founded = false;

    foreach ($this->dict as $pattern => $callback) {
      if(preg_match($pattern, $peticion->getUri(), $coincidencias)) {
        array_shift($coincidencias);
        $callback(
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

    /*
    if(isset($this->dict[$peticion->getUri()])) {
      $accion = $this->dict[$peticion->getUri()]; // Ey ¿Que le corresponde a esta URI?
      $accion($peticion, new Response());
    } else {
      $res = new Response();
      $res->status(404);
      die();
    }
    */

  }

}