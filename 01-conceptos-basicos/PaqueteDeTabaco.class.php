<?php

class PaqueteDeTabaco 
{ 
  // Declaración de propiedades 
  private $altura = 50; 
  private $anchura = 20; 
  // Declaración de métodos
  
  public function cualEsLaAltura() {
    return $this->altura;
  }
  
  public function cualEsLaAnchura() {
    return $this->anchura;
  }
  
  public function abrirPaquete() { 
    ...
  }
  
  public function comprobarSiHayTabaco() { 
    ...
  }
  
  public function sacarCigarrillo() { 
    ...
  }
}

?>