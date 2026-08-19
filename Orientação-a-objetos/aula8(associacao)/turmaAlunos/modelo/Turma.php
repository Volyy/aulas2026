<?php

class Turma{
    private string $nome;
    private string $curso;
    private array $alunos;

    function __construct()
    {
        $this->alunos = array();
    }

    function adicionarAluno($aluno){
        array_push( $this->alunos, $aluno);
    }
    

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of curso
     */
    public function getCurso(): string
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     */
    public function setCurso(string $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of alunos
     */
    public function getAlunos(): array
    {
        return $this->alunos;
    }

    /**
     * Set the value of alunos
     */
    public function setAlunos(array $alunos): self
    {
        $this->alunos = $alunos;

        return $this;
    }
}