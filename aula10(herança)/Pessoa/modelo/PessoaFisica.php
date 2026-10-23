<?php

require_once("Pessoa.php");

class PessoaFisica extends Pessoa{

    protected int $idade;
    protected string $cpf;

    public function __toString()
    {

        return "nome: " . $this->nome . " | idade: " . $this->idade . " | CPF: " . $this->cpf;

    }

    public function __construct($nome , $idade , $cpf) {
        $this->nome = $nome ;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}