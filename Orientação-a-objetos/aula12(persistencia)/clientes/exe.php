<?php

/*
require_once("util/Conexao.php");

//testar a conexão com o banco de dados
$conexao = conexao::getConexao();

print_r($conexao);
*/

require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");

do{

    echo "\n\n---CADASTRO DE CLIENTES---\n";
    echo "1 - Innserir Cliente PF\n";
    echo "0 - Sair\n";

    $opcao = readline("");

    switch($opcao) {
        
        case 1:

            $clientePF = new ClientePF();
            $clientePF->setNomeCompleto(readline("informe o nome completo: "));
            $clientePF->setNomeSocial(readline("informe o nome social: "));
            $clientePF->setCpf(readline("Infrome o CPF: "));
            $clientePF->setEmail(readline("Informe o e-mail: "));

            break;

        case 0:

            echo "progrema encerrado!\n";

            break;

        default:

            echo "opcao invalida!";


    }

} while($opcao != 0);