<?php

class Television
{
  public $tipo = 'Television plana';
  
  protected $pulgadas = '47 pulgadas';
  
  private $marca = 'Samsung';
  
  public static $codigoDeModelo = 'DASX29348X-1290';
  
  public function imprimeValores() {
    echo $this->tipo.PHP_EOL;
    echo $this->pulgadas.PHP_EOL;
    echo $this->marca.PHP_EOL;
  }
  
  public function dameSuCodigoDeModelo() {
    return self::$codigoDeModelo;
  }
}

// Instanciamos la clase utilizando el constructor por defecto
$television = new Television();
echo $television->tipo;                   // Imprimirá por pantalla el valor 'Television plana'
echo $television->pulgadas;               // Dará un error
echo $television->marca;                  // Dará un error
echo $television->imprimeValores();       // Imprimirá los valores definidos en las propiedades
echo Television::$codigoDeModelo;         // Imprime la variable estática
echo $television->dameSuCodigoDeModelo(); // Imprime la variable estática