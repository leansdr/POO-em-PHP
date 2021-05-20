<?php

/* O PHP não possui suporte para Polimorfismo de Sobrecarga. Caso o nome dos metodos forem Iguais ele ira apresentar erro.
 * A solução é criar metodos comuns porem não serão Polimorfismo de sobrecarga
 */

require_once "Lobo.class.php";

class Cachorro extends Lobo {
    
    public function emitirSom() {
        print "<p>AU AU AU !!!</p>";
    }

    function reagirFrase ($frase) {

        if(($frase == "Toma comida")||($frase == "Olá")) {
            print "<p>Abanar o rabo e latir</p>";
        }else {
            print "<p>Rosnar...</p>";
        }
    }

    function reagirHora ($hora, $min) {

        if ($hora < 12) {
            print "<p>Abanar</p>";
        }elseif ($hora >= 18) {
            print "<p>Ignorar</p>";
        }else {
            print "Abanar e latir";
        }

    }

    function reagirDono($dono) {

        if ($dono) {
            print "<p>Abanar</p>";
        }else {
            print "<p>Rosnar e Latir</p>";
        }

    }

    function reagirIdadePeso ($idade, $peso) {
        
        if ($idade < 5) {
            if($peso < 10) {
                print "<p>Abanar</p>";
            }else {
                print "<p>Latir</p>";
            }
        }else
            if ($peso < 10) {
            print "<p>Rosnar</p>";
        } else {
            print "<p>Ignorar</p>";
        }
    }
}

?>