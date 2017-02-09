<?php

require_once 'Conta.php';

echo "Contador: ".Conta::$contador.PHP_EOL;

$x = new Conta;
$x->numero = 1111;
$x->saldo = 1500;

echo "Contador: ".Conta::$contador.PHP_EOL;

$y = new Conta;
$y->numero = 2222;
$y->saldo = 2300;

echo "Contador: ".Conta::$contador.PHP_EOL;
