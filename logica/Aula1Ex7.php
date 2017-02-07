<?php
$a = 0;
$b = 1;
$c = 1;

while ($c <= 1000) {
  echo "$c\n";
  $a = $b;
  $b = $c;
  $c = $a + $b;
}
