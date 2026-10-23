<?php

require_once("modelo/Ingresso.php");
require_once("modelo/IngressoVip.php");
require_once("modelo/IngressoCamarote.php");

$ing = new Ingresso();
$ing-> setValor(25.5);
echo "Valor do Ingresso: " . $ing->getValorTotalReais() . "\n";

$ingVip = new IngressoVip();
$ingVip-> setValor(25.5);
$ingVip-> setValorAdicional(10.0);
echo "Valor do Ingresso VIP: " . $ingVip->getValorTotalReais() . "\n";

$ingCama = new IngressoCamarote();
$ingCama-> setValor(25.5);
$ingCama-> setValorAdicional(10.0);
$ingCama-> setValorAdicionalCamarote(20.0);
echo "Valor do Ingresso Camarote: " . $ingCama->getValorTotalReais() . "\n";