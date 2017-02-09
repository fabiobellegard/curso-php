<?php

$cursos = array();//criar um array
$cursos = array(10,20,30);//criar um array de 3 elementos

$cursos = array("Lógica","Orientação a Objetos","Desenovlvimento Web");

echo "$cursos[0]\n";
echo count($cursos).PHP_EOL;

for ($i=0; $i < count($cursos); $i++) {
  echo "Curso: $cursos[$i]\n";
}

echo "----foreach----\n";
foreach ($cursos as $curso) {
  echo "$curso\n";
}
