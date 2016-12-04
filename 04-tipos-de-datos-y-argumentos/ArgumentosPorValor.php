<?php

$nombre = 'Gorkamu';

function saluda($nombre) {
  $nombre = 'Gorkamu eres un gandul!'; 
  echo 'Hola '.$nombre.PHP_EOL; 
}

echo $nombre;           // Imprime 'Gorkamu'
echo saluda($nombre);   // Imprime 'Hola Gorkamu eres un gandul!'
echo $nombre;           // Imprime 'Gorkamu'