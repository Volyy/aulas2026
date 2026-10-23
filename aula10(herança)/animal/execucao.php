<?php

require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");

$cachorros = [
    new Cachorro("belinha" , "rni") ,
    new Cachorro("nina" , "shitzu")    ];

$gatos = [
    new Gato("Bud" , "pelo branco") ,
    new Gato("Torresmo"  , "Pelo laranja") ];

foreach($cachorros as $c){
    echo $c . "\n" ;
    echo $c->Latir() . "\n\n";

}

foreach ($gatos as $g) {
    echo $g . "\n";
    echo $g->Miar() . "\n\n";
}