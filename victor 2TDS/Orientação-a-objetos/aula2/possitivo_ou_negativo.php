<?php
$numeros = [];

for ($i=0; $i < 10 ; $i++) { 
    $natual =  readline("digite ". 10 - $i . " numeros: ");
    $numeros[$i] = $natual;
}

for ($j=0; $j < 10 ; $j++) { 
    if ($numeros[$j] > 0 ) {
        print($numeros[$j] . " é positivo \n" );
        
    }
    else{
        print($numeros[$j] . " é negativo \n" );
    }
    
}