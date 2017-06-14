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
    return $random;
}

function sortWords($length, $word, $rand)
{
    for($g=0; $g<$length; $g++) {
        $teste[] = $word[$rand[$g]];
    }
    return $teste;
}

function main($word, $length)
{
    $potentialAnagrams = [];
    $x = getNumberOfWordsPossible($length);
    for($i=1; $i<=$x; $i++) {        
        $rand = getNonRepeatIndexes($length);
        $temporaryWord = sortWords($length, $word, $rand);
        $potentialAnagrams[] = implode($temporaryWord);
    }

    print_r($potentialAnagrams);
}

main($word, $length);