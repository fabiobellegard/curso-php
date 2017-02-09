<?php

require_once 'Exemplo.php';

echo "Contador: ".Conta::$contador.PHP_EOL;

$x = new Conta;
$x->numero = 11;
$x->saldo = 600;

echo "Contador no meio: ".Conta::$contador.PHP_EOL;

$y = new Conta;
$y->numero = 12;
$y->saldo = 130;

echo "Contador no final: ".Conta::$contador.PHP_EOL;

Conta::zeraContador();

echo "Contador após zerar:".Conta::$contador.PHP_EOL;
