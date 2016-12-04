<?php

class PaqueteDeGoldenVirginia extends PaqueteDeTabaco 
{ 
    private $marca = 'golden virginia';
  
    private $tipo = 'rubio';
  
    // Redefinición del método padre
    function sacarCigarrillo()
    {
        $cigarrillo = null;
        
        if(parent::comprobarSiHayTabaco()) {
            $tabaco = $this->sacarTabaco();
            $papel = $this->sacarPapel();
            $filtro = $this->sacarFiltro();
          
            $cigarrillo = $this->liarCigarrillo($tabaco, $papel, $filtro);
        }
      
        return $cigarrillo;
    }
}
