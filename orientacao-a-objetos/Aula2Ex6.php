<?php

Class Agencia{
  public $numero;
}

$agencia1 = new Agencia;
$agencia1->numero = 1234;

$agencia2 = new Agencia;
$agencia2->numero = 5678;

echo "Número: $agencia1->numero\n";
echo "Número: $agencia2->numero\n";
