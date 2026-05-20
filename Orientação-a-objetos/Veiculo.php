<?php

class Veiculo {
    private $capacidade;
    private $passagensVendidas;

    public function __construct($capacidade) {
        $this->capacidade = $capacidade;
        $this->passagensVendidas = 0; 
    }



    public function venderPassagem($quantidade = 1){

    if (($this->passagensVendidas + $quantidade) <= $this->capacidade) {
            $this->passagensVendidas += $quantidade;
            return true;
        }
        return false; 


    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of passagensVendidas
     */
    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    /**
     * Set the value of passagensVendidas
     */
    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }
}























