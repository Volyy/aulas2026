<?php

function soma($vetor){
$soma = 0;

foreach ($vetor as $num) {
        $soma = $soma + $num;
    }

    return $soma;
}

function pares($vetor){
    $pares = 0;
    foreach($vetor as $num){
        $mod = $num % 2;
        if($mod == 0){
            $pares++;
        }

    }
    return $pares;
}

function impares($vetor){

    $impares = 0;
    foreach($vetor as $num){
        $mod = $num % 2;
        if($mod != 0){
            $impares++;
        }
    }
    return $impares;
}

function div5($vetor){
    $divisiveis = 0;
    foreach($vetor as $num){
        $mod = $num % 5;
        if($mod == 0){
            $divisiveis++;
        }

    }
    return $divisiveis;
}

function diferença($vetor){
    $maior = 0;
    foreach($vetor as $num){
        if($num > $maior){
            $maior = $num;
        }
    }

    $menor = $maior;
    foreach($vetor as $num){
        if($num < $menor){
            $menor = $num;
        }
    }

    $diferença = $maior - $menor;

    return $diferença;
}

function quantidade($vetor){
$quant = 0;
    foreach($vetor as $num){
        if($num == 3 or $num == 6 or $num == 9){
            $quant++;
        }
    }

    return $quant;
}


$numeros = [];

$n = readline("informe um numero: ");
while( $n != 0){


array_push($numeros , $n );
$n = readline("informe um numero: ");


}

print("dados do seu vetor: \n\n");

print("soma: " . soma($numeros));
print("\n\n");

print("pares: " .pares($numeros));
print("\n\n");

print("impares: " . impares($numeros));
print("\n\n");

print("divisiveis por 5: " . div5($numeros));
print("\n\n");

print("diferença entre o menor e o maior: " . diferença($numeros));
print("\n\n");

print("quantidade de numeros 3,6 ou 9: " . quantidade($numeros));
print("\n\n");
