<?php

abstract class Instrumento {

    protected float $nota;
    protected string $tipo;

    public function __toString()
    {
        return "instrumento: " .$this->getTipo() . " | nota: " . $this->getNotaFinal() . "\n" ;
    }

    public function __construct(float $nota , string $tipo)
    {
        $this->nota = $nota;
        $this->tipo = $tipo;
    }
    abstract function getNotaFinal();
    abstract function getTipo();

    /**
     * Get the value of nota
     */
    public function getNota(): float
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     */
    public function setNota(float $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
}