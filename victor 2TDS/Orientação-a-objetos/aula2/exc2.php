<?php
$valortotal = 0;
$valorentrada = 1;

while($valorentrada > 0){

    $valorentrada = readline("com qual valor você quer contribuir? ");

    $valortotal = $valortotal + $valorentrada;
}

print("o valor final foi: " . $valortotal);