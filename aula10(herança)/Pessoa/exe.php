<?php

require_once("modelo/PessoaFisica.php");
require_once("modelo/PessoaJuridica.php");

$pessoas = [];

do {
    echo "\n-----------MENU-----------\n";
    echo "1- cadastrar Pessoa Fisica\n";
    echo "2- Cadastrar Pessoa Juridica\n";
    echo "3- Listar\n";
    echo "4- excluir\n";
    echo "0- SAIR\n";

    $opcao = readline("Escolha a opção: ");

    switch ($opcao) {

        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            
            $pessoa = new PessoaFisica (
                  readline("nome: ") 
                , readline("Idade: ")
                , readline("CPF: "));

            array_push($pessoas , $pessoa);

            echo "\nPessoa adicionada!!!\n";

            sleep(2);

            break;

        case 2:
            
            $pessoa = new PessoaJuridica(
                readline("nome: "),
                readline("nome Fantasia: "),
                readline("CNPJ: ")
            );

            array_push($pessoas, $pessoa);

             echo "\nPessoa adicionada!!!\n";

            sleep(2);

            break;

        case 03:

            foreach($pessoas as $p){

            if($p instanceof PessoaFisica){

                echo "\nFisica: \n" . $p . "\n" ;

            }
            else{

                echo "\nJuridica: \n" . $p . "\n";

            }
            sleep(1);
            }

            sleep(5);

            break;

        case 04 :

            $count = 1 ;

            foreach ($pessoas as $p){

                echo "\n$count - $p\n";
                
                $count++;
            } 
            
            $input = readline("qual você quer excluir: ") - 1;

            if($input > count($pessoas) -1 or $input < 0 ){

                echo "\n Indice Invalido!!!! \n";
            }
            else{

            array_splice($pessoas , $input, 1);

            echo "\n pessoa removida!!\n";

            }
            sleep(2);

            break;
            
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);