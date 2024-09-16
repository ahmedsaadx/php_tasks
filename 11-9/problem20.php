<?php
/* 
Make a calculator with these operations using if and else if
o Submission 
o Subtraction 
o Multiplication 
o Division 
o Power 
o Modulus 



*/

function calc($number1,$number2,$operator){
        if ( (is_numeric($number1) && is_numeric($number2)) && $operator == "+" ){
            return $number1 + $number2;
        } elseif( (is_numeric($number1) && is_numeric($number2)) && $operator == "-"){
            return $number1 - $number2;
        }elseif ( (is_numeric($number1) && is_numeric($number2)) && $operator == "/"){
            return $number1 / $number2;
        }elseif ( (is_numeric($number1) && is_numeric($number2)) && $operator == "*"){
            return $number1 * $number2;
        }elseif ( (is_numeric($number1) && is_numeric($number2)) && $operator == "**"){
            return $number1 ** $number2;
        }elseif ( (is_numeric($number1) && is_numeric($number2)) && $operator == "%"){
            return $number1 % $number2;
        }else{
            echo "invalid operation";
        }
}


echo calc("2",8,"%");