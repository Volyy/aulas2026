<?php

require_once("estado.php");
class Cidades{
    private string $nome;
    private int $qntdHabitantes;
    private int $altitude;
    private Estado $estado;

    

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
     * Get the value of qntdHabitantes
     */
    public function getQntdHabitantes(): int
    {
        return $this->qntdHabitantes;
    }

    /**
     * Set the value of qntdHabitantes
     */
    public function setQntdHabitantes(int $qntdHabitantes): self
    {
        $this->qntdHabitantes = $qntdHabitantes;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude(): int
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude(int $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado(): Estado
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado(Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}