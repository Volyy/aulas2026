<?php

class Inimigo{

    protected string $nome;
    protected int $forca;
    protected int $vida;
    protected int $QntdTiros;
    protected int $Velocidade;
    protected int $BonusTiro;

    function Atacar(Inimigo $vitima){

        for ($i=1; $i < $this->QntdTiros ; $i++) { 
            $ataque = rand(1 , 20) + $this->BonusTiro;

            $defesa = rand(1 , 20) + $vitima->BonusTiro;

            if($ataque > $defesa){

                echo "$this->nome acertou um ataque! \n";
                echo "dano = $this->forca\n\n";

                $vitima->vida -= $this->forca;

                echo "Vida Restante = $vitima->vida";

            }
     }
    }

}