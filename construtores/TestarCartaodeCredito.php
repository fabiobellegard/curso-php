<?php

require_once 'CartaodeCredito.php';

$cartao1 = new CartaoDeCredito(1111);
$cartao2 = new CartaoDeCredito(2222);

echo "Cartão 1: $cartao1->numero\n";
