<?php



$meses = array('jan','feb','mar','apr','may','jun');
asort($meses);

foreach ($meses as $key => $value) {
  echo "$key = $value\n";
}
