<?php
/* 
15 - Write a PHP program that prints all the numbers between 1 and 100 that are divisible by 3 using a do while loop.

*/

$counter =1;

do{
    if (!($counter % 2 == 0)){
        echo $counter."<br>";
    }
    $counter++;
}while ($counter <= 100);