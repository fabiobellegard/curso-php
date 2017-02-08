<?php

Class Funcionario{
  public $nome;
  public $salario;

  public function aumentasalario($valor)
{
  $this->salario += $valor;
}

public function consultadados()
{
  echo "Nome: $this->nome\n";
  echo "Salario: $this->salario\n\n";
}
}
