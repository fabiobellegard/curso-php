<?php

class Funcionario{
  public $nome;
  public $salario;

}

$funcionario1 = new Funcionario;
$funcionario1->nome = 'Marcelo Martins';
$funcionario1->salario = 1800.57;

$funcionario2 = new Funcionario;
$funcionario2->nome = 'Rafael Consentino';
$funcionario2->salario = 2000.88;

echo "Funcionario: $funcionario1->nome\n";
echo "Salario: $funcionario1->salario\n\n";

echo "Funcionario: $funcionario2->nome\n";
echo "Salario: $funcionario2->salario\n\n";
