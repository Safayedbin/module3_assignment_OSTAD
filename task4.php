<?php
//Task 4: Multidimensional Array

//Create a multidimensional array called $studentGrades to store the grades of three students. 
//Each student has grades for three subjects: Math, English, and Science. Write a PHP function 
//which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

declare(strict_types=1);
$studentGrades=[
    [50,60,70],
    [80,90,85],
    [45,25,76]
    
    ];
    
print_r($studentGrades);

function AvgMark (array $mul) : array{
    $res=[0,0,0];
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            $res[$i]+=$mul[$i][$j];
        }
        $res[$i] /= 3;
        printf("The the average score of the student %d is %.2f\n", $i+1, $res[$i]);
    }
    return $res;
}
AvgMark($studentGrades);
