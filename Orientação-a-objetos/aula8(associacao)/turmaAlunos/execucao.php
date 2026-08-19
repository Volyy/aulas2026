<?php

require_once("modelo/Aluno.php");
require_once("modelo/Turma.php");

$turma = new Turma();
$turma->setNome("TDS2025");
$turma->setCurso("tds");

for ($i=1; $i <= 5; $i++) { 
    $aluno = new Aluno();
    echo "aluno $i:";
    $aluno->setNome(readline("nome: "));
    $aluno->setIdade(readline("idade: "));
    $aluno->setTurma($turma);

    $turma->adicionarAluno($aluno);
    
}

foreach($turma->getAlunos() as $a){
    echo $a . "\n";
}