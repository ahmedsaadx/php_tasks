<?php

/* 
 Write a PHP script that stores the number as a variable and checks if it is odd or even.

*/




function is_odd_or_even($number) {
    if (!is_numeric($number) || $number <= 0 ){
        return "enter vaild number";    
    }
    if ($number % 2 == 0 ){
        return "even number" ;
    } else {
        return "odd number" ;
    }
}

echo is_odd_or_even("5");
