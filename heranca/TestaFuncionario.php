<?php

require_once 'Gerente.php';
require_once 'Secretario.php';

$gerente = new Gerente;
$gerente->nome = "Joelma";
$gerente->salario = 12000;
$gerente->senha = 1234;

$secretario = new Secretario;
$secretario->nome = "Joao";
$secretario->salario = 2000;
$secretario->ramal = 6241;

echo "Nome do gerente: $gerente->nome\n";
echo "Salario do gerente: $gerente->salario\n";
echo "Senha do gerente: $gerente->senha\n";
