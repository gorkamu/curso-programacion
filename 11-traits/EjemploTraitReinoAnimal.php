<?php

trait movimientos {
    function saltar() { /* ... */ }
    function correr() { /* ... */ }
    function nadar() { /* ... */ }
}

class Gato extends Animal {
    use movimientos;
    /* ... */
}

class Perro extends Animal {
    use movimientos;
    /* ... */
}