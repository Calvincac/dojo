<?php

/*
   Para saber se um número é feliz, você deve obter o quadrado de cada dígito deste número, em seguida você faz a soma desses resultados. A seguir o mesmo procedimento deve ser feito com o valor resultante desta soma. Se ao repetir o procedimento diversas vezes obtivermos o valor 1, o número inicial é considerado feliz.
   Tomamos o 7, que é um número feliz:
   7² = 49
   4² + 9² = 97
   9² + 7² = 130
   1² + 3² + 0² = 10
   1² + 0² = 1
   Podemos observar nesse exemplo que os números 49, 97, 130 e 10 também são felizes. Existem infinitos números felizes.
   E um número triste? Como sabemos que um número não será feliz?
   Desenvolva um programa que determine se um número é feliz ou triste.
 */

$number = 7;
$arr = [];
$result = 0;
$temp = 0;
$a = [];

while ($result != 1) {
    if ($temp != 0) {
        // Padrão encontrado pelos números não felizes.
        if($temp==4){
            print "Não é um número feliz! \n";   
            exit;          
        }

        $number = $temp;
        $temp = 0;
        unset($arr);
    }

    preg_match_all("/\d/", $number, $match);
    foreach ($match[0] as $x) {
        $arr[] = $x * $x;
    }

    foreach ($arr as $y) {
        $temp = $temp + $y;
    }

    $a[] = $temp;
    $result = $temp;
    $number = $temp;
}

print_r($a);


