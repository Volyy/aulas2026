<?php

class Escola {
    private $nome ;
    private $endereco;
    private $alunos;

    function __construct($nome , $endereco , $alunos)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->alunos = $alunos;
    }

    function __toString()
    {
        $string = "nome: " . $this->nome;
        $string .= " | endereco: " . $this->endereco;
        $string .= " | alunos: " . $this->alunos;

        return $string;
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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of alunos
     */
    public function getAlunos()
    {
        return $this->alunos;
    }

    /**
     * Set the value of alunos
     */
    public function setAlunos($alunos): self
    {
        $this->alunos = $alunos;

        return $this;
    }
}

$escolas = [];
for ($i=1; $i <= 4 ; $i++) { 
    $escola = new Escola(readline("nome da escola $i: ") ,
    readline("endereco da escola $i: ") ,
     readline("quantidade de alunos da escola $i: ") );

     array_push($escolas , $escola);
}

print("dados de todas as escolas: \n\n");
foreach($escolas as $e){
    
    print($e . "\n") ;
    
}

$maior = 0; $maiorEscola = NULL;

print("\nescola com mais alunos: \n\n");
foreach($escolas as $e){
    if($e->getAlunos() > $maior ){
        $maior = $e->getAlunos();
        $maiorEscola = $e;
    }
}

print($maiorEscola);