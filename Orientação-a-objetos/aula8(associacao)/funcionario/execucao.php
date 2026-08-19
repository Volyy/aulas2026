<?php

require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

$funcionarios = [];

for ($i=1; $i <= 5 ; $i++) { 
    $departamento = new Departamento("departamento" , $i);

    print("\nfuncionario $i: \n");
    $funcionario = new Funcionario(
        readline("nome: ") ,
        readline("cargo: ") ,
        readline("salario: ") ,
        $departamento
    );

    array_push($funcionarios , $funcionario);
}

foreach($funcionarios as $f){
    print($f);
}