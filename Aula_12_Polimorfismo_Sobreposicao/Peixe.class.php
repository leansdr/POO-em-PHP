<?php

require_once "Animal.class.php";

class Peixe extends Animal {

    private $corEscama;

    public function locomover() {
        print "<p>Nadando...</p>";
    }

    public function alimentar() {
        print "<p>Comendo Substancias...</p>";
    }

    public function emitirSom() {
        print "<p>Peixe não emite som</p>";
    }

    public function soltarBolha() {
        print "<p>Soltou uma bolha...</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}

?>