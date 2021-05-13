<?php

require_once "Aluno.class.php";

class Tecnico extends Aluno {

    private $registroProfissional;
    
    public function praticar() {
       echo "<p>Estou praticando PHP</p>";
    } 

    public function getRegistroProf() {
        return $this->registroProfissional;
    }

    public function setRegistroProf($registro) {
        $this->registroProfissional = $registro;
    }
    
}

?>