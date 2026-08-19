<?php

class Calculo{
    private $n1;
    private $n2;

    public function __construct($n1,$n2)
    {
        $this->setN1($n1)
             ->setN2($n2);
    }

    public function soma(){
        $soma = $this->getN1() + $this->getN2();
        return $soma;
    }
    public function subtracao(){
        $soma = $this->getN1() - $this->getN2();
        return $soma;
    }
    public function multiplicacao(){
        $subtracao = $this->getN1() * $this->getN2();
        return $subtracao;
    }
    public function divisao(){
        $divisao = $this->getN1() / $this->getN2();
        return $divisao;
    }
    public function resto(){
        $resto = $this->getN1() % $this->getN2();
        return $resto;
    }

    /**
     * Get the value of n1
     */
    public function getN1()
    {
        return $this->n1;
    }

    /**
     * Set the value of n1
     */
    public function setN1($n1): self
    {
        $this->n1 = $n1;

        return $this;
    }

    /**
     * Get the value of n2
     */
    public function getN2()
    {
        return $this->n2;
    }

    /**
     * Set the value of n2
     */
    public function setN2($n2): self
    {
        $this->n2 = $n2;

        return $this;
    }
}

$calculo = new Calculo(readline("qual o primeiro numero? ") , readline("qual o segundo numero? "));

print("- numeros lidos: N1 - " . $calculo->getN1() . " N2 - " . $calculo->getN2());
print("\n- Soma: " . $calculo->soma());
print("\n- Subtracao: " . $calculo->subtracao());
print("\n- multiplicacao: " . $calculo->multiplicacao());
print("\n- divisao: " . $calculo->divisao());
print("\n- resto: " . $calculo->resto());