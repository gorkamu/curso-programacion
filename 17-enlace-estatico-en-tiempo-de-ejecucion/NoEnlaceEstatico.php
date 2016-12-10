<?php

class Taza 
{  
   public static function getName() 
   {  
     echo 'Soy una taza';  
   }  
  
   public static function queSoy() 
   {  
     self::getName(); 
   }  
}  

class Tetera extends Taza 
{  
   public static function getName() 
   {  
     echo 'Soy una tetera';  
   }  
}  

Tetera::queSoy();  // 'Soy una taza'