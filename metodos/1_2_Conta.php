<?php

class Conta{

  public $numero;
  public $saldo;

  //public function __construct($numero)
//  {
//    $this->numero = $numero;
//  }

  public function deposita($valor)
  {
    $this->saldo += $valor;
  }
  public function saca($valor)
  {
    if($valor <= $this->saldo){
      $this->saldo-=$valor;
      return TRUE;
    }else{
      return FALSE;
    }
  }
  public function consultsaldo()
  {
    echo "Seu saldo é: $this->saldo\n";

  }
  public function imprimeextrato()
  {

  }
}
