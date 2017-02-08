<?php

Class Cliente{
  public $nome;
  public $codigo;
}

Class CartaoDeCredito{
  public $numero;
  public $datadeValidade;
  public $dono;
}

$cliente = new Cliente;
$cliente->nome = 'Rafael Cosentino';
$cliente->codigo = 123;

$cartao = new CartaoDeCredito;
$cartao->numero = 111111;
$cartao->datadeValidade = '12/12/18';
$cartao->dono = $cliente;

echo "Nome do dono do cartão: {$cartao->dono->nome}\n";
