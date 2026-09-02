<?php

require_once("Passeio.php");

class Onibus extends Passeio{

    private $pesoMax;

    public function __toString()
    {
        return "Modelo: " . $this->modelo . " | Velocidade Max: " . $this->velocidadeMax . " | cor: " . $this->cor . " | quantidade de passageiros: " . $this->qntPassaigeiros . " | peso Max: " . $this->pesoMax ;
    }

    


    /**
     * Get the value of pesoMax
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}