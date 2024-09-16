<?php 

/* 

Write a PHP script that records 3 digits and prints the total of the first two digits multiplied by the third digit.

*/

function sum_multip($num1,$num2,$num3) {
   $sum_value = $num1 + $num2;
   return $sum_value *= $num3;
}


echo sum_multip(7,3,3) ;