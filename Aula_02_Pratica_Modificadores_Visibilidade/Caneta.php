<?php

/**
 * MODIFICADORES DE VISIBILIDADE - Indicam o nível de acesso aos componentes interno de uma classe (Atributos e Métodos)
 *  - public  (publico) - a classe atual e todas as outras classes. (todo mundo pode usar) +
 *  - private (privado) - somente a classe atual. (só eu posso usar) -
 *  - protected (protegido) - a classe atual e todas as sub-classes (somente a mãe e os filhos podem usar) #
 */

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "<p>ERRO!! Não posso rabiscar</p>";
        } else {
            echo "<p>Estou rabiscando....!!</p>";
        }
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function destampar()
    {
        $this->tampada = false;
    }
}