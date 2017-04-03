<?php

/*
Elaborar um algoritmo para identificar se, dado um ano do calendário (ex. 2014), este é ou não
bissexto. Dica: Anos bissextos são múltiplos de 4 e não são múltiplos de 100, exceto os anos
múltiplos de 400, que também são bissextos.
*/

$year = 2016;

if (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 ==0)) {
    print "Bissexto" .PHP_EOL;
    exit;
}

print "Não é bissexto" . PHP_EOL;

