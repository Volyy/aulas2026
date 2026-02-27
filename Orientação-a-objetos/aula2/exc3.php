<?php
$n1 = readline("informe o primeiro numero: ");
$n2 = readline("informe o segundo numero: ");
$n3 = readline("informe o terceiro numero: ");

if($n1 > $n2 ){
    $maiornumero = $n1;   
}
else{
    $maiornumero = $n2;
}
if($maiornumero > $n3){
    print($maiornumero  . "\n");
}
else{
    print($n3 . "\n");
}