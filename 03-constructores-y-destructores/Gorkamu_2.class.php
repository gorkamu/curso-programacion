<?php

class Gorkamu 
{
  private $salario;
  
  private $medidas;
  
  public function __construc($salario, $medidas) {
    $this->salario = $salario;
    $this->medidas = $medidas;
  }
  
  public function cuantoMido() {
   return $this->medidas; 
  }
  
  public function cuantoCobro() {
   return $this->salario; 
  }
}

$gorkamu = new Gorkamu('3000 €', '33cm'); // Tipico forocochero
echo $gorkamu->cuantoMido();  // Imprime '33cm'
echo $gorkamu->cuantoCobro();  // Imprime '3000 €'
