<?php

/*
FizzBuzz

Neste problema, você deverá exibir uma lista de 1 a 100, um em cada linha, com as seguintes exceções:
Números divisíveis por 3 deve aparecer como 'Fizz' ao invés do número;
Números divisíveis por 5 devem aparecer como 'Buzz' ao invés do número;
Números divisíveis por 3 e 5 devem aparecer como 'FizzBuzz' ao invés do número'.

*/

for ($i=1; $i<=100;$i++) {
    if ($i%3 == 0 && $i%5==0 ) {
        print "FizzBuzz" . PHP_EOL;
    } else if ($i%3==0) {
        print "Fizz" . PHP_EOL;
    } else if ($i%5==0) {
        print "Buzz". PHP_EOL;        
    }
    else {
        print $i . PHP_EOL;
    }
}
