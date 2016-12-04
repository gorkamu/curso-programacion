<?php

function sum(...$nombres) {
    $saludo = 'Hola ';
    foreach ($nombres as $nombre) {
        $saludo .= $nombre;
    }
    return $saludo;
}

echo sum('Gorkamu', 'Ainhoa', 'Rubén');   // Imprime 'Hola Gorkamu Ainhoa Rubén'