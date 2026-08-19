<?php
class Cidade
{
    private $nome;
    private $populacao;
    private $area;
    private $uf;
    private $ddd;

    public function __construct($nome, $populacao, $area, $uf, $ddd)
    {
        $this->nome = $nome;
        $this->populacao = $populacao;
        $this->area = $area;
        $this->uf = $uf;
        $this->ddd = $ddd;
    }

    public function __toString()
    {
        return "cidade : {$this->nome} - {$this->uf} " .
            "| populacao: {$this->populacao}" .
            " | area: {$this->area} KM2" .
            "| DDD: {$this->ddd}";
    }


    function aumentarPopulacao($populacaoAdicional)
    {
        $this->populacao += $populacaoAdicional;
    }

    function diminuirPopulacao($populacaoAdicional)
    {
        $this->populacao -= $populacaoAdicional;
    }

    function calcularDensidadeDemografica(){
        return $this->populacao / $this->area;
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
     * Get the value of populacao
     */
    public function getPopulacao()
    {
        return $this->populacao;
    }

    /**
     * Set the value of populacao
     */
    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    /**
     * Get the value of area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea($area): self
    {
        $this->area = $area;

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
     * Get the value of ddd
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * Set the value of ddd
     */
    public function setDdd($ddd): self
    {
        $this->ddd = $ddd;

        return $this;
    }
}

$c1 = new Cidade("Curitiba", 1773733, 434.9, "PR", 41);

$continuar = true;

echo $c1;

while ($continuar) {
    print("\n o que voce quer fazer com a sua cidade? \n");
    $input = readline("\n1 - aumentar a populacao.\n 2 - diminuir a populacao.\n 3 - mudar nome.\n 4 - calcular densidade demografica \n 0 - sair \n");

   switch ($input) {

    case 0:
        print("\nsaindo...\n");
        $continuar = false;
        break;

    case 1:
        $c1->aumentarPopulacao(readline("o quanto voce quer aumentar? "));
        print("\nPopulação aumentada! \n");
        print("\n" . $c1 . "\n");
        break;

    case 2:
        $c1->diminuirPopulacao(readline("o quanto voce quer diminuir? "));
        print("\n População diminuída! \n");
        print("\n" .$c1 . "\n");
        break;

    case 3:
        $c1->setNome(readline("qual sera o novo nome? "));
        print("\n Nome alterado! \n");
        print("\n" .$c1 . "\n");
        break;

    case 4:
        print("\ndensidade demografica: " . $c1->calcularDensidadeDemografica() . "\n");
        break;

    default:
        print("\nOpção inválida!\n");
        break;
}
}
