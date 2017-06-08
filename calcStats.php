<?php

/*
Your task is to process a sequence of integer numbers
to determine the following statistics:

    o) minimum value
    o) maximum value
    o) number of elements in the sequence
    o) average value

For example: [6, 9, 15, -2, 92, 11]

    o) minimum value = -2
    o) maximum value = 92
    o) number of elements in the sequence = 6
    o) average value = 21.833333
*/


$arr = [1,3,5,-6,8,89,4];
$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
$count = count($arr);
$average = 0;

for($i=0; $i<$count; $i++) {

    if($arr[$i] < $min) {
        $min = $arr[$i];
    }

    if($arr[$i] > $max) {
        $max = $arr[$i];
    }

    $average = $average + $arr[$i];
}

$result = $average/$count;

print("Minimum value: ". $min . "\n");
print("Maximum value: ". $max . "\n");
print("Number of elements: ". $count . "\n");
print("Average value: ". $result . "\n");
