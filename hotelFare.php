<?php


/*
Um hotel cobra R$60 a diária e mais uma taxa de serviços. A taxa de serviços é de:

a) R$5,50 por diária, se o número de diárias for maior que 15;

b) R$6,00 por diária, se o número de diárias for igual a 15;

c) R$8,00 por diária, se o número de diárias for menor que 15.

Construa um algoritmo que mostre o nome e o total da conta de um cliente, baseado no total

de diárias que ele permaneceu no hotel.

*/

$diaria = 60;
$dias = $argv[1]; //recebe por parametro no terminal
$nome = $argv[2];

if(!isset($dias) || !isset($nome) ) {
    print("Um dos argumentos não foi informado");
    exit;
}

if ($dias == 15) {
    print("Nome: {$nome} valor: " . 60*6 . "\n");
}

if ($dias < 15) {
    print(" Nome: {$nome} valor: " . 60*8 . "\n");
}

if ($dias > 15) {
    print(" Nome: {$nome} valor: " . 60*5.5 . "\n");
}