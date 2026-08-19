<?php

class Despesa{
    private $descricaoDespesa;
    private $valorDespesa;

    function __construct($descricao , $valor)
    {
        $this->descricaoDespesa = $descricao;
        $this->valorDespesa = $valor;
    }

    function __toString()
    {
        $string = "\ndescricao: " . $this->descricaoDespesa;
        $string .= "\nvalor: " . $this->valorDespesa;

        return $string;
    }

       /**
     * Get the value of valorDespesa
     */
    public function getValorDespesa()
    {
        return $this->valorDespesa;
    }

    /**
     * Set the value of valorDespesa
     */
    public function setValorDespesa($valorDespesa): self
    {
        $this->valorDespesa = $valorDespesa;

        return $this;
    }

     /**
     * Get the value of descricaoDespesa
     */
    public function getDescricaoDespesa()
    {
        return $this->descricaoDespesa;
    }

    /**
     * Set the value of descricaoDespesa
     */
    public function setDescricaoDespesa($descricaoDespesa): self
    {
        $this->descricaoDespesa = $descricaoDespesa;

        return $this;
    }
}

class Receita{
    private $descricaoReceita;
    private $valorReceita;

    function __construct($descricao , $valor)
    {
        $this->descricaoReceita = $descricao;
        $this->valorReceita = $valor;
    }
    
     function __toString()
    {
        $string = "\ndescricao: " . $this->descricaoReceita;
        $string .= "\nvalor: " . $this->valorReceita;

        return $string;
    }
 
    /**
     * Get the value of valorReceita
     */
    public function getValorReceita()
    {
        return $this->valorReceita;
    }

    /**
     * Set the value of valorReceita
     */
    public function setValorReceita($valorReceita): self
    {
        $this->valorReceita = $valorReceita;

        return $this;
    }

    /**
     * Get the value of descricaoReceita
     */
    public function getDescricaoReceita()
    {
        return $this->descricaoReceita;
    }

    /**
     * Set the value of descricaoReceita
     */
    public function setDescricaoReceita($descricaoReceita): self
    {
        $this->descricaoReceita = $descricaoReceita;

        return $this;
    }
}

$receitas = [];
$despesas = [];

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Adicionar Receita\n";
    echo "2- Adicionar Despesa\n";
    echo "3- listar Receitas\n";
    echo "4- Listar Despesas\n";
    echo "5- Sumarizar\n";
    echo "0- SAIR\n";

    $opcao = readline("Escolha a opção: ");

    switch ($opcao) {

        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            $receita = new Receita(readline("descricao: ") , readline("valor: "));
            array_push($receitas , $receita);

            echo "\n receita adicionada!!! \n";

            sleep(2);

            break;

        case 2:
            $despesa = new Despesa(readline("descricao: ") , readline("valor: "));
            array_push($despesas , $despesa);

            echo "\n despesa adicionada!!! \n";

            sleep(2);
            break;

        case 3:
            foreach($receitas as $receita){
                echo "\n" . $receita . "\n";
            }

            sleep(3);
            break;

        case 4:
            foreach($despesas as $despesa){
                echo "\n". $despesa . "\n";
            }

            sleep(3);
            break;

        case 5:
            $totalReceita = 0;
            $totalDespesa = 0;
            
            foreach($receitas as $r){
                $totalReceita += $r->getValorReceita();
            }
            foreach($despesas as $d){
                $totalDespesa += $d->getValorDespesa();
            }

            echo "\n Total Receita: $totalReceita \n";
            echo " Total Despesa: $totalDespesa \n";
            echo "Saldo: " . $totalReceita - $totalDespesa . "\n" ;

            sleep(3);

            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);

