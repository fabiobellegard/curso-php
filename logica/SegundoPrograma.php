<?php
$altura = 1.80;
//altura minima para entrar e 1.40
//altura maxima e 2.00

$resultado = $altura>=1.40 && $altura<=2.00;

echo"$resultado\n";
var_dump($resultado);

if($resultado = 1){
  echo "Pode entrar\n";
} else {
  echo "Nao pode entrar\n";
}
