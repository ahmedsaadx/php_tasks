<?php

/* 
A program that calculates the size of a box whose length and width are fixed with a value of 5 and 10 and the height is variable (size = length x width x height)


*/
//  use const to try differnet thing
const LENGTH = 5;
const WIDTH = 10;


//this function works to get size of box with fixed length and width  , height is variable
function size_of_box($height){
    $size = $height * LENGTH * WIDTH ;
    return $size  ;
}

echo size_of_box(1);