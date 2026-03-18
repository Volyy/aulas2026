<?php

$palavras = [];
$palavrasVazio = [];

for ($i=0; $i < 5 ; $i++) { 
    $palavraAtual=  readline("digite ". 5 - $i . " palavras: ");
    $palavras[$i] = $palavraAtual;

}

for ($i=0; $i < 5; $i++) { 
   $palavrasVazio[$i] = $palavras[$i];
}

print_r($palavras);
print_r($palavrasVazio);
