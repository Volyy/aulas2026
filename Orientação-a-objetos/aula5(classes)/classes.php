<?php

class Monitor{

    public $polegadas;
    public $resolucao;
    public $marca;
    public $cor;

    function ligar(){
        print("o monitor esta ligado!");
    }

    function desligar(){
        print("o monitor foi desligado!");
    }
}

$monitor1 = new Monitor();

$monitor1->polegadas = 25;
$monitor1->resolucao = "1920x1080";
$monitor1->marca = "AOC";
$monitor1->cor = "preto";

$monitor1->ligar();
$monitor1->desligar();

$monitor2 = new Monitor();

$monitor2->polegadas = 25;
$monitor2->resolucao = "1920x1080";
$monitor2->marca = "AOC";
$monitor2->cor = "preto";

$monitor2->ligar();
$monitor2->desligar();