<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Metodos Especiais - Getters e Setters</title>
</head>

<body>
    <pre>
    <?php

    require_once "Caneta.php";

    $c1 = new Caneta("BIC", "Azul", 0.5);
    $c2 = new Caneta("Faber", "vermelha", 1.0);
    /*
    Atribuindo valor nos atributos usando o metodo set
    $c1 = new Caneta;
    $c1->setModelo("BIC Cristal");
    $c1->setPonta(0.5);
    //  print_r($c1);
    print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
*/
    print_r($c1);
    print_r($c2);
    ?>
</pre>
</body>

</html>