<?php
for ($i=1; $i < 5; $i++) { 
    $nome = readline("qual seu nome? ");
    $peso = readline ("quantos kg vc pesa? ");
    $altura = readline ("qual a sua altura em metros? ");

    $imc = $peso / ($altura * $altura);

    print($nome . " pesa ". $peso . "kg ,mede " . $altura . "m e tem IMC " . $imc . "\n\n");
}