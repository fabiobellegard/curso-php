<?php

require_once '1_2_Conta.php';

$conta = new Conta;
$conta->numero = 13;

$conta->deposita(700);
$conta->deposita(700);
$conta->deposita(700);
$conta->deposita(700);

echo "Saldo: $conta->saldo\n";

$resultado = $conta->saca(500);

if ($resultado) {
  echo "Saque efetuado com sucesso!\n";
}else{
  echo "Saldo insuficiente\n";
}

$conta->consultsaldo();

$conta->imprimeextrato();
