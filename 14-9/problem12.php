<?php
/* 
12 - Write a PHP program that calculates the sum of the values in an associative array using a foreach loop.
$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);

*/

$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150 );

$sum=0;

foreach ($sales as $x){
    $sum+=$x;
}

echo $sum;