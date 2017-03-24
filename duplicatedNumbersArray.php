<?php
/*
Leia um vetor de 40 posições. Contar e escrever quantos valores pares ele possui (preencha este vetor com valores aleatórios/randômicos).
*/

$arr = [39];
$even = [];
for ($i=0;$i<40;$i++) {
    $arr[] =  rand(1,100);
    if ($arr[$i]%2 == 0) {
        $even[]  = $arr[$i];   
    }
}

$length = count($even);

for ($i=0;$i<$length;$i++) {
    print $even[$i] . PHP_EOL;   
}

