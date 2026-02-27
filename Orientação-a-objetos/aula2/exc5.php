<?php
$n1 = readline("informe o menor numero: ");
$n2 = readline("informe o maior numero: ");

for ($i=$n1; $i < $n2 ; $i++) { 
    if($i % 5 == 0){
        print("$i \n");
    }
}