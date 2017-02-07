<?php

class Conta{

  public $numero;
  public $saldo;

}

$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 550;

echo "Número da conta: $conta->numero\n";
echo "Saldo: $conta->saldo\n";
