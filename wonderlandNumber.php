<?php

/*
You must find a way to generate the wonderland number.

It has six digits.

If you multiply it by 2,3,4,5, or 6, the resulting
number has all the same digits in at as the original number.
The only difference is the position that they are in.

Source: https://github.com/gigasquid/wonderland-clojure-katas

*/

function countNumberOfDigits($number)
{
    preg_match_all("/\d/", $number, $match);
    return count($match[0]);
} 

function main()
{
    $number = rand(1,500);
    $numberOfDigits = countNumberOfDigits($number);
    $arr = [];

    for ($i=6;$i>1;$i--) {
        $arr[$i] = $number * $i; 
        $chosen = $arr[$i];

        if($numberOfDigits === countNumberOfDigits($chosen)) {
            print "Number {$chosen} is a Wonderland Number \n";
        }
    }
}
main();

