<?php

require_once("Instrumento.php");

class Prova extends Instrumento{

    #[Override]
    public function getNotaFinal()
    {
        $notaFinal = $this->nota + ($this->nota * 0.30) ;

        if($notaFinal > 10){
            $notaFinal = 10;
        }

        return $notaFinal;
    }

    #[Override]
    function getTipo()
    {
        return "prova";
    }
}