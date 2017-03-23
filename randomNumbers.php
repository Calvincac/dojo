<?php

/*
Crie um algoritmo que simule o jogo de um dado por 20 vezes e informe quantas vezes cada

um dos números do dado saiu (ex. Número 1 saiu 3 vezes, número 2 saiu N vezes...).

*/
$arr = [];
$count = 0;
$repeatedNumber = [];
$num = 0;

for ($i=0; $i<20; $i++) {
    $randomNumber = rand(1,100);
    $arr[] = $randomNumber; 
    $repeatedNumber[$i]  = $arr[$i] ;
}


for ($i=0; $i<20; $i++) {
    $count = 0;
    for ($j=0; $j<20; $j++) {
        if ($arr[$i] == $repeatedNumber[$j]) {
             $num = $arr[$i];
             $count++;
        }    
    }
    print "Number " .$num . " repeated " .$count . " Times \n";
}