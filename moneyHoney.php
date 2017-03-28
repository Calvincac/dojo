<?php

/*

Funcionários de empresas comerciais que trabalham como caixa tem uma grande responsabilidade em suas mãos. A maior parte do tempo de seu expediente de trabalho é gasto recebendo valores de clientes e, em alguns casos, fornecendo troco.
Seu desafio é fazer um programa que leia o valor total a ser pago e o valor efetivamente pago, informando o menor número de cédulas e moedas que devem ser fornecidas como troco.
Deve-se considerar que há:
cédulas de R$100,00, R$50,00, R$10,00, R$5,00 e R$1,00;
moedas de R$0,50, R$0,10, R$0,05 e R$0,01

*/

$money = [100, 50, 10, 5, 1, 0.50, 0.10, 0.05, 0.01];
$cost = 30;
$price = 100;
$change = $price - $cost; //40
$count = 0;
$var = [];
foreach ($money as $value) {
	
	while ( $change >= $value ) {
		$change = $change - $value; 
		$var[] = $value;	
		$count++;
	}
}

print "O número de cédulas é: " . $count  . PHP_EOL;
print "As seguintes cedulas e/ou moedas serão devolvidas: " .  PHP_EOL;
print_r($var);
