<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
          require_once "lutador.class.php";
          require_once "luta.class.php";
          
          $l = array();  
          
            $l[0] = new Lutador("Pretty Boy","França",31,1.75,"M",68.9,11,3,1);
            $l[1] = new Lutador("Putscript","Brasil",29,1.68,"M",57.8,14,2,3);
            $l[2] = new Lutador("Snapshadow","EUA",35,1.65,"M",80.9,12,2,1);
            $l[3] = new Lutador("Dead Code","Australia",28,1.93,"M",81.6,13,0,2);
            $l[4] = new Lutador("UfoCobol","Brasil",37,1.70,"F",119.3,5,4,3);
            $l[5] = new Lutador("Neardart","EUA",30,1.81,"F",104.7,12,2,4);

            $UEC01 = new Luta();
            $UEC01->marcarLuta( $l[4] , $l[5]);
            $UEC01->lutar();

            $l[4]->status();
            $l[5]->status();


     ?>

</body>

</html>