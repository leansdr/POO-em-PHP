<?php

require_once "Mamifero.class.php";

class Canguru extends Mamifero {

    public function usarBolsa() {

    }

    public function locomover() {
        print "<p>Saltando...</p>";
    }

    public function emitirSom() {
        print "<p>Som de Mamifero...</p>";
    }

}


?>