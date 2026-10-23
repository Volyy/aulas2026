<?php

class Ingresso{

    private float $valor ;

    function getValorTotal(){
        return $this->valor;
    }

    public function getValorTotalReais(){
        $valor = number_format($this->getValorTotal() , 2 , "," , "." );

        return "R$ ". $valor;
    }


    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}