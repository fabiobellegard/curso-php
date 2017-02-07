<<?php

class CartaodeCredito{
  public $numero;
  public $datadeValidade;

}

$cartao1 = new CartaoDeCredito;
$cartao1->numero = 111111;
$cartao1->datadeValidade = '01/01/2013';

$cartao2 = new CartaoDeCredito;
$cartao2->numero = 222222;
$cartao2->datadeValidade = '01/01/2014';

echo "\nCartão: $cartao1->numero\n";
echo "Data de Validade: $cartao1->datadeValidade\n\n";

echo "Cartão: $cartao2->numero\n";
echo "Data de Validade: $cartao2->datadeValidade\n\n";
