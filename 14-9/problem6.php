<?php
/*
6 - Create a function that takes an array of numbers. Return the Largest number in the array.
$numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ]

*/

$numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1,];
$index=0;
for($i = 0 ;$i <= count($numbers) - 1;$i++ ){
       
        if ($numbers[$i] > $index){
            $index=$numbers[$i];
        }
        
} 
echo $index ;  