<?php

/*
Declare um vetor de 10 posições e o preencha com os 10 primeiros números impares e o

escreva.

*/

$arr = [9];

for ($i=0; $i<10; $i++) {

    if ($i % 2 != 0) {
        $arr[$i] = $i; 
    }
}

print_r($arr);

