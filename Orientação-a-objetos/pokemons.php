<?php

class Pokemon{
    public $nome;
    public $tipo;
    public $nivel;
    public $exp;
    public $ataque;
    public $defesa;
    public $velocidade;

    function __construct($nome,$tipo,$nivel,$exp,$ataque,$defesa,$velocidade)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->nivel = $nivel;
        $this->exp = $exp;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->velocidade = $velocidade;
    }

    function subirNivel(){
       $this->exp = 0;
       $this->nivel++;
       $this->ataque += 2;
       $this->defesa += 2;
       $this->velocidade += 1;
    }

    function batalhar(){
        $num = rand(1,20);

        if($num >= 10){
            $expganha = rand(10,50);
            print("Seu pokemon venceu! Ganhou $expganha exp.\n");
            
            $this->exp += $expganha;

            if($this->exp >= 100){
                print("Seu pokemon subiu de nivel!\n");
                $this->subirNivel();
                print("Novo nivel: $this->nivel\n");
            }
        } else {
            print("Você perdeu a batalha.\n");
        }
    }
}

$pokemon1 = new Pokemon("Joao","paulista",1,0,6,8,7);
$pokemon2 = new Pokemon("Erik","indigena",1,0,5,7,9);

while(true){
    $input = (int) readline("qual pokemon vc escolhe p ara batalhar:\n1- $pokemon1->nome 2- $pokemon2->nome 0- sair\n");

    if($input == 1){
        $pokemon1->batalhar();
        print("\n\n");
    }
     elseif($input == 2){
        $pokemon2->batalhar();
        print("\n\n");
    } elseif($input == 0){
        
        print("saindo...");
        break;
    }
}