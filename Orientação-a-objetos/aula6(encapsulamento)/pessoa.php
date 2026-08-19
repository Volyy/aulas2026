<?php
class Pessoa{
    private $nome;
    private $endereco;
    private $cidade;
    private $uf;
    private $altura;

    function retornaApresentacao(){
       $dados = "Olá mundo, sou " . $this->nome . "\n";
    $dados .= "Resido no endereço " . $this->endereco . "\n";
    $dados .= $this->cidade . "-" . $this->uf . "\n";
    $dados .= "E possuo uma altura de " . $this->altura;
    return $dados;
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
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     */
    public function setUf($uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}


$Pessoa1 = new Pessoa();

echo $Pessoa1 -> setNome("Victor")
         -> setEndereco("rua6 , 7")
         -> setCidade("Foz do Iguacu") 
         -> setUf("PR")
         -> setAltura(1.90)
        -> retornaApresentacao();