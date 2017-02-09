<?php

Class Conta{

  public $numero;//atributo do objeto
  public $saldo;//atributo do objeto
  public static $contador; //atributo "contador" pertence à classe

  public function __construct(){
    self::$contador ++;
  }

  public static function zeraContador(){
    self::$contador = 0;
  }
} ?>
