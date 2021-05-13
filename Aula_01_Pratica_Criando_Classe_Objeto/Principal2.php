<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - Aula 01 (Pratica) - Criando Classe e Objeto</title>
</head>

<body>

    <?php

    require_once "Carro.php";

    $car = new Carro;
    $car->desligar();
    print_r($car);
    $car->movimentar();
    print_r($car);
    $car->ligar();
    print_r($car);
    $car->movimentar();


    ?>

</body>

</html>