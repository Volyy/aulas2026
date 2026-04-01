<?php
function area($retangulo){

    $area = $retangulo["base"] * $retangulo["altura"];
    return $area;
}

$retangulos = [];

for ($i=1; $i <= 5 ; $i++) { 
    $retangulo["base"] = readline("qual a base do triangulo " . $i . ": ");
    $retangulo["altura"] = readline("qual a altura do triangulo " . $i . ": ");
        echo "\n";
    array_push($retangulos , $retangulo) ; 
}
    $cont = 1;
    foreach ($retangulos as $retanguloLido){
        print("area retangulo $cont : " . area($retanguloLido) . "\n\n" );
        $cont++;
        
    }

