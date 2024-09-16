<?php
/*
Write a PHP script that stores a word and determines Is the Word is Singular or Plural? (A plural word is one that ends in "s".)
*/

$w = "saaS";
function word_checker($word){
    if (strtolower(substr($word, -1)) == "s"  ){
        return "plural word";
    }else {
        return "Singular";
    }
}


echo word_checker($w);