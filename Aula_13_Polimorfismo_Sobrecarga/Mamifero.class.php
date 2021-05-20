<?php

require_once "Animal.class.php";

class Mamifero extends Animal {

    protected $corPelo;

    public function emitirSom() {
        print "<h1>Som de Mamifero</h1>";
    }
}


?>