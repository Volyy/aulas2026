<?php

require_once("Passeio.php");

class CarroPasseio extends Passeio{

    public function __toString()
    {
        return "Modelo: " . $this->modelo . " | Velocidade Max: " . $this->velocidadeMax . " | cor: " . $this->cor . " | quantidade de passageiros: " . $this->qntPassaigeiros ;
    }

}