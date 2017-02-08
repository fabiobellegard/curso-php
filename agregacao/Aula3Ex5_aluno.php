<?php

require_once 'Aula3Ex5_turma.php';

Class Aluno{
  public $nome;
  public $dataNascimento;
  public $RG;
}

$aluno = new Aluno;
$aluno->turma = $turma;
$aluno->nome = 'Rafael Consentino';
$aluno->RG = 111111;

echo "O periodo do aluno é: {$aluno->turma->periodo}\n";
