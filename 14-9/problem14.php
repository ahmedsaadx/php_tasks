<?php
/* 
14 - Write a PHP program that prints the elements of a multidimensional array using a nested foreach loop.
$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom", "age" => 18, "grade" => "A")
);



*/
$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom", "age" => 18, "grade" => "A")
);

foreach ($students as $x){
        echo $x["name"]." ".$x["age"]." ". $x["grade"]. "<br>";
}