<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Polimorfismo de Sobreposição (Override)</title>
</head>

<body>
    <pre>
    <?php

        require_once "Mamifero.class.php";
        require_once "Reptil.class.php";
        require_once "Peixe.class.php";
        require_once "Ave.class.php";
        require_once "Tartaruga.class.php";
        require_once "Canguru.class.php";
        require_once "Cachorro.class.php";

        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $p = new Peixe();
        $c = new Canguru();
        $t = new Tartaruga();
        $k = new Cachorro();
        /* 
         * Polimorfismo de Sobreposição
         * Usando 3 chamadas para o mesmo metodo porem com resultados diferentes
         

        $m->locomover();
        $a->locomover();
        $r->locomover();
        $p->locomover();
        $k->locomover();
        $c->locomover();
        $t->locomover();
   */

       $m->emitirSom();
       $k->emitirSom();
       $c->emitirSom();



     ?>
</pre>
</body>

</html>