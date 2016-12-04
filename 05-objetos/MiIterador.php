<?php

class MiIterador implements Iterator
{
    private $var = array();
    
    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind()
    {
        echo "rebobinando\n";
        reset($this->var);
    }
    
    public function current()
    {
        $var = current($this->var);
        echo "actual: $var\n";
        return $var;
    }
    
    public function key()
    {
        $var = key($this->var);
        echo "clave: $var\n";
        return $var;
    }
    
    public function next()
    {
        $var = next($this->var);
        echo "siguiente: $var\n";
        return $var;
    }
    
    public function valid()
    {
        $clave = key($this->var);
        $var = ($clave !== NULL && $clave !== FALSE);
        echo "válido: $var\n";
        return $var;
    }
}

$valores = array(1,2,3);
$it = new MiIterador($valores);
foreach ($it as $a => $b) {
    print "$a: $b\n";
}