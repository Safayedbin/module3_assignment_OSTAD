<?php

//Task 2: Array Manipulation

//Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

 $numbers = range(1, 10);
print_r($numbers);

function task2($array) {
    $ress=[];   
    $i = 0;
    $len = count($array);
    while ($i < $len) {
        
        if ( $array[$i] % 2 == 0) {
            array_splice($array, $i, 1);
        }
       // if ( $array[$i] % 2 != 0) {
        //    array_push($ress, $array[$i]);
       // }
        $i++;
    }
    print_r($array);
    //print_r($ress);
    //return $ress;
}

task2($numbers);
