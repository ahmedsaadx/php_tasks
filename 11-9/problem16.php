<?php

/* 
Write a PHP script that stores the string as a variable and checks if the length is odd or even.


*/


function string_length($word){
    $str_length = strlen($word);
    if ( $str_length <= 0 ){
        echo "unvalid number";
    }else{
        if ($str_length % 2 == 0 ){
            return "even number" ;
        } else {
            return "odd number" ;
        }    
    }
    
}

echo string_length(" ");