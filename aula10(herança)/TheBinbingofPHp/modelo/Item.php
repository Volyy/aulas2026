<?php

class Item{

    protected string $nome;
    protected string $efeito;
    protected string $atributo;
    protected int $quantidade;
    protected int $qualidade;

    public function __toString()
    {
        return "\n Nome: " . $this->nome . "\n Efeito: " . $this->efeito . "\n Qualidade: " . $this->qualidade ;
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
     * Get the value of efeito
     */
    public function getEfeito(): string
    {
        return $this->efeito;
    }

    /**
     * Set the value of efeito
     */
    public function setEfeito(string $efeito): self
    {
        $this->efeito = $efeito;

        return $this;
    }

    /**
     * Get the value of atributo
     */
    public function getAtributo(): string
    {
        return $this->atributo;
    }

    /**
     * Set the value of atributo
     */
    public function setAtributo(string $atributo): self
    {
        $this->atributo = $atributo;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of qualidade
     */
    public function getQualidade(): int
    {
        return $this->qualidade;
    }

    /**
     * Set the value of qualidade
     */
    public function setQualidade(int $qualidade): self
    {
        $this->qualidade = $qualidade;

        return $this;
    }
}