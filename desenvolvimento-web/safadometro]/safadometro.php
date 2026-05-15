<?php

function somatorio(int $n){
    $somatorio = 0;

    for ($i=1; $i < $n; $i++) { 
        $somatorio += $i;
    }

    return $somatorio;
}

function somaDigitos(int $num){
    $soma = 0;

    while($num > 0){
        $digito = $num %10;
         $soma += $digito;
         $num = $num / 10;
    }
   
    return $soma;

}

function safadometro($dia,$mes,$ano){
    $safadeza = somatorio($mes) + ((somaDigitos($ano) * (50-$dia))/10);

    return $safadeza;
}

$dia = $_REQUEST('campo_dia');
$mes = $_REQUEST('campo_mes');
$ano = $_REQUEST('campo_ano');

$safadeza=safadometro($dia,$mes,$ano);
$anjo= 100-$safadeza;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2><?php print("voce eh $anjo% anjo,mas aqueles $safadeza% eh safado"); ?></h2>
    
    <img src="https://imagens1.ne10.uol.com.br/blogsne10/social1/uploads/2012/09/wesley.jpg" alt="">

    <a href="index.html">recalcular</a>

</body>
</html>