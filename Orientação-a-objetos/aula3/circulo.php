<?php
$raio = 0;

for ($i=1; $i <= 3 ; $i++) { 
print("circulo: $i \n");    

$raio = readline("\n qual o raio do seu circulo(em cm):  \n");

print(" a area do seu circulo é: " . area($raio) . "\n");

print("a circunferencia do seu circulo é: " . circunferencia($raio) . "\n");
}


function area($raio){

    $area = 3.14 * ($raio*$raio);

    return $area;

}

function circunferencia($raio){

    $circunferencia = 2 * 3.14 * $raio;

    return $circunferencia;
}