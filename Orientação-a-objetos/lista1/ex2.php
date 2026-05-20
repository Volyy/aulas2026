<?php
require_once("model/Calculadora.php");

$calc = new Calculadora();
$calc->setNumA(readline("Digite um numero A: "))
->setNumB(readline("Digite um número B: "));

echo "Soma: " . $calc->Soma() . "\n";
echo "Subtração: " . $calc->Subtracao() . "\n";
echo "Multiplicação: " . $calc->Multiplicacao() . "\n";
echo "Divisão: " . $calc->Divisao() . "\n";
echo "Resto: " . $calc->Resto() . "\n";