<?php

class Calculadora {
    private $numA;
    private $numB;
    

    public function Soma(){

    return $this->getNumA() + $this->getNumB();


    }


    public function Subtracao(){

    return $this->getNumA() - $this->getNumB();

    }

    public function Multiplicacao(){

    return $this->getNumA() * $this->getNumB();

    }


    public function Divisao(){

    return $this->getNumA() / $this->getNumB();

    }

    public function Resto(){

    return $this->getNumA() % $this->getNumB();

    }



    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}
