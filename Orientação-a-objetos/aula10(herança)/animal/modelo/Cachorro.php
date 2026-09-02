<?php

require_once("Animal.php");

class Cachorro extends Animal{

    function Latir(){

        return $this->nome . ": auau!";

    }

}