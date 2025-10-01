<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07_01</title>
</head>
<body>
    <h1>Aula07_01 - 24/09/25</h1>
    <h2>Operadores Lógicos</h2>
    <?php
    $a=50;
    $b=120;
    $c= ($a<=$b);//true
    $d= !($a<=$b);//false
    var_dump($c);           
    echo "<br>";
    var_dump($d);
    echo "<br>";
    $e=(($a<=$b) && !($a>=200));//true
    var_dump($e);
    echo "<br>";
    $f=(!($a<=$b) || ($a>=200));//false
    var_dump($f);
    echo "<br>";
    $g=!(($a<=$b) xor ($a>=200));//false
    var_dump($g);
    ?>
    <h2>Operador Ternário</h2>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=!($a<=$b) ? "Verdadeiro" : "Falso";
    $e=!($a>=$c) ? "Verdadeiro" : "Falso";
    echo "d = $d<br>e = $e";
    ?>
</body>
</html>