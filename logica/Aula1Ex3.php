<?php
$contador = 1;
while($contador <= 10){
  if ($contador%2 == 0) {
    echo "$contador **\n";
  } else {
    echo "$contador *\n";
  }
  $contador ++;
}
