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

global $word;
$word = $argv[1];
$temporaryWord = [];
$letters = str_split($word);
$length = count($letters);

function getNumberOfWordsPossible($length)
{
    $numberOfwordsPossible = 1;
    for($i=$length; $i>=1; $i--) {
        $numberOfwordsPossible = $numberOfwordsPossible * $i;             
    }
    return $numberOfwordsPossible;
}

function getNonRepeatIndexes($length)
{
    for ($x=0; $x<$length;$x++) {
        $random[]  = rand(0,$length-1);        
    }
    shuffle($random);
    return $random[0];
}

function main($word, $length)
{
    $potentialAnagrams = [];
    $x = getNumberOfWordsPossible($length);
    for($i=1; $i<=$x; $i++) {
        for($j=0; $j<$length; $j++) {
            $rand = getNonRepeatIndexes($length);   
            $temporaryWord [] = $word[$rand];
        }
        $potentialAnagrams[] = implode($temporaryWord);
    }
}

main($word, $length);