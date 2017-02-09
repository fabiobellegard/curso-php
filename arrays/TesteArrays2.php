<?php

$cursos = array();

$cursos[] = "TDD";

$cursos[]="Android";

echo "$cursos[0]\n";
echo count($cursos).PHP_EOL;

var_dump($argv);

for ($i=1; $i < count($argv); $i++) {
  echo "$argv[$i]\n";
}
