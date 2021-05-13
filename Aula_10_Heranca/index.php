<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    
    require_once "Pessoa.class.php";
    require_once "Aluno.class.php";
    require_once "Professor.class.php";
    require_once "Funcionario.class.php";

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome('Pedro');
    $p2->setNome('Maria');
    $p3->setNome('Claudio');
    $p4->setNome('Fabiana');

    $p1->setSexo('M');
    $p4->setSexo('F');

    $p2->setCurso('Informática');
    $p3->setSalario(2500.75);
    $p4->setSetor("Estoque");

    //Irar apresentar erro
//    $p1->setReceberAum(550.20);
//  $p2->mudarTrabalho();
//    $p4->cancelarMatr();

    $p3->receberAum(550.20);
    $p4->mudarTrabalho();
    $p2->cancelarMatr();

$p2->setIdade(39);

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    
    ?>
    </pre>
</body>

</html>