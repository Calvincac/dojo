<?php

/*
Write a program to generate all potential 
anagrams of an input string.

For example, the potential anagrams of "biro" are

biro bior brio broi boir bori
ibro ibor irbo irob iobr iorb
rbio rboi ribo riob roib robi
obir obri oibr oirb orbi orib

*/

$word = $argv[1];
$temporaryWord = [];
$letters = str_split($word);
$length = count($letters);
$potentialAnagrams = [];
$numberOfwordsPossible = 1;

for($i=$length; $i>=1; $i--) {
    $numberOfwordsPossible = $numberOfwordsPossible * $i;             
}

for ($x=0; $x<$length;$x++) {
    $random[]  = rand(0,$length-1);        
}

shuffle($random);

for($i=1; $i<=$numberOfwordsPossible; $i++) {
    for($j=0; $j<$length; $j++) {
        $temporaryWord [] = $word[$random];
    }
    $potentialAnagrams[] = implode($temporaryWord);
}

print_r($potentialAnagrams);

//print_r($numberOfwordsPossible);
