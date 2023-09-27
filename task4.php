<?php
//Task 4: Multidimensional Array

//Create a multidimensional array called $studentGrades to store the grades of three students. 
//Each student has grades for three subjects: Math, English, and Science. Write a PHP function 
//which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrades=[
    [50,60,70],
    [80,90,85],
    [45,25,76]
    
    ];
    
print_r($studentGrades);

function AvgMark (...$mul){
    $res;
    for($i=0;$i<3;$i++;){
        for($j=0;$j<3;$j++;){
            $res +=$mul[$i][$j];
        }
        $res /= 3;
    }
}
