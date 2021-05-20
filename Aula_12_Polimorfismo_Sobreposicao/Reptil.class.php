<?php

require_once  "Animal.class.php";

class Reptil extends Animal {

    private $corEscama;

    public function locomover() {
        print "<p>Rastejando...</p>";
    }

    public function alimentar() {
        print "<p>Comendo Vegetais...</p>";
    }

    public function emitirSom() {
        print "<p>Som de Reptil...</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}

?>