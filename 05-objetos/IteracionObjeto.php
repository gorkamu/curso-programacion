<?php

class Gorkamu
{
    public $nombre = 'Gorkamu';
    public $web = 'http://www.gorkamu.com';
    protected $edad = '27';
    private $telefono = '66. ... ...';
    public function iterar() {
       foreach ($this as $clave => $valor) {
           print "$clave => $valor\n";
       }
    }
}

$gorkamu = new Gorkamu();
foreach($gorkamu as $clave => $valor) {
    print "$clave => $valor\n";
}

echo PHP_EOL;

$gorkamu->iterar();