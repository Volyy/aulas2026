<?php

require_once("IFormarGeometrica.php");

class Circulo implements IFormarGeometrica{
    private int $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    #[Override]
    public function getArea()
    {
        return ($this->raio * $this->raio) * 3.14;
    }

    #[Override]
    public function getDesenho()
    {
        print "         , - ~ ~ ~ - ,\n";
print "     , '               ' ,\n";
print "   ,                       ,\n";
print "  ,                         ,\n";
print " ,                           ,\n";
print " ,                           ,\n";
print " ,                           ,\n";
print "  ,                         ,\n";
print "   ,                       ,\n";
print "     ,                  , '\n";
print "       ' - , _ _ _ ,  '\n";

    }

    

    /**
     * Get the value of raio
     */
    public function getRaio(): int
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio(int $raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}