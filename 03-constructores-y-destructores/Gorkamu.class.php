
<?php

class Gorkamu 
{
  const QUE_SOY = 'Soy la polla',
  
  public function queSoy() {
    return self::QUE_SOY; 
  }
}

$gorkamu = new Gorkamu();
echo $gorkamu->queSoy();  // Imprime 'Soy la polla'
echo Gorkamu::QUE_SOY;    // Imprime 'Soy la polla'
echo $gorkamu::QUE_SOY;   // Imprime 'Soy la polla'