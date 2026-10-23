<?php

require_once("modelo/Divisao.php");
require_once("modelo/Multiplicacao.php");
require_once("modelo/Resto.php");
require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");

$continuar = true ;
do{

$numA = readline("primeiro numero: ") ;
$numB = readline("segundo numero: ");

if($numA == 0 && $numB == 0){
    echo "fim do programa." ;
    $continuar = false ;
    break ;
}

echo "\n---------- ESCOLHA A OPERAÇÃO ----------\n";
echo "1 - Soma \n";
echo "2 - Subtração\n";
echo "3 - Multiplicação\n";
echo "4 - Divisão\n";
echo "5 - Resto\n";

$input = readline("");

switch($input){

    case 1:
        $c = new Soma($numA , $numB);

        echo $c;

        break;

    case 2:
        $c = new Subtracao($numA , $numB);

        echo $c;

        break;

      case 3:
        $c = new Multiplicacao($numA , $numB);

        echo $c;

        break;

    case 4:
        if( $numA == 0 || $numB ==0){
            echo "nao é possivel fazer divisao com 0.\n";

        }else{
            $c = new Divisao($numA,$numB);

            echo $c;
        }

        break;

    case 5:
        if( $numA == 0 || $numB ==0){
            echo "nao é possivel fazer divisao com 0.\n";

        }else{
            $c = new Resto($numA,$numB);

            echo $c;
        }

        break;

      default:
            echo "Opção INVÁLIDA!\n";


}


}while($continuar);