<?php

/**
 * METODOS ACESSORES (GETTERS) E METODOS MODIFICADORES (SETTERS) E CONSTRUTORES
 *  Nessa aula de POO, vamos aprender como criar em PHP os Métodos Acessores (Getters), Métodos Modificadores (Setters) e Métodos Construtores (Construct).
 */

class Caneta
{
    public $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    /**Há duas forma de criar o metodo construtor */

    //Metodo 1: Usando a palavra __construct
    /* public function __construct()
    {
        $this->cor = "Azul";
        $this->tampar();
    }
    */

    //Metodo 2: Usando o proprio nome da classe e passando os parametros do construtor
    public function Caneta($m, $c, $p)
    {
        $this->modelo = $m;
        $this->cor    = $c;
        $this->ponta  = $p;
        $this->tampar();
    }


    public function tampar()
    {
        $this->tampada = true;
    }
    //Getters e Setters
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta($p)
    {
        $this->ponta = $p;
    }
}