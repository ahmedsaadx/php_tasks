<?php
/*

3 - Write a program which will count the "r" characters in the text "eraasoft"


*/

$string = "eraasoft";


function r_finder($text){
    $array1 = str_split($text);


    $counter=0;
    for($i = 0 ;$i <= count($array1);$i++ ){

        if ( $array1[$i] == "r"){
            $counter++;
        }

    }
    echo $counter;
}

echo r_finder("eraasoft");




// other solve with built-in functions

// $string="eraasoft";

// echo substr_count($string,"r");


