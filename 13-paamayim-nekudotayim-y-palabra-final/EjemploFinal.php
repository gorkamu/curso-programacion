<?php

class PutoAmo 
{
   public function saluda() {
       echo "Hola";
   }
   
   final public function insulta() {
       echo "Capullo";
   }
}

class Gorkamu extends PutoAmo 
{
   public function insulta() {
       echo "llamada a PutoAmo::insulta()\n";
   }
}

// Devuelve un error Fatal: Cannot override final method PutoAmo::insulta()