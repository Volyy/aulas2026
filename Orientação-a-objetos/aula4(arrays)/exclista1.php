<?php

$numeros = [];

for ($i=0; $i < 10 ; $i++) { 
    $natual =  readline("digite ". 10 - $i . " numeros: ");
    $numeros[$i] = $natual;
}

$soma = $numeros[0]; 
for ($i=1; $i <= 9; $i++) { 
    
    $soma += $numeros[$i];
}

echo "a media dos seus numeros é:" . ceil($soma/10);