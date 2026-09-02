<?php
require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$pratos = [
    new Prato(1, "camarão à milanesa", 110.00),
    new Prato(2, "Pizza margherita", 80.00),
    new Prato(3, "Macarrão à Carbonara ", 60.00),
    new Prato(4, "Bife à Parmegiana ", 75.00),
    new Prato(5, "Risoto ao Funghi ", 70.00)
];

$pedidos = [];

do {
    echo "\n-----------MENU-----------\n";
    echo "1- cadastrar\n";
    echo "2- cancelar\n";
    echo "3- listar\n";
    echo "4- total de vendas\n";
    echo "0- SAIR\n";

    $opcao = readline("Escolha a opção: ");

    switch ($opcao) {

        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            $input = readline("n° prato: ");
            
            foreach($pratos as $p){
                
            }
            if ($input > 5 || $input < 1) {
                echo "\nPRATO INVALIDO!!!\n";
                break;
            } else {
                foreach ($pratos as $pr) {
                    if ($pr->getNumero() == $input) {
                        $prato = $pr;
                    }
                }
            }

            $p = new Pedido(
                readline("cliente: "),
                readline("garçom: "),
                $prato
            );

            array_push($pedidos, $p);

            break;

        case 2:
            $cont = 0;
            foreach ($pedidos as $p) {
                echo "\n" .$cont . "- \n" . $p;
                $cont++;
            }
            echo "\n";
            $input = readline("qual pedido deseja excluir: ");
            if ($input > count($pedidos)-1 || $input < 0) {
                echo "\nPEDIDO INVALIDO!!!\n";
                break;
            } else {
                array_splice($pedidos, $input, 1);
            }
            break;

        case 3:
            $count = 0;
            foreach($pedidos as $p){
            echo "\n" . $count . " - " . $p->listarPedido() . "\n";
            $count++;
            }
            break;

        case 4: 
            $soma = 0;
            foreach ($pedidos as $p) {
                $soma += $p->getPrato()->getValor();
            }
            echo "\n total de vendas: $soma \n";
            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);