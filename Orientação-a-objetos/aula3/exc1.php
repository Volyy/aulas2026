<?php

function calcular($x){

    $y = (5*$x) + (2*$x) + 3;
    return $y;

}

for ($i=1; $i <= 5; $i++) {

    print("\n calculo: $i \n");
    
    $x = readline("indique o valor de x: ");

    print("f(x) = " . calcular($x) . "\n");

}