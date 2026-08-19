<?php
require_once("modelo/Atleta.php");
require_once("modelo/Pais.php");

$atletas = [];

do {
    echo "\n-----------MENU-----------\n";
    echo "1- cadastrar atleta\n";
    echo "2- Excluir atleta\n";
    echo "3- Listar atletas\n";
    echo "0- SAIR\n";

    $opcao = readline("Escolha a opção: ");

    switch ($opcao) {

        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:

            $pais = new Pais(
                readline("pais: ") ,
                readline("continente: ")
            );
            $atleta = new Atleta(
                readline("nome:") ,
                readline("idade: ") ,
                readline("esporte: ") ,
                $pais
            );

            array_push($atletas , $atleta);
            break;

        case 2:
            $cont = 0;
            foreach($atletas as $a){
                echo "\n $cont- " . $a->getNome() . "\n";
                $cont++;
            }
            $input = readline("qual atleta vc deseja excluir: ");
            array_splice($atletas , $input , 1);
          
            break;

        case 3:
            foreach($atletas as $a){
                echo "\n $a \n";
            }
            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
