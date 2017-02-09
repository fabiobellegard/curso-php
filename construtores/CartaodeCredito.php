<?php

Class CartaoDeCredito{
  public $numero;
  public $datadeValidade;
  public $cliente;

  public function __construct($numero){
    $this->numero = $numero;
  }
} 
