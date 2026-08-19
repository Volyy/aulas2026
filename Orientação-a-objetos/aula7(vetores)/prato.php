<?php

class Prato{
   private $descricao;
   private $quantidade;
   private $ValorUnitario; 

   public function getValorTotal(){
    return $this->quantidade * $this->ValorUnitario;
   }

   function __construct($descricao , $quantidade , $ValorUnitario) 
   {
     $this->descricao = $descricao;
     $this->quantidade = $quantidade;
     $this->ValorUnitario = $ValorUnitario;
   }

   function __toString()
   {
    $string = "descricao: " . $this->descricao;
    $string .= "\nquantidade: " . $this->quantidade;
    $string .= "\nvalor unitario: " . $this->ValorUnitario;
    $string .= "\nvalor total: " . $this->getValorTotal();

    return $string;
   }

   

   /**
    * Get the value of descricao
    */
   public function getDescricao()
   {
      return $this->descricao;
   }

   /**
    * Set the value of descricao
    */
   public function setDescricao($descricao): self
   {
      $this->descricao = $descricao;

      return $this;
   }

   /**
    * Get the value of quantidade
    */
   public function getQuantidade()
   {
      return $this->quantidade;
   }

   /**
    * Set the value of quantidade
    */
   public function setQuantidade($quantidade): self
   {
      $this->quantidade = $quantidade;

      return $this;
   }

   /**
    * Get the value of ValorUnitario
    */
   public function getValorUnitario()
   {
      return $this->ValorUnitario;
   }

   /**
    * Set the value of ValorUnitario
    */
   public function setValorUnitario($ValorUnitario): self
   {
      $this->ValorUnitario = $ValorUnitario;

      return $this;
   }
}

$pratos = [];

for ($i=1; $i <= 3 ; $i++) { 
    $prato = new Prato(readline("descricao: ") , readline("quantidade: ") , readline("valor unitario: "));
    print("\n");
    array_push($pratos , $prato);
}

print("\n dados de todos os pratos: \n");
$soma = 0;
foreach($pratos as $p){
    print("\n $p \n");
    $soma += $p -> getValorTotal();
}

print("\nvalor total da janta: $soma");
