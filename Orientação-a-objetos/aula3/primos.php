<?php

function primo($num){

    //$divisores = 0;


    for ($i=($num / 2); $i >= 2 ; $i--) { 
        $multi = $num % $i;

        if ($multi == 0){
            return false;
        }
    }

    return true;

   
}

$num = 2;
while($num >= 2){
    $num = readline("informe o numero:");



    if(primo($num)){

        print("$num é primo. \n");
    }

    else{
        print("$num nn é primo. \n");
    }
}

