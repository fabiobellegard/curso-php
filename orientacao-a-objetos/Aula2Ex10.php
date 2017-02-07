<?php

class Aluno{
  public $nome;
  public $RG;
  public $dataNascimento;
}

$aluno1 = new Aluno;
$aluno1->nome = 'Marcelo Martins';
$aluno1->RG = '33333333-3';
$aluno1->dataNascimento = '02/04/1985';

$aluno2 = new Aluno;
$aluno2->nome = 'Rafael Consentino';
$aluno2->RG = '222222222-2';
$aluno2->dataNascimento = '30/10/1984';

echo "Aluno: $aluno1->nome\n";
echo "RG: $aluno1->RG\n";
echo "Data de Nascimento: $aluno1->dataNascimento\n\n";

echo "Aluno: $aluno2->nome\n";
echo "RG: $aluno2->RG\n";
echo "Data de Nascimento: $aluno2->dataNascimento\n\n";
