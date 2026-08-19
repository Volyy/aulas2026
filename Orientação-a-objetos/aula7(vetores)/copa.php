<?php

class Selecao{
    private $pais ;
    private $tecnico;
    private $esquema ;

    public function GetDados(){
        $dados = "pais : " . $this->pais ;
        $dados .= " | tecnico: " . $this->tecnico;
        $dados .= " | esquema: " . $this ->esquema;

        return $dados;
    }
    

    /**
     * Get the value of pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     */
    public function setPais($pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of tecnico
     */
    public function getTecnico()
    {
        return $this->tecnico;
    }

    /**
     * Set the value of tecnico
     */
    public function setTecnico($tecnico): self
    {
        $this->tecnico = $tecnico;

        return $this;
    }

    /**
     * Get the value of esquema
     */
    public function getEsquema()
    {
        return $this->esquema;
    }

    /**
     * Set the value of esquema
     */
    public function setEsquema($esquema): self
    {
        $this->esquema = $esquema;

        return $this;
    }
}

$brasil = new Selecao();

$brasil->setPais("brasil");
$brasil->setTecnico("anceloti");
$brasil->setEsquema("4-2-4");

$arg = new Selecao();
$arg->setPais("argentina");
$arg->setTecnico("tecnico");
$arg->setEsquema("4-3-3");

$port = new Selecao();
$port->setPais("Portugal");
$port->setTecnico("Roberto");
$port->setEsquema("4-4-2");

$selecoes = array($brasil , $arg , $port);

print("dados das selecoes: \n");

foreach($selecoes as $s){
    echo $s->GetDados();
    print("\n");
}