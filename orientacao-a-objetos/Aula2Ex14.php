<?php

spl_autoload_register();

class Turma{
  public $periodo;
  public $serie;
  public $sigla;
  public $tipodeEnsino;
  public $sede;
}

Class sede{
  public $localizacao;
}

$sede1 = 'Ipiranga';
$sede2 = 'Centro';

$turma1 = new Turma;
$turma1->periodo = 'Tarde';
$turma1->serie = 8;
$turma1->sigla = 'A';
$turma1->tipodeEnsino = 'Fundamental';
$turma1->sede = $sede1;


$turma2 = new Turma;
$turma2->periodo = 'Manha';
$turma2->serie = 1;
$turma2->sigla = 'B';
$turma2->tipodeEnsino = 'Medio';
$turma2->sede = $sede2;

echo "Periodo: $turma1->periodo\n";
echo "Serie: $turma1->serie\n";
echo "Sigla: $turma1->sigla\n";
echo "Tipo de Ensino: $turma1->tipodeEnsino\n";
echo "Sede: $turma1->sede\n\n";

echo "Periodo: $turma2->periodo\n";
echo "Serie: $turma2->serie\n";
echo "Sigla: $turma2->sigla\n";
echo "Tipo de Ensino: $turma2->tipodeEnsino\n";
echo "Sede: $turma2->sede\n\n";
