<?php
class Carro{
    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMaxima;

    

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
     * Get the value of anoFabricacao
     */
    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    /**
     * Set the value of anoFabricacao
     */
    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    /**
     * Get the value of velocidadeMaxima
     */
    public function getVelocidadeMaxima()
    {
        return $this->velocidadeMaxima;
    }

    /**
     * Set the value of velocidadeMaxima
     */
    public function setVelocidadeMaxima($velocidadeMaxima): self
    {
        $this->velocidadeMaxima = $velocidadeMaxima;

        return $this;
    }

    function __construct($modelo,$marca,$anoFabricacao,$velocidadeMaxima)
    {
        $this->setModelo($modelo)
             ->setMarca($marca)
             ->setAnoFabricacao($anoFabricacao)
             ->setVelocidadeMaxima($velocidadeMaxima);
             
    }

    function carroMaisRapido(){
        $dados = "O carro mais rapido e: " . $this->modelo . "-" . $this->marca;
        $dados .= ", fabricado em " . $this->anoFabricacao;
        $dados .= ", com velocidade maxima de " . $this->velocidadeMaxima . "KM/H \n\n";
        return $dados;
    }

      function carroMaisLento(){
        $dados = "O carro mais lento e: " . $this->modelo . "-" . $this->marca;
        $dados .= ", fabricado em " . $this->anoFabricacao;
        $dados .= ", com velocidade maxima de " . $this->velocidadeMaxima . "KM/H \n\n";
        return $dados;
    }

}

$carros = [];

for ($i=1; $i <= 3; $i++) { 
    print("carro $i: \n");
    $carro = new Carro(readline("qual o modelo do seu carro? "),
                       readline("qual a marca do seu carro? "),
                       readline("qual o ano de fabricacao do seu carro? "),
                       readline("qual a velocidade maxima do seu carro? "));

    array_push($carros, $carro);

}

$maior = $carros[0]->getVelocidadeMaxima();
$menor = $carros[0]->getVelocidadeMaxima();



foreach ($carros as $carro) {
    if($carro->getVelocidadeMaxima() > $maior){
        $maior = $carro->getVelocidadeMaxima();
    }
    elseif($carro->getVelocidadeMaxima() < $menor){
        $menor = $carro->getVelocidadeMaxima();
    }
}

foreach($carros as $carro){
    if($carro->getVelocidadeMaxima() == $maior){
       print $carro->carroMaisRapido();
    }
    elseif($carro->getVelocidadeMaxima() == $menor){
       print  $carro->carroMaisLento();
    }
}