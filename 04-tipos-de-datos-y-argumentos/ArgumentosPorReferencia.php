<?php

$nombre = 'Gorkamu';

function saluda(&$nombre) {
  $nombre = 'Fino'; 
  return $nombre; 
}

echo $nombre;           // Imprime 'Gorkamu'
echo saluda($nombre);   // Imprime 'Fino'
echo $nombre;           // Imprime 'Fino'