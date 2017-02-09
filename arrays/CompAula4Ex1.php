<?php

$vetor = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);

for ($i=0; $i < count($vetor); $i++) {
  $vetor2[$i] = $vetor[$i + count($vetor)-(1+$i)*2+1];

  //$vetor2[0] = $vetor[6];
}

$vetor = $vetor2;

foreach ($vetor as $key => $value) {
  echo "$key = $value\n";
}
 ?>
