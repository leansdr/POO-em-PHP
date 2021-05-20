<?php

/* A classe abaixo é uma classe abstrata, ou seja, não pode ser instanciada. Apenas é utilizada afim de HERANÇA.
 * Por ser uma classa abstrata, os metodos tambem são abstratos e não podem ser implementados nesta classe, apenas
 * nas sub-classes (classes-filhas); 
 */

abstract class Animal {
    
    protected $peso;
    protected $idade;
    protected $membros;

    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();

    public function getPeso() {
        return $this->peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setMembros($membros) {
        $this->membros = $membros;
    }

}

?>