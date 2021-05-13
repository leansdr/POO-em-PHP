<?php

class ContaBanco
{
    //Atributos
    public       $numConta;
    protected    $tipo;
    private      $dono;
    private      $saldo;
    private      $status;

    //Métodos Especiais
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    //Metodos especificos da classe
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            print "<p>Conta com dinheiro. Não é possivel encerra-la</p>";
        } elseif ($this->getSaldo() < 0) {
            print "<p>Conta em Débito. Não é possivel encerra-la</p>";
        } else {
            $this->setStatus(false);
            print "<p>Conta de " . $this->getDono() . " encerrada com sucesso!</p>";
        }
    }

    public function depositar($v)
    {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $v);
            print "<p>Deposito de R$$v realizado na conta de " . $this->getDono() . "</p>";
        } else {
            print "Impossivel Depositar - Conta fechada<br/>";
        }
    }

    public function sacar($v)
    {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                print "<p>Saque de R$$v autorizado na conta de " . $this->getDono() . "</p>";
            } else {
                print "Saldo Insuficiente<br/>";
            }
        } else {
            print "Impossivel sacar - Conta fechada<br/>";
        }
    }

    public function pagarMensal()
    {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        }

        if ($this->getStatus() == true) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
                print "<p>Mensalidade de R$$v debitada da conta de " . $this->getDono() . "</p>";
            } else {
                print "Saldo Insuficiente<br/>";
            }
        } else {
            print "Impossivel pagar<br/>";
        }
    }

    //Metodos Especiais - GETTERS E SETTERS

    public function setNumConta($n)
    {
        $this->numConta = $n;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setTipo($t)
    {
        $this->tipo = $t;
    }

    public function getTipo()
    {

        return $this->tipo;
    }

    public function setDono($d)
    {
        $this->dono = $d;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setSaldo($s)
    {
        $this->saldo = $s;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setStatus($s)
    {
        $this->status = $s;
    }

    public function getStatus()
    {
        return $this->status;
    }
}