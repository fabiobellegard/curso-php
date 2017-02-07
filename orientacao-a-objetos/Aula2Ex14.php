<?php

class Turma{
  public $periodo;
  public $serie;
  public $sigla;
  public $tipodeEnsino;
}

$turma1 = new Turma;
$turma1->periodo = 'Tarde';
$turma1->serie = 8;
$turma1->sigla = 'A';
$turma1->tipodeEnsino = 'Fundamental';


$turma2 = new Turma;
$turma2->periodo = 'Manha';
$turma2->serie = 5;
$turma2->sigla = 'B';
$turma2->tipodeEnsino = 'Fundamental';

echo "Periodo: $turma1->periodo\n";
echo "Serie: $turma1->serie\n";
echo "Sigla: $turma1->sigla\n";
echo "Tipo de Ensino: $turma1->tipodeEnsino\n\n";

echo "Periodo: $turma2->periodo\n";
echo "Serie: $turma2->serie\n";
echo "Sigla: $turma2->sigla\n";
echo "Tipo de Ensino: $turma2->tipodeEnsino\n\n";
