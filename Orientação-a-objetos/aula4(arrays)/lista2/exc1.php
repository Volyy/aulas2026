<?php

function fahrenheit($c){
        
    $f= ($c * 1.8) + 32;
     
    return $f;
    }

function fatorial($num){
     $fatorial = $num;

    for ($i=($num - 1); $i > 1; $i--) { 
       
        $fatorial = $fatorial * $i;
       
    }
    return $fatorial;
    }

function funcao($x){

    $resultado = (($x * $x) + ( 2 * $x) + 4 );

    return $resultado ;

}

function imprimir($vetor){

    foreach($vetor as $n ){
        print($n . " , ");
    }

    print("\n\n");
}


$numeros = [];

//ler os numeros
for ($i=0; $i < 5 ; $i++) { 
    $numeros[$i] = readline("digite 5 numeros = ");
}

//celsius para fahrenheit
foreach($numeros as $c){

    $numerosFahrenheit[] = fahrenheit($c);
}

//fatorial dos numeros
foreach($numeros as $num){

    $numerosFatorial[] = fatorial($num);
}

//f(x) dos numeros
foreach($numeros as $x){

    $numerosFuncao[] = funcao($x);

}

//imprimir os resultados
 print("fahrenheit: ");
 imprimir($numerosFahrenheit);

 print("fatorial: " );
 imprimir($numerosFatorial);
 print("f(x): ");
 imprimir($numerosFuncao);

