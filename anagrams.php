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

function getNumberOfWordsPossible($length)
{
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

function main($length)
{
    for($i=1; $i<=getNumberOfWordsPossible($length); $i++) {
        for($j=0; $j<$length; $j++) {
            $rand =  getNonRepeatIndexes();   
            $temporaryWord [] = $word[$rand];
        }
        $potentialAnagrams[] = implode($temporaryWord);
    }
    print_r($potentialAnagrams);
}

main();