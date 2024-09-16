<?php
/*
$string_one = "Eraa", 
$string_two = "Soft";

Make a new variable called (Full_string) that concatenate string_one and string_two
Compare the full_string and this string (EraaSoft).
*/

$string_one = "Eraa";
$string_two = "Soft";
$Full_string = $string_one . $string_two;

echo $Full_string;

$this_string = "EraaSoft";

if ($Full_string == $this_string){
    echo "matched";
}else {
    echo "unmatched";
}



