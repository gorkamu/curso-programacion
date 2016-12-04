<?php

new class 
{
    function __construct()
    {
        (static function() {
            var_dump($this);
        })();
    }
};

// Notice: Undefined variable: this in %s on line %d
// NULL