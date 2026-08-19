<?php
class Pessoa{

    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;

    function falarOla(){
        print("Ola mundo,sou " . $this->nome . "! \n");
    }

    function falarEndereco(){
        print("moro em " . $this->endereco .  " , " . $this->cidade . "/" . $this->uf . "!\n");
    }

    function falarAltura(){
        print("tenho " . $this->altura . "metros\n");
    }
}


$Pessoa1 = new Pessoa;

$Pessoa1->nome = readline("qual o seu nome: ");
$Pessoa1->endereco = readline("qual o seu endereco: ");
$Pessoa1->cidade = readline("qual a sua cidade: ");
$Pessoa1->uf = readline("qual o seu uf: ");
$Pessoa1->altura = readline("qual a sua altura: ");

$Pessoa1->falarOla();
$Pessoa1->falarEndereco();
$Pessoa1->falarAltura();