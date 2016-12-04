<?php

class PutoAmo
{
    protected function saluda() {
        echo "Hola";
    }
}

class Gorkamu extends PutoAmo
{
    // Sobrescritura de definición parent
    public function saluda()
    {
        // Pero todavía se puede llamar a la función parent
        parent::saluda();
        echo " soy Gorkamu\n";
    }
}

$gorkamu = new Gorkamu();
$gorkamu->saluda(); // Hola soy Gorkamu