<?php

class ChuckyDeCieza 
{
  function __construct() {
       print "Diez pastillones y no me diste ni mielda".PHP_EOL;
   }
  
  function __destruct() {
       print "Quieres sentirla en el pesho?".PHP_EOL;
   }
}

$chuckyDeCieza = new ChuckyDeCieza(); // Imprime 'Diez pastillones y no me diste ni mielda'
exit();       