<?php
  
class Gorkamu 
{
  public $nombre = 'Gorkamu';
  public $web = 'http://www.gorkamu.com';
}
  
$gorkamu = new Gorkamu();
$serialize = serialize($gorkamu);

echo $serialize.PHP_EOL;

$gorkamu = unserialize($serialize);

var_dump($gorkamu);