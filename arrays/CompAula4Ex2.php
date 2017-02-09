<?php

$vetor = array(2, 3, 4, 5);
$multip = 1;

for ($i=0; $i < count($vetor); $i++) {
  $multip *= $vetor[$i];
}

for ($i=0; $i < count($vetor); $i++) {
  $vetor2[$i] = $multip/$vetor[$i];
}

echo "$multip\n\n";

echo "$vetor2[0]\n";
echo "$vetor2[1]\n";
echo "$vetor2[2]\n";
echo "$vetor2[3]\n";
