<?php

/*
* Tipo de Herança
*  
* Herança por Diferença - A classe ira herdar os atributos e metodos da classe Mãe porem também terá os seus proprios
* atributos e metodos
*
*/

require_once "Pessoa.class.php";

class Aluno extends Pessoa {

    private $matricula;
    private $curso;
    
    public function pagarMensalidade() {
        echo "<p>Pagando a Mensalidade do aluno <strong>".$this->getNome()."</strong></p>";
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}

?>