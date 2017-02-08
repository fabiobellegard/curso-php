<?php

require_once 'Conta.php';

$conta = new Conta;
$conta->numero = 13;

$conta->deposita(700);

echo "Saldo: $conta->saldo\n";

$conta->saca(500);

echo "Saldo após saqui: $conta->saldo";
