<?php

class Veiculo {
    private $capacidade;
    private $passagensVendidas;

    public function __construct($capacidade) {
        $this->setCapacidade($capacidade);
        $this->setPassagensVendidas(0); 
    }



    public function venderPassagem($quantidade){

    if (($this->passagensVendidas + $quantidade) <= $this->capacidade) {
            $this->passagensVendidas += $quantidade;
            return true;
        }
        return false; 


    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of passagensVendidas
     */
    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    /**
     * Set the value of passagensVendidas
     */
    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }
}

$veiculo = new Veiculo(readline("qual a capacidade do veiculo?"));

$compra = true;
$venda = true;
while($venda && $compra){
    $venda = $veiculo -> venderPassagem(readline("quantas passagens voce quer comprar? "));
    if($venda){
        print("compra concluida com sucesso!");
    } else{
        print("a compra nn foi efeituada (capacidade maxima atingida) \n");
    }
    $compra = readline("deseja comprar novamente? s/n: ");
    if($compra == "s"){
        $compra = true;
    }else{$compra = false;}

}
