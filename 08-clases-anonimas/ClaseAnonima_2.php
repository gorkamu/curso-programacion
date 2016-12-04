<?php

class Util {}
interface Serializable {}

var_dump(new class(10) extends Util implements Serializable {
    private $num;
    public function __construct($num)
    {
        $this->num = $num;
    }
});

// Resultado
// ---------
// object(class@anonymous)#1 (1) {
//   ["Command line code0x104c5b612":"class@anonymous":private]=>
//   int(10)
// }