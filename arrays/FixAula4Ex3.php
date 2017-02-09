<?php


$total = 0;
$valores = array(10,20,30,40,50,60);

for ($i=0; $i < count($valores); $i++) {
  $total += $valores[$i];
  }

  echo count($valores).PHP_EOL;

$media = $total / count($valores);

echo "A média é: $media\n";
