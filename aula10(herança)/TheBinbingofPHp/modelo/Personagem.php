<?php

require_once("Inimigo.php");
require_once("Item.php");
require_once("ItemAtivo.php");

class Personagem extends Inimigo{

    private array $itens;
    private ItemAtivo $itemAtivo;

    function ListarItens(){

    foreach ($this->itens as $item){

        echo $item;

    }
    }

    function PegarItem(Item $item){

        $this->{$item->getAtributo()} += $item->getQuantidade() ;

    }

}