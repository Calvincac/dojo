<?php

/*

Funcionários de empresas comerciais que trabalham como caixa tem uma grande responsabilidade em suas mãos. A maior parte do tempo de seu expediente de trabalho é gasto recebendo valores de clientes e, em alguns casos, fornecendo troco.
Seu desafio é fazer um programa que leia o valor total a ser pago e o valor efetivamente pago, informando o menor número de cédulas e moedas que devem ser fornecidas como troco.
Deve-se considerar que há:
cédulas de R$100,00, R$50,00, R$10,00, R$5,00 e R$1,00;
moedas de R$0,50, R$0,10, R$0,05 e R$0,01

*/

$valorPago = 50 ;
$notas = [100, 50, 10, 5, 1];
$moedas = [ 0.50, 0.10, 0.05, 0.1];

 if ($valorPago <= 1)  {

	$valorPago = $moedas;
echo "oi1";
} else if ($valorPago <= 10 ){ 

	$valorPago = array_slice($notas, 3);

echo "oi2";
} else if ($valorPago <= 50){

	$valorPago =  array_slice($notas, 2);
	if($valorPago <= 1){
		
       }
	print_r($valorPago);
echo "oi3";
} else if ($valorPago < 100) {
	$valorPago =  array_slice($notas, 1);
echo "oi4";
}


