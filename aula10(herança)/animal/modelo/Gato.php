<?php

require_once("Animal.php");

class Gato extends Animal{

    function Miar(){

        return $this->nome . ": miau!";

    }

}