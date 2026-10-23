<?php

require_once("Calculo.php");

Class Soma extends Calculo{

    #[Override]
    function calcular()
    {
        return $this->numA + $this->numB;
    }

    #[Override]
    function getSinal()
    {
        return "+";
    }

}