<?php

require_once("Calculo.php");

Class Subtracao extends Calculo{

    #[Override]
    function calcular()
    {
        return $this->numA - $this->numB;
    }

    #[Override]
    function getSinal()
    {
        return "-";
    }

}