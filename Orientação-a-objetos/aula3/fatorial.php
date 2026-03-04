<?php

function fatorial($num){
     $fatorial = $num;

    for ($i=($num - 1); $i > 1; $i--) { 
       
        $fatorial = $fatorial * $i;
       
    }
    return $fatorial;
    }

$num = 1;

while( $num != 0){

    $num = readline("informe um numero: ");

    print("\n o fatorial do seu numero é: " . fatorial($num) . "\n");
}