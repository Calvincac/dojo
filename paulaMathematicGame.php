<?php
/*
Paula loves math. Her main hobby is to invent games or activities to play with her friends. Obviously, not all of them are so passionated about mathematics 
and have a lot of difficulty to solve the games offered by her. Now Paula has invented a small hobby that involves three characters: 
a numerical digit, one letter and one numeric digit. 

If the letter is uppercase, you need to subtract the first digit of the second one. 
If the letter is lowercase, both digts must be added. If the DIGITS are the same, the product between these two digits must be presented. 
She asked his friend Marcelo, who is good at programming, to create a program that prints the solution for each sequence created by Paula.

Input
The input contains many test cases. The first line of each input contains a single integer N, indicating the number of following test cases. 
Each test case is a sequence of three chars created by Paula. This sequence contains in the first position a character between '0' and '9', 
a uppercase or lowercase character and another character between '0' and '9'.

Output
For each test case, one line must be printed with an integer, representing the solution for each sequence created by Paula
*/


function main()
{
    global $argv;
    $numberOfTestCases = $argv[1];
    for($i=0; $i<$numberOfTestCases;$i++) {
        getResultFromCase();
    }    
}

function verifyCase($chosenChar, $firstDigit, $secondDigit)
{
    if(ctype_upper($chosenChar)){
        preg_match("/\d/", $secondDigit, $match);
        $secondDigit = $match[0];
        print_r(subtractDigits($firstDigit, $secondDigit));
        return;        
    }
   print_r(addDigits($firstDigit, $secondDigit));    
}

function subtractDigits($firstDigit, $secondDigit)
{
    return $firstDigit - $secondDigit;
}

function addDigits($firstDigit, $secondDigit)
{
    return $firstDigit + $secondDigit;
}

function multiplyDigits($firstDigit, $secondDigit)
{
    return $firstDigit * $secondDigit;
}

function isEqual($firstDigit, $secondDigit)
{
    if ($firstDigit === $secondDigit) {
        return true;
    }
    return false;
}

function getResultFromCase()
{
    $firstDigit = rand(0,100);
    $secondDigit = rand(0,100);
    $chars = [
        "a","b","c","d","e","f","g","h","i","j","k","l","m","n",
        "o","p","q","r","s","t","u","v","x","y","z","A","B","C",
        "D","E","F","G","H","I","J","K","L","M","N","O","P","Q",
        "R","S","T","U","V","X","Y","Z"
        ];

    $indexFromLetter = array_rand($chars, 1);
    $chosenChar = $chars[$indexFromLetter];
    preg_match("/\d/", $secondDigit, $match);
    
    $secondDigit = $match[0];
    if (isEqual($firstDigit, $secondDigit)) {
       print_r(multiplyDigits($firstDigit, $secondDigit));
       return;
    }
    print_r(verifyCase($chosenChar, $firstDigit, $secondDigit));
}

main();



