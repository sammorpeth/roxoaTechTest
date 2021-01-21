<?php

// Due to the limitations on the question I decided to research how this would be possible and read about recursion. I'd heard about
// recursion before, but never tried writing anything with it and I found it really interesting, so thanks! 
// I found the function below and modified it slightly so I could understand it better I have also written notes in an attempt to understand the process better. 
// Underneath that is a function I have written myself to reverse an array in order to understand the concept and solidify my understanding.

function reverseStr($str) 
{ 
    // Sets the base case
    if (($str == null) || (strlen($str) <= 1)) {
        // We want the finished product to be a string
          echo ($str); 
        } 
  
    else { 
        // echoes the current string's last character
        echo ($str[strlen($str) - 1]); 
        // Using an initially unsatisfied if condition, this function will recurse until
        // the entire string has been printed one character at a time in reverse. 
        // For example, it would first receive Hello as an argument and print o, 
        // then Hell as an argument and print l, Hel and print l, etc. until all 
        // characters have been printed and the if condition is satisfied.
        reverseStr(substr($str, 0, (strlen($str) - 1))); 
    } 
} 

function reverseArr($arr) {
  if (($arr == null) || count($arr) <= 0) {
    return '';
  } 

  else {
    print_r($arr[count($arr) -1]);
    reverseArr(array_slice($arr, 0, (count($arr) - 1)));
  }
}


$testArr = [1, 2, 3, 4, 5, 6, 7, 8 , 9, 10];


reverseStr('Hello');
// reverseArr($testArr);

?>