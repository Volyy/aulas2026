<?php

require_once("modelo/pais.php");
require_once("modelo/jogador.php");
$pais = new Pais();
$pais->setNome("Brasil");
$pais->setContinente("America do Sul");
$pais->setTitulos(5);

$jogador = new jogador();
$jogador->setNome("Neymar");
$jogador->setPosicao("atacante");
$jogador->setNumero(10);
$jogador->setPais($pais);


echo "nome do jogador: " . $jogador->getNome() . "\n";
echo "Posicao do jogador: " . $jogador->getPosicao() . "\n";
echo "Numero do jogador: " . $jogador->getNumero() . "\n";
echo "Pais do jogador: " . $jogador->getPais() ;