<?php

/*
Em uma eleição presidencial, existem quatro candidatos. Os votos são informados através de

código. Os dados utilizados para a contagem dos votos obedecem à seguinte codificação:

- 1, 2, 3 e 4 = voto para os respectivos candidatos;

- 5 = voto nulo;

- 6 = voto em branco;

Fazer um programa que calcule e escreva:

- O total de votos para cada candidato;

- O total de votos nulos;

- O total de votos em branco;

*/

$votes = [1,2,3,4,5,6,1,2,3,4,5,6,2,2,2,4,4,4,1,1,2,6];
$cont1 = $cont2 = $cont3 = $cont4 = $cont5 =$cont6 = 0;

foreach ($votes as $vote) {
    if ($vote == 1) {
        $cont1++;
    } else if ($vote == 2) {
        $cont2++;
    } else if ($vote == 3) {
        $cont3++;
    } else if ($vote == 4) {
        $cont4++;
    } else if ($vote == 5) {
        $cont5++;
    } else if ($vote == 6) {
        $cont6++;
    } else {
        print "Você informou opção errada";
    }
}

print "Candidate 1: " . $cont1 . PHP_EOL;
print "Candidate 2: " . $cont2 . PHP_EOL;
print "Candidate 3: " . $cont3 . PHP_EOL;
print "Candidate 4: " . $cont4 . PHP_EOL;
print "Branco: " . $cont5 . PHP_EOL;
print "Nulo: " . $cont6 . PHP_EOL;