<?php 
/*
Task 5: Password Generator

Create a PHP function called generatePassword($length) that generates a random password 
of the specified length. The password should include lowercase letters, uppercase letters, 
numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password 
with a length of 12 characters using this function and print the password.
*/

declare(strict_types=1);
function generatePassword($length) : string{
    $password = '';
    for($i=0;$i<$length;$i++){
    $c= mt_rand(33, 126);
    $password .= chr($c);
    }
    echo $password;
    return $password;
}

$sizeofpassword=12;
echo "the Password generated is : ";
$pass= generatePassword($sizeofpassword);
