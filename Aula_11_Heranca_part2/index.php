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
        require_once "Visitante.class.php";
        require_once "Aluno.class.php";
        require_once "Bolsista.class.php";
        require_once "Professor.class.php";
        require_once "Tecnico.class.php";

        //$p1 = new Pessoa();

       /* $v1 = new Visitante();
        $v1->setNome('Juvenal');
        $v1->setIdade(32);
        $v1->setSexo('M');
        */

       /*
        $a1 = new Aluno();
        $a1->setNome('Pedro');
        $a1->setMatricula(123);
        $a1->setIdade(16);
        $a1->setSexo('M');
        $a1->setCurso('Informatica');
        $a1->pagarMensalidade();
        print_r($a1);

        $b1 = new Bolsista();
        $b1->setMatricula(12333);
        $b1->setNome('Jubileu');
        $b1->setBolsa("12.5");
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        $b1->setSexo("M");
        $b1->pagarMensalidade();
        print_r($b1);
        */
/*
        $prof = new Professor();
        $prof->setNome('Miguel');
        $prof->setIdade(57);
        $prof->setSexo('M');
        $prof->setEspecialidade('Engenharia');
        $prof->setSalario('15.000');
        $prof->receberAum('10');
        print_r($prof);
*/

    $tecnico = new Tecnico();
    $tecnico->setNome('Leandro');
    $tecnico->setIdade(39);
    $tecnico->setSexo('M');
    $tecnico->setRegistroProf(123456);
    print_r($tecnico);

     ?>
</pre>
</body>

</html>