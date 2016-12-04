<?php

class Numero
{
  private $valor;
  
  public function __construct($valor) {
    $this->valor = $valor; 
  }
  
  public function cualEsSuValor() {
    return $this->valor; 
  }
  
  public function sumarUnidad() {
    $this->valor++;
  }
  
  public function restarUnidad() {
    $this->valor--;
  }  
}

$numero = new Numero(5);
echo $numero->cualEsSuValor();  // Imprime 5

$numero->sumarUnidad();
echo $numero->cualEsSuValor();  // Imprime 6

$numero->restarUnidad();
echo $numero->cualEsSuValor();  // Imprime 5