<?php

/*
You must find a way to generate the wonderland number.

It has six digits.

If you multiply it by 2,3,4,5, or 6, the resulting
number has all the same digits in at as the original number.
The only difference is the position that they are in.

Source: https://github.com/gigasquid/wonderland-clojure-katas

*/

$number = rand(1,500);
$arr = [];

for ($i=6;$i>1;$i--) {
    $arr[$i] = $number * $i; 
}

print_r($arr);