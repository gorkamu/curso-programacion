<?php

class Gorkamu 
{
  public function __call($method_name, $arguments) 
  {
    if(count($arguments) == 0) {
      $this->saluda1();
    } elseif(count($arguments) == 1) {
      $this->saluda2($arguments[0]);
    } elseif(count($arguments) == 2) {
      $this->saluda3($arguments[0], $arguments[1]);
    } else {
      return false;
    }
  }

  public function saluda1() 
  {
    echo "Hola".PHP_EOL;
  }

  public function saluda2($nombre)
  {
    echo "Hola $nombre".PHP_EOL;
  }

  public function saluda3($nombre, $apellido)
  {
    echo "Hola $nombre $apellido".PHP_EOL;
  }
}

$gorkamu = new Gorkamu();
$gorkamu->saluda();
$gorkamu->saluda("hamijo");
$gorkamu->saluda("shurs", "de fc");