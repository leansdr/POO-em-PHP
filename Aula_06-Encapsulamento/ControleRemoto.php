<?php
require_once "Controlador.php";

class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }

    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        echo "<p>-----------MENU---------------</p>";
        echo "<br>Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br>Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu()
    {
        echo "<br>Fechando Menu...";
    }

    public function maisVolume()
    {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() + 10);
        }else {
            echo "<p>Está desligado! Não posso aumentar o volume</p>";
        }
    }

    public function menosVolume()
    {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() - 10);
        }
        else{
            echo "<p>Está desligado! Não posso diminuir o volume</p>";
        }
    }

    public function ligarMudo()
    {
        if ($this->getLigado() == true && $this->getVolume > 0) {

            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado() == true && $this->getVolume == 0) {
            $this->setVolume(50);
        }
    }

    public function play()
    {
        if ($this->getLigado() == true && !($this->getTocando())) {
            $this->getTocando(true);
        }
    }

    public function pause()
    {
        if ($this->getLigado() == true && $this->getTocando()) {
            $this->getTocando(false);
        }
    }
}