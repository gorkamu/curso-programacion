<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

$gorkamu  = new Gorkamu();
$ukelele = new Ukelele();