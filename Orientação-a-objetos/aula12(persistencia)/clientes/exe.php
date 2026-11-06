<?php

/*
require_once("util/Conexao.php");

//testar a conexão com o banco de dados
$conexao = conexao::getConexao();

print_r($conexao);

exit;
*/

require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/ClienteDAO.php");

$clienteDAO = new ClienteDAO();

do{

    echo "\n---CADASTRO DE CLIENTES---\n";
    echo "1 - Innserir Cliente PF\n";
    echo "2 - Inserir Cliente PJ\n";
    echo "3 - Listar\n";
    echo "4 - Buscar\n";
    echo "5 - Excluir\n";
    echo "0 - Sair\n";

    $opcao = readline("");

    switch($opcao) {
        
        case 1:

            $clientePF = new ClientePF();
            $clientePF->setNomeCompleto(readline("\ninforme o nome completo: "));
            $clientePF->setNomeSocial(readline("\ninforme o nome social: "));
            $clientePF->setCpf(readline("\nInfrome o CPF: "));
            $clientePF->setEmail(readline("\nInforme o e-mail: "));

            $clienteDAO->inserir($clientePF);

            break;

        case 2:

            $clientePJ = new ClientePJ();

            $clientePJ->setRazaoSocial(readline("\ninforme a razao social: "));
            $clientePJ->setNomeSocial(readline("\ninforme o nome social: "));
            $clientePJ->setCnpj(readline("\nInfrome o CNPJ: "));
            $clientePJ->setEmail(readline("\nInforme o e-mail: "));

            $clienteDAO->inserir($clientePJ);
            
            break;

        case 3:

           $clientes = $clienteDAO->listar();

           foreach($clientes as $c){
            echo "\n$c\n";
           }

            break;

        case 0:

            echo "progrema encerrado!\n";

            break;

        default:

            echo "opcao invalida!";


    }

} while($opcao != 0);