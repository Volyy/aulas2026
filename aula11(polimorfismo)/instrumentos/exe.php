<?php

require_once("modelo/Participacao.php");
require_once("modelo/Prova.php");
require_once("modelo/Trabalho.php");

$instrumentos = [];

do{
    echo "\n\n";
    echo "adicione mais " . 3 - count($instrumentos) . " instrumentos avaliativos. \n";
    echo "----------------------------------------------\n";
    echo "qual o tipo de instrumento que voce  quer adicionar?\n";
    echo " 1 - prova         2 - trabalho         3 - participação \n";
    echo "\n\n";

    $input = readline("");

    switch($input){

        case 1:

            $inst = new Prova(readline("nota: ") , "prova");

            array_push($instrumentos,$inst);

            break;

        case 2:

            $inst = new Trabalho(readline("nota: ") , "trabalho");

            array_push($instrumentos , $inst);

            break;

        case 3:
            $inst = new Participacao(readline("nota: ") , "Participacao");

            array_push($instrumentos , $inst);

            break;

        default:
            echo "Opção INVÁLIDA!\n";

    };

}while(count($instrumentos) != 3 );

$soma = 0;
foreach($instrumentos as $instrumento){

            echo "\n $instrumento \n";

            $soma = $soma + $instrumento->getNotaFinal();
}

$media = $soma / count($instrumentos);

echo "\n media: $media \n\n";