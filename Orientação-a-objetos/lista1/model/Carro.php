<?php

class Carro
{

    private $modelo;
    private $marca;
    private $anoDeFabricacao;
    private $velocidadeMax;


    public function __construct($modelo, $marca, $anoDeFabricacao, $velocidadeMax)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->anoDeFabricacao = $anoDeFabricacao;
        $this->velocidadeMax = $velocidadeMax;
    }


    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of anoDeFabricacao
     */
    public function getAnoDeFabricacao()
    {
        return $this->anoDeFabricacao;
    }

    /**
     * Set the value of anoDeFabricacao
     */
    public function setAnoDeFabricacao($anoDeFabricacao): self
    {
        $this->anoDeFabricacao = $anoDeFabricacao;

        return $this;
    }

    /**
     * Get the value of velocidadeMax
     */
    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    /**
     * Set the value of velocidadeMax
     */
    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
}
