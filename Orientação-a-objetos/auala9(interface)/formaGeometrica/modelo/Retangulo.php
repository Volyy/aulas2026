<?php
require_once("IFormarGeometrica.php");

class Retangulo implements IFormarGeometrica{
    private int $base;
    private int $altura;

    public function __construct($base , $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    #[Override]
    public function getArea()
    {
        return $this->altura * $this->base;
    }

    #[Override]
    public function getDesenho()
    {
        print("┌────────────────────────────┐\n");
        print("│                            │\n");
        print("│                            │\n");
        print("│                            │\n");
        print("│                            │\n");
        print("│                            │\n");
        print("└────────────────────────────┘\n");
    }

    

    /**
     * Get the value of base
     */
    public function getBase(): int
    {
        return $this->base;
    }

    /**
     * Set the value of base
     */
    public function setBase(int $base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura(): int
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura(int $altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}