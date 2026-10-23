<?php

require_once("Ingresso.php");

class IngressoVip extends Ingresso{

    private float $valorAdicional;

    public function getValorTotal(){

        return $this->getValor() + $this->valorAdicional;

    }

    


    /**
     * Get the value of valorAdicional
     */
    public function getValorAdicional(): float
    {
        return $this->valorAdicional;
    }

    /**
     * Set the value of valorAdicional
     */
    public function setValorAdicional(float $valorAdicional): self
    {
        $this->valorAdicional = $valorAdicional;

        return $this;
    }
}