<?php

class Animal {
    public function correr() {
        echo 'Estoy corriendo ';
    }
}

trait movimientos {
    public function correr() {
        parent::correr();
        echo 'y soy feliz';
    }
}

class Perro extends Animal {
    use movimientos;
}

$p = new Perro();
$p->correr(); // Estoy corriendo y soy feliz