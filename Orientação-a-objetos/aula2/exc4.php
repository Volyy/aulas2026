<?php
$pares = 0;
$impares = 0;

for ($i=0; $i < 10 ; $i++) { 
    $num =  readline("digite ". 10 - $i . " numeros: ");

    if($num % 2 == 0){
        $pares++;
    }
    if($num % 2 != 0){
        $impares++;
    }
}

print("foram informados " . $impares . " numeros impares e " . $pares . "numeros pares.");