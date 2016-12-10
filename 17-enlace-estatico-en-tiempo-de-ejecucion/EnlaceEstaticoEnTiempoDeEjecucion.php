<?php

 class Pantoja 
 {  
   protected static $nombre = 'Isabel Pantoja';  
   
   public static function comoMeLlamo() 
   {  
     return static::$nombre;  
   }  
 }  

 class Paquirrin extends Pantoja 
 {  
   protected static $nombre = 'Paquirrin';  
 }  
 
 echo Paquirrin::comoMeLLamo();   // 'Paquirrin'