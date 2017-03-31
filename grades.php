<?php

/*

Armazene estes conceitos digitados em um Array de String. Neste momento, o programa deverá

imprimir (totalizar) quantas vezes o aluno tirou A, B, C e D.

Vide exemplo (ao lado) da saída esperada na console.

Deverá imprimir também o nome do aluno em maiúsculo e o email em

minúsculo, sendo que o email deverá conter pelo menos um “@“ e um

“br" ao final.

*/

$name = "Calvin";
$email = "calvincac@algo.com.br";

$file = file_get_contents("grades.txt");
$var = str_replace(" ","",$file);
$grade =  str_split($var);
$counta = $countb = $countc = $countd = 0;

for ($i=0; $i<10; $i++) {

    if ($grade[$i] == 'A') {
        $counta++;

    } else if ($grade[$i] == 'B') {
        $countb++;

    } else if ($grade[$i] == 'C') {
        $countc++;

    } else {
        $countd++;
    }    
}

print "Nome: ". strtoupper($name) . PHP_EOL;
print "e-mail: " . strtolower($email) . PHP_EOL;
print "Notas A: ". $counta . PHP_EOL;
print "Notas B: ". $countb . PHP_EOL;
print "Notas C: ". $countc . PHP_EOL;
print "Notas D: ". $countd . PHP_EOL;


