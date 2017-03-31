<?php
/*

Faça um algoritmo em Java que calcule a série de Fibonacci

para um número. A série de

Fibonacci inicia com os números 1 e 1, e cada número

posterior equivale à soma dos dois números anteriores.

Exemplo: caso o número 9

seja informado, o resultado

será 1, 1, 2, 3, 5, 8, 13, 21, 34.

*/

$number = 9;
$fib = [1,1];
$atual = [];

for ($i=1; $i<$number-1; $i++) {
     $fib[] = $fib[$i] + $fib[$i-1];  
}
