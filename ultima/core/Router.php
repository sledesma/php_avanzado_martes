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
  public function add($uri, $texto) {
    $this->dict[$this->prefix.$uri] = $texto;
  }

  /**
   * El método Handle procesa la petición actual en base al diccionario
   * de rutas.
   */
  public function handle() {
    $peticion = new Request();

    echo $this->dict[$peticion->getUri()];
  }

}