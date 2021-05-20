<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - POO - Projeto Final</title>
</head>

<body>
    <pre>
        <?php

        require_once "classes/Video.class.php";
        require_once "classes/Pessoa.class.php";
        require_once "classes/Aluno.class.php";
        require_once "classes/Visualizacao.class.php";

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML 5");

        //print_r($v);

        $a[0] = new Aluno("Jubileu", 22, "M", "Juba");
        $a[1] = new Aluno("Creuza", 12, "F", "Creuzinha");
        //print_r($a);

        $vis[0] = new Visualizacao($a[0], $v[2]); // Jubileu assistindo a aula de HTML 5; Isso chama-se Agregação
        $vis[1] = new Visualizacao($a[0], $v[1]); // Jubileu assiste a aula de PHP;

        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);


        print_r($vis);


        ?>
     </pre>
</body>

</html>