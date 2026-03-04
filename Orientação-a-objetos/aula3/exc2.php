<?php

function area($base , $altura){

    $area = $base * $altura;

    return $area;
}

function perimetro($base,$altura){

    $perimetro = ($base*2) + ($altura*2);

    return $perimetro;
}

for ($i=1; $i <= 3; $i++) { 
    print("\n retangulo: $i \n");

    $base = readline("informe a base: ");
    $altura = readline("informe a altura: ");

    print("a area do seu triangulo é: " . area($base , $altura) . "\n");
    print("o perimetro do seu triangulo é: " . perimetro($base,$altura) . "\n");
}