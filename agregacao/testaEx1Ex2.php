<?php

require_once 'Aula3Ex2.php';
require_once 'Aula3Ex1.php';

//spl_autoload_register()

$cliente = new Cliente;
$cliente->nome = "Joao";
$cliente->codigo = 17;

$cartao = new CartaoDeCredito;
$cartao->numero = 4444;
$cartao->datadeValidade = "12/11/2020";

$cartao->cliente = $cliente;

echo "Número do cartão: $cartao->numero\n";
echo "Data de Validade: $cartao->datadeValidade\n";
echo "Nome do dono: {$cartao->cliente->nome}\n";
