<?php

require_once("IFormarGeometrica.php");

class Quadrado implements IFormarGeometrica{
    private int $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    #[Override]
    public function getArea()
    {
        return $this->lado * $this->lado;
    }

    #[Override]
    public function getDesenho()
    {
        print("┌──────────┐\n");
        print("│          │\n");
        print("│          │\n");
        print("│          │\n");
        print("│          │\n");
        print("└──────────┘\n");
    }

    

    /**
     * Get the value of lado
     */
    public function getLado(): int
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     */
    public function setLado(int $lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}