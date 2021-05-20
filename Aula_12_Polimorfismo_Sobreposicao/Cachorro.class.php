<?php

require_once "Mamifero.class.php";

class Cachorro extends Mamifero {

    public function enterrarOsso() {
        print "<p>Enterrando o osso....</p>";
    }

    public function abanarRabo() {
        print "<p>Abanando o Rabo</p>";
    }

    public function emitirSom() {
        print "<p>AU AU AU...</p>";
    }

}


?>