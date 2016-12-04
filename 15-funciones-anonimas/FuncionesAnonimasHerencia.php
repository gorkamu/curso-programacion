<?php

$mensaje = 'hola';

// Sin "use"
$ejemplo = function () {
    var_dump($mensaje);
};

$ejemplo();   // Notice: Undefined variable: message in /example.php on line 7

// Heredar $mensaje
$ejemplo = function () use ($mensaje) {
    var_dump($mensaje);
};

$ejemplo();   // hola