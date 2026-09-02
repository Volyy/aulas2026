<?php

class RadioRelogio implements IRadio , IRelogio{
    private string $estado;

    public function __construct()
    {
        $this->estado = "Desligado";
    }

    #[Override]
    public function ligar()
    {
        $this->estado = "Ligado";
    }

    #[Override]
    public function desligar()
    {
        $this->estado = "Desligado";
    }

    #[Override]
    public function MostrarHora()
    {
    
    }

    /**
     * Get the value of estado
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}