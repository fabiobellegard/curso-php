<?php

require_once '3_4_Funcionarios.php';

$funcionario = New Funcionario;
$funcionario->nome = 'Rafael Cosentino';
$funcionario->salario = 1000;

$funcionario->consultadados();

$funcionario->aumentasalario(100);

$funcionario->consultadados();
