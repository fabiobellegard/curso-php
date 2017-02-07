<?php

for ($i=0; $i < 6; $i++) {
  for ($j=0; $j < $i; $j++) {
    $linha .= "*"; //$linha = $linha."*"
  }
  echo "$linha\n";
  $linha = "";
}
