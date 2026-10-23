<?php

abstract class Calculo{
    protected int $numA ;
    protected int $numB ;

    abstract function calcular();
    abstract function getSinal();

    public function __construct($numA , $numB) {
        $this->numA = $numA ;
        $this->numB = $numB ;
    }

    public function __toString()
    {
        return "\n" . $this->numA . $this->getSinal() . $this->numB . " = " . $this->calcular() . "\n";
    }

    

    /**
     * Get the value of numA
     */
    public function getNumA(): int
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA(int $numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB(): int
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB(int $numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}