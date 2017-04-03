<?php

/*
Faça um algoritmo que leia um vetor de 10 posições aleatórias/randômicas. Mostre então os 
menores valores do vetor.
*/

$vector = [];
$min = [];
$temp = 200; // max value
for ($i=0;$i<10;$i++){
    $vector[] = rand(1,100);
    if ($vector[$i] < $temp) {
        $temp = $vector[$i];        
        $min[] = $temp;
    }
}
print_r($min);
