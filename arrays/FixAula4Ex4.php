<?php


$total = 0;
$valores = array(10,20,90,30,70,40,50,60);
$maior = $valores[0];

for ($i=1; $i < count($valores); $i++) {
  if ($valores[$i]>$maior) {
    $maior = $valores[$i];
  }else{
    $maior;
  }
  }


echo "O maior valor é: $maior\n";
