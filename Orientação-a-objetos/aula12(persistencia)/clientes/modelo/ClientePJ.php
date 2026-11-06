<?php

require_once("Cliente.php");

class ClientePJ extends Cliente {

    private string $RazaoSocial;
    private string $cnpj;
	public function getNome()
    {
        return $this->RazaoSocial;
    }

    public function getNroDoc()
    {
        return $this->cnpj;
    }

    public function getTipo(){
        return "J";
    }

    



    /**
     * Get the value of RazaoSocial
     */
    public function getRazaoSocial(): string
    {
    return $this->RazaoSocial;
    }

    /**
     * Set the value of RazaoSocial
     */
    public function setRazaoSocial(string $RazaoSocial): self
    {
    $this->RazaoSocial = $RazaoSocial;

    return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj(): string
    {
    return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj(string $cnpj): self
    {
    $this->cnpj = $cnpj;

    return $this;
    }
}