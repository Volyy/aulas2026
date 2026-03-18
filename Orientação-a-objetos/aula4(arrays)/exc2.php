<?php

$usuarios = array(
    [
        "nome" => "Manuel de Medeiros",
        "endereco" => "Rua das Acácias",
        "cidade" => "Foz do Iguaçu",
        "uf" => "PR"
    ],
    [
        "nome" => "Juliana de Amaral",
        "endereco" => "Rua dos Pinheiros",
        "cidade" => "Florianópolis",
        "uf" => "SC"
    ],
    [
        "nome" => "Rodrigo Baidek",
        "endereco" => "Rua Dom Pedro I",
        "cidade" => "Petrópolis",
        "uf" => "RJ"
    ],
    [
        "nome" => "Fabíola da Silva",
        "endereco" => "Rua Chile",
        "cidade" => "Guarulhos",
        "uf" => "SP"
    ]
);




foreach ($usuarios as $usuario) {



    echo "Nome: " . $usuario['nome'] . " | " . " ";
    echo "endereco: " . $usuario['endereco'] . " | " . "";
    echo "cidade: " . $usuario['cidade'] . " | " . "";
    echo "uf: " . $usuario['uf'] . "\n";;


}

