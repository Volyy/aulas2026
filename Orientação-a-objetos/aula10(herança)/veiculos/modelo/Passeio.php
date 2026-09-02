<?php

require_once("Veiculo.php");

class Passeio extends Veiculo{

    protected $qntPassaigeiros;

    


    /**
     * Get the value of qntPassaigeiros
     */
    public function getQntPassaigeiros()
    {
        return $this->qntPassaigeiros;
    }

    /**
     * Set the value of qntPassaigeiros
     */
    public function setQntPassaigeiros($qntPassaigeiros): self
    {
        $this->qntPassaigeiros = $qntPassaigeiros;

        return $this;
    }
}