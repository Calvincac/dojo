<?php
/*
Crie um algoritmo, utilizando while ou for, que nos dê uma dica de 6 dezenas a serem

jogadas na Megasena. Estas 6 dezenas devem ser sorteadas com valores entre 1 e 60. Não

serão permitidas dezenas iguais em um mesmo jogo. Exemplo do resultado esperado:

output: 04-08-15-16-23-42.

*/

for ($i=0; $i<6;$i++) {

    $number = rand(1,60);
    print $number."\n";    
    
}


