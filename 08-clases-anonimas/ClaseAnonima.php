<?php

class Util 
{
  private $logger;
  
  public function setLogger(Logger $logger) {
    $this->logger = $logger; 
  }
}

$util = new Util();
$util->setLogger(new Logger());   // Esto se hacía antes de PHP 7
$util->setLogger(new class {      // Esto se hace a partir de PHP 7
  public function __construct() {
    echo "Soy un logger"; 
  }
});