<?php
class Item{
    private $nome;
    private $id;
    private $efeito;

    function __construct($nome , $id , $efeito)
    {
        $this->nome = $nome;
        $this->id = $id;
        $this->efeito = $efeito;
    }
    function __toString()
    {
        $array = "nome: " . $this-> nome;
        $array .= "\n id: " . $this-> id;

        return $array;
    }
    
    

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of efeito
     */
    public function getEfeito()
    {
        return $this->efeito;
    }

    /**
     * Set the value of efeito
     */
    public function setEfeito($efeito): self
    {
        $this->efeito = $efeito;

        return $this;
    }
}

$itens = [ 
    new Item("Rock bottom" , "1" , "não deixe seus status abaixarem pelo resto da run"), 
    new Item("Sacred Heart" , "2" , "Tiro teligiado \n +1 de dano \n 2.3x de dano \n +4 de alcance"),
    new Item("D6" , "3" , "rerola todos os itens da sala"),
    new Item("brimstone" , "4" , "substitui seus tiros com um grande raio laser"),
    new Item("R key" , "5" , "começa sua run do começo mas mantendo seus items"),
    new Item("godhead" , "6" , "envolve seus tiros com uma aura que da dano"),
    new Item("holy mantle" , "7" , "cancela o 1° dano que você leva em uma sala") ];

$indiceEscolido = array_rand($itens);
$itemEscolhido = $itens[$indiceEscolido];


$pontos = 140;

$acertou = false;

do{
    print("\npontos: $pontos ");
    print("\n ------- ITENS DISPONIVEIS ------- \n");
    foreach($itens as $i){
        print("\n" . $i . "\n");
    }
    print( "\n\n escolha 8 para uma dica (custa 20 pontos) \n\n");


    $input = readline("adivinhe o item:");

    if($input == $itemEscolhido-> getId()){
        print("você acertou!!!\n");
        print("o item escolhido era: \n $itemEscolhido \n");
        print("pontuacao final: $pontos");

        $acertou = true;

         sleep(3);
    }
     elseif($input == 8){
        print("\n dica:" .$itemEscolhido->getEfeito() . "\n");
         $pontos -= 20;
          sleep(3);

    } 
   
    else{
        print("\n voce errou , tente novamente. \n");
        $pontos -= 20;
        sleep(3);
    }


}
while(!$acertou and $pontos > 0);

if($pontos <= 0){
        print("\n voce zerou os pontos, fim de jogo!! \n");
         sleep(3);
    }

