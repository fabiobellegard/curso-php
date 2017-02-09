<?php

Class Conta{

  public $numero;
  public $saldo;
  public static $contador;

  public function __construct(){
    self::$contador++;
  }
}
 ?>
