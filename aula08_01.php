<?php
/*
Crie um formulário e um código em PHP que solicita ao usuário que insira sua idade. 
O programa deve usar uma estrutura desvio condicional para determinar o status do usuário 
com base na idade, de acordo com as seguintes regras:

- Se a idade for menor que 13, o programa deve imprimir:
    "Você não pode criar uma conta. A idade mínima é 13 anos."
- Se a idade estiver entre 13 e 17 (inclusive), o programa deve imprimir:
    "Você pode criar uma conta com o consentimento dos pais."
- Se a idade estiver entre 18 e 64 (inclusive), o programa deve imprimir: 
    "Você pode criar uma conta. Bem-vindo à nossa rede social!"
- Se a idade for 65 ou mais, o programa deve imprimir: 
    "Você pode criar uma conta. Lembre-se de verificar nossas configurações de privacidade."
- Se a idade inserida for negativa ou zero, o programa deve imprimir: 
    "Idade inválida."
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08_01</title>
</head>
<body>
    <h1>Aula08_01 - 01/10/25</h1>
    <form method="post" action="">
    Digite sua idade <input type="number" name="idade" required> <br>
    <input type="submit" value="Validar"><hr>

    </form>
    
</body>
</html>
<?php
if(count($_POST)==0)exit;
$idade=$_POST["idade"];
echo "Idade digitada: <b>$idade</b><br>";

if($idade>0 && $idade<13){
    echo "Você não pode criar uma conta. A idade mínima é 13 anos.";
}
else if($idade>=13 && $idade<=17){
    echo  "Você pode criar uma conta com o consentimento dos pais.";
}
else if($idade>=18 && $idade<=64){
    echo "Você pode criar uma conta. Bem-vindo à nossa rede social!";
}
else if($idade>=65){
    echo  "Você pode criar uma conta. Lembre-se de verificar nossas configurações de privacidade.";
}
else{
    echo "Idade inválida.";
}

?>