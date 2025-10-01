<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Digite um número <input type="number" name="numero"><br>
        <input type="submit" value="Enviar!">
    </form>
</body>
</html>
<?php
if(count($_POST)==0)exit;
$numero=$_POST["numero"];
$res=($numero%2==0)?"PAR":"IMPAR";
echo "$numero é $res";
/*
Criar um formulário para digitar um número inteiro
Restagar o número, imprimir o número e verificar se 
o número digitado é PAR ou ÍMPAR, 
usando operador ternário
*/
?>
<h2>Continua</h2>