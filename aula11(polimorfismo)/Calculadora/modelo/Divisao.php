<?php

require_once("Calculo.php");

class Divisao extends Calculo{

    #[Override]
    public function calcular()
    {
            return $this-> numA / $this->numB;
        
    }

    #[Override]
    function getSinal()
    {
        return "/";
    }
}