<?php

abstract class Animal
{
  abstract public function moverse();
}

class Gorrino extends Animal
{
    public function moverse() {
        echo "El gorrino corre".PHP_EOL;
    }
}

class Pajarico extends Animal
{
    public function moverse() {
        echo "El pajarico vuela".PHP_EOL;
    }
}

class Accion
{
    public function andar(Animal $animal) {
        $animal->moverse();
    }
}

$animales = [new Gorrino(), new Pajarico()];
$accion = new Accion();
foreach($animales as $animal) {
    $accion->andar($animal);
}