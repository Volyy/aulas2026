<?php

require_once("Item.php");

class ItemAtivo extends Item{

    private int $CargasNecessarias;
    private int $CargaAtual;

    function Recarregar(){

    if($this->CargaAtual < $this->CargasNecessarias){

        $this->CargaAtual++;

    }else{
        echo "\n o item ativo está totalmente carregado!!\n";
    }

    }

    


    /**
     * Get the value of CargasNecessarias
     */
    public function getCargasNecessarias(): int
    {
        return $this->CargasNecessarias;
    }

    /**
     * Set the value of CargasNecessarias
     */
    public function setCargasNecessarias(int $CargasNecessarias): self
    {
        $this->CargasNecessarias = $CargasNecessarias;

        return $this;
    }

    /**
     * Get the value of CargaAtual
     */
    public function getCargaAtual(): int
    {
        return $this->CargaAtual;
    }

    /**
     * Set the value of CargaAtual
     */
    public function setCargaAtual(int $CargaAtual): self
    {
        $this->CargaAtual = $CargaAtual;

        return $this;
    }
}