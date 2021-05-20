<?php

require_once "classes/Pessoa.class.php";

class Aluno extends Pessoa {

    private $login;
    private $totAssistido;

    public function __construct($nome,$idade,$sexo,$login) {
        parent::__construct($nome,$idade,$sexo);//chamada do construtor da classe Mãe (Pessoa), usa-se parent::;
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function viuMaisUm() {
         $this->totAssistido ++;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }
}