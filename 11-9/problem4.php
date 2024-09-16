<?php
/* 

Write a PHP script that calculates the Area of a Triangle store the base and height Print the area.

*/

function area_triangle($base , $height){
      if (!is_numeric($base) || $base <= 0){
        return "The base value ($base) is not valid.";

      }else if (!is_numeric($height) || $height <= 0){
        return "The height value ($height) is not valid.";
      } else {
        $area = 1 / 2 * $base * $height;
        return $area;
      }
}


echo area_triangle(12341342,1434245);