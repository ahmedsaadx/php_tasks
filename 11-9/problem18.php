<?php

/* 
 A Boolean is a data type that has only two values true or false. These values often correspond to 1 (true) or 0 (false). When a 1 or a 0 is used, it's called an int Boolean. Write a PHP script that stores an int Boolean and outputs its opposite (1 becomes 0 and 0 becomes 1).

*/

$intBoolean = 0; 


function flip_boolean($value) {
    if ($value == 1) {
        return 0;
    } elseif ($value == 0) {
        return 1;
    } else {
        return "Invalid input. Please provide 0 or 1.";
    }
}

$opposite = flip_boolean($intBoolean);


echo $opposite;

