<?php

require_once("Instrumento.php");

class Participacao extends Instrumento{

    #[Override]
    public function getNotaFinal()
    {
        return $this->nota;
    }

    #[Override]
    function getTipo()
    {
        return "participação";
    }
}