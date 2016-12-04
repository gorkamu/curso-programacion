<?php

function saluda($nombre = 'Gorka') {
  echo 'Hola '.$nombre.PHP_EOL;
}

saluda();         // Imprime 'Hola Gorka'
saluda('Fino');   // Imprime 'Hola Fino'