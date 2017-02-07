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

for ($i=1; $i <=10 ; $i++) {
  if ($i%2 ==0) {
    echo "$i - **\n";
  } else {
    echo "$i - *\n";
    }
}
