<?php

class Pessoa
{
    private $nome;
    private $sobrenome;
    private $idade;

    function __construct($nome, $sobrenome, $idade)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
    }

    function __toString()
    {
        return $this->nome . " " . $this->sobrenome .  " , " . $this->idade .  " anos.";
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
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$opcao = 0;
$usuarios = [];
do {
    echo "\n-----------MENU-----------\n";
    echo "1- cadastrar\n";
    echo "2- Listar\n";
    echo "0- SAIR\n";

    $opcao = readline("Escolha a opção: ");

    switch ($opcao) {

        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            $pessoa = new Pessoa(readline("insira o nome do usuario: ") , 
                                 readline("insira o sobrenome do usuario: ") ,
                                 readline("insira a idade do usuario: ") );
            
            array_push($usuarios , $pessoa);
            print("usuario cadastrado!");

            break;

        case 2:
            print ("lista dos usuarios cadastrados: \n\n");

            foreach ($usuarios as $u) {
                print("$u \n\n");
            }
            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
