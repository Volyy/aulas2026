<?php
function imprimirPaises($pais){
    print($pais["nome"] . " - " . $pais["continente"] . " - " . $pais["QntAbitantes"] . "\n\n");
}

function somarAbitantes($paises){
$soma = 0;
    foreach($paises as $pais){
    $soma = $soma + $pais["QntAbitantes"];

    }

    return $soma;
}

$paises = [];

for ($i=1; $i <= 5 ; $i++) { 
    $pais["nome"] = readline("qual o nome do pais " . $i . ": ");
    $pais["continente"] = readline("qual o continente do pais " . $i . ": ");
    $pais["QntAbitantes"] = readline("quantos abitantes tem o  pais " . $i . ": ");
        echo "\n";
    array_push($paises , $pais) ; 
}

foreach($paises as $pais){
    imprimirPaises($pais);
}

print("soma dos abitantes: " . somarAbitantes($paises) . "\n");