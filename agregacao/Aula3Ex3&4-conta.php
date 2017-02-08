<?php

require_once'Aula3Ex3-agencia.php';

class Conta{
  public $numero;
  public $saldo;
  public $limite;

}

$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 1000.00;
$conta->limite = 500;
$conta->agencia = $agencia;

echo "Número da Agência:  {$conta->agencia->numero}\n";
