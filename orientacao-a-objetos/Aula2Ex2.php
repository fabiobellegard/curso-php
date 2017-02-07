<?php

class Cliente{
  public $nome;
  public $codigo;
}

$cliente1 = new Cliente;
$cliente1->nome = "Rafael Cosentino";
$cliente1->codigo = 1;

$cliente2 = new Cliente;
$cliente2->nome = "Jonas Hirata";
$cliente2->codigo = 2;

echo "Cliente: $cliente1->nome\n";
echo "Codigo: $cliente1->codigo\n\n";

echo "Cliente: $cliente2->nome\n";
echo "Codigo Cliente: $cliente2->codigo\n\n";
