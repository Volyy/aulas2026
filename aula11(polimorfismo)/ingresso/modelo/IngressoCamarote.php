<?php

require_once("IngressoVip.php");

class IngressoCamarote extends IngressoVip{

    private float $valorAdicionalCamarote;

    #[Override]
    public function getValorTotal()
    {
        return parent::getValorTotal() + $this->valorAdicionalCamarote;
    }



    /**
     * Get the value of valorAdicionalCamarote
     */
    public function getValorAdicionalCamarote(): float
    {
        return $this->valorAdicionalCamarote;
    }

    /**
     * Set the value of valorAdicionalCamarote
     */
    public function setValorAdicionalCamarote(float $valorAdicionalCamarote): self
    {
        $this->valorAdicionalCamarote = $valorAdicionalCamarote;

        return $this;
    }
}