<?php
/*
Leia um vetor de 40 posições. Contar e escrever quantos valores pares ele possui (preencha

este vetor com valores aleatórios/randômicos).

*/
$arr = [39];
$even = 0;
$odd = 0;

for ($i=0; $i<40; $i++) {
    $number = rand(1,80);
    if ($number %2 == 0){
        $even++;        
    } else {
        $odd++;
    }
}

print "Even: " . $even . "\n";
print "Odd: " . $odd . "\n"; 