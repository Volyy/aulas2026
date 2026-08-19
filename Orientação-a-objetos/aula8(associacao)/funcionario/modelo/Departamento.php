<?php

class Departamento{
    private string $nome;
    private int $numeroSala;

    function __construct($nome , $numeroSala)
    {
        $this->nome = $nome;
        $this->numeroSala = $numeroSala;
    }

    function __toString()
    {
        return "\ndepartamento: " . $this->nome . "\nnumero da sala: " . $this-> numeroSala . "\n";
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of numeroSala
     */
    public function getNumeroSala(): int
    {
        return $this->numeroSala;
    }

    /**
     * Set the value of numeroSala
     */
    public function setNumeroSala(int $numeroSala): self
    {
        $this->numeroSala = $numeroSala;

        return $this;
    }
}