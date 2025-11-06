<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09_01</title>
</head>
<body>
    <h1>Aula09_01 - 05/11/2025</h1>
    <?php
    //            0      1      2       3
    $user=array("Bete","João","Beto","Maria");
    /*
    Como imprimir todos os valores do array
    */
    print_r($user);
    echo "<hr>";
    $valores=[11,5.5,"teste"];
    echo "<br>[0] = ".$valores[0];//11
    echo "<br>[1] = ".$valores[1];//5.5
    echo "<br>[2] = ".$valores[2];//teste
    $valores[0]%=2;
    $valores[1]+=1;
    $valores[2].=", 123";
    echo "<hr>";
    echo "<br>[0] = ".$valores[0];//1
    echo "<br>[1] = ".$valores[1];//6.5
    echo "<br>[2] = ".$valores[2];//teste, 123
    echo "<hr>";
    $estudante=[
        "nome"=>"Bete",
        "ra"=>1234,
        "atv1"=>7,
        "atv2"=>8
    ];
    //mostrar todos os dados da estudante,
    // calcular e mostrar a média das duas atividades
    echo "<br>Nome: ".$estudante["nome"];
    echo "<br>Ra: ".$estudante["ra"];
    echo "<br>Atv1: ".$estudante["atv1"];
    echo "<br>Atv2: ".$estudante["atv2"];
    echo "<br>Media:".(($estudante["atv1"]+$estudante["atv2"])/2);
    echo "<hr>";
    $aluno =[
			["TBD","Fulano",123456789],
			["TRC","Beltrano",234567890],
			["TADS","Sicrano",345678901] 
        ];
    // TBD Beltrano  TADS
    echo $aluno[0][0]."<br>";//TBD
    echo $aluno[1][1]."<br>";//Beltrano
    echo $aluno[2][0]."<br>";//TADS
    echo "<hr>";
    $bd=[
        ["id"=>1,"nome"=>"Bete","ra"=>123],
        ["id"=>2,"nome"=>"Maria","ra"=>456],
        ["id"=>3,"nome"=>"João","ra"=>789]
    ];
    //Imprimir os dados da Maria
    echo "<br>".$bd[1]["id"];
    echo "<br>".$bd[1]["nome"];
    echo "<br>".$bd[1]["ra"];
    echo "<hr>";
    //    0    1    2    3
    $uf=["SP","RJ","MG","ES","TO","PR","BA","AM","RS"];
    for($i=0;$i<count($uf);$i++){
        echo " ".$uf[$i];
    }
    echo "<br>Quantidade: ".count($uf);
    echo "<hr>";
    $produto=[
        "nome"=>"caderno",
        "valor"=>25.5,
        "cod"=>123
    ];
    sort($uf);
    foreach($uf as $pos=>$valor){
        echo "[$pos] $valor<br>";
    }
    ?>
</body>
</html>