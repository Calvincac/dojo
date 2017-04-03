<?php
/*
Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3
centímetros por ano. Construir um algoritmo que calcule iterativamente e imprima quantos
anos serão necessários para que Juca seja maior que Chico.
*/

$years = 0;
$chico = 1.5;
$juca = 1.1;

while ($juca <= $chico) {
    $chico += 0.2;
    $juca += 0.3;
    $years++;        
}

print $years . PHP_EOL;