<?php

$arr = [6, 9, 15, -2, 92, 11];
$min = $arr[0];
$max = $arr[0];
$length = count($arr);
$media = $arr[0];
for ($i=1; $i<$length; $i++) {
    if ($arr[$i] > $max) {
        $max  = $arr[$i];
    } else if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
    
    $media += $arr[$i];

}
$media = $media/$length;

print "Número de elementos na seqüência: " . $length . "\n";
print "Valor max " . $max .  "\n";
print "Valor min: " . $min . "\n";
print "Media: " . $media . "\n";

