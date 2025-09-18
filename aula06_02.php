<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula06_02</title>
</head>
<body>
    <h1>Aula06_02 - 17/09/25</h1>
    <!-- 
    Criar um formulário com dois campos 
    para digitar dois números
    Apresentar as operações aritméticas
    e de comparação entre esses dois números
    -->
    <form method="post" action="#">
    Número a<input type="number" name="a" required><br>
    Número b<input type="number" name="b" required><br>
    <input type="submit" value="Enviar!">
    </form>
    <hr>
    <?php
    if(count($_POST)==0)exit;
    $a=$_POST["a"];
    $b=$_POST["b"];
    echo "Adição:".($a + $b);
    echo "<br>Subtração:".($a - $b);
    echo "<br>Multiplicação:".($a * $b);
    echo "<br>Divisão:".($a / $b);
    echo "<br>Módulo:".($a % $b);
    echo "<br>Exponenciação:".($a ** $b);
    echo "<hr>";
    echo "Igualdade = ".(($a==$b)?"V":"F")."<br>";//
    echo "Idêntico = ".($a===$b)."<br>";//
    echo "Não igual = ".($a!=$b)."<br>";//
    echo "Não Idêntico = ".($a!==$b)."<br>";//
    echo "Menor: ".($a<$b)."<br>";//
    echo "Menor ou igual: ".($a<=$b)."<br>";//
    echo "Maior: ".($a>$b)."<br>";//
    echo "Maior ou igual: ".($a>=$b)."<br>";//
    ?>
  
</body>
</html>