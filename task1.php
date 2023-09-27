<?php
//Task 1: String Manipulation

//Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:

 //Convert the string to all lowercase.

//Replace "brown" with "red" in the string.

//Print the modified text. 
declare(strict_types=1);
 $text = "The quick brown fox jumps over the lazy dog.";
 
 function task1($String) : string{
     $len = strlen($String);
     for ($i= 0; $i< $len ; $i++ ){
         if (ord($String[$i]) >= 65 && ord($String[$i]) <= 90){
             $change = ord ($String[$i]) + 32;
             $String[$i] = chr($change);
         }
     }
     $newString = str_replace('brown', 'red', $String);
     return $newString;
 }
    echo task1($text);