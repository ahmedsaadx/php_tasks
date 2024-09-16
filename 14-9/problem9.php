<?php

/* 
9 - Write a PHP program that prints the odd numbers from 1 to 15 using a while loop

*/


$counter = 1;

while ($counter <= 15){
    if (!($counter % 2 == 0) ){
        echo $counter."<br>";
    }
    $counter++;
}
