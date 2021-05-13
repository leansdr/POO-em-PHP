<?php

class Carro
{
    var $marca;
    var $cor;
    var $placa;
    var $ligado;
    var $velocidade_atual;
    var $marcha_atual;
    var $freio_de_mão_puxado;
    var $chave_virada;

    function ligar()
    {
        $this->ligado = true;
        echo "<p style='color:blue'>O veículo está ligado...</p>";
    }

    function desligar()
    {
        $this->ligado = false;
        echo "<p style='color:red'>O veiculo está desligado!</p>";
    }

    function movimentar()
    {
        if ($this->ligado == false) {
            echo "<p style='color:red'>É preciso ligar o veiculo</p>";
        } else {
            echo "<p style='color:green'>O veiculo está em movimento...!!</p>";
        }
    }

    function Acelerar_ate()
    {
    }

    function mudar_marchar()
    {
    }

    function parar()
    {
    }
}