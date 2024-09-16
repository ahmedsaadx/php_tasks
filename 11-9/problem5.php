<?php

/*
 Write a PHP script that takes the age in years and prints the age in days
*/

function age_in_days($age) {    
    if (!is_numeric($age) || $age <= 0 || $age > 130 ){
        return "the age not valid value";
    }else {
        return $age * 365 ;
    }
}

echo age_in_days(1);