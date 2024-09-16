<?php
/*
Write a PHP script that takes a number integer representing the hours and converts it to seconds.

*/


function hours_to_seconds_convertor($hours){
    if (!is_numeric($hours) || $hours < 0 ){
        return  "enter a valid postive number for hours";
    }
    $seconds = $hours * 60 * 60 ;

    return $seconds;
}


echo hours_to_seconds_convertor("11");
