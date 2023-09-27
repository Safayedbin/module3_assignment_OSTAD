<?php
 $numbers = array(range (1,10));
 
 function task2(...$array){
     
     $i=0;
     $len= strlen($array);
     while($i<$len){
		if ($array[$i]%2==0){
        array_splice($array,$i,1);
     	}
        $i++;
     }
     print_r($array);
     
 }
 task2($numbers);