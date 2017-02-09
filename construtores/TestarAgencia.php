<?php

require_once 'Agencia.php';

$agencia1 = new Agencia (1234);
$agencia2 = new Agencia (5678);

echo "O número da agencia 1 é: {$agencia1->numero}\n";
echo "O número da agencia 2 é: {$agencia2->numero}\n";
