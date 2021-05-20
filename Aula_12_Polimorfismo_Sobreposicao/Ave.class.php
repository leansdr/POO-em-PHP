<?php

require_once "Animal.class.php";

class Ave extends Animal {

    private $corPena;

    public function locomover() {
        print "<p>Voando...</p>";
    }

    public function alimentar() {
        print "<p>Comento frutas...</p>";
    }

    public function emitirSom() {
        print "<p>Som de Ave</p>";
    }

    public function fazerNinho() {
          print "<p>>Construiu um ninho</p>"; 
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

}


?>