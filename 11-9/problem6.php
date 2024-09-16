<?php

/* 

EraaSoft Learn by practice

Get the length of this sentence. 
Get the length of this sentence without spaces.  
Get the number of words in this sentence. 
Check if this word (by) exists in the string or not.
Get the word (EraaSoft) from the string and print it.
Remove the word (by) from the string and print the string with and without (by)



*/


$string = "EraaSoft Learn by practice";

/////////////////////////////////////////////////////////////////////////////////////////

echo strlen($string); //Get the length of this sentence. 


///////////////////////////////////////////////////////////////////////////////////////////
$string_without_spaces = str_replace(" ","",$string); 
echo "<br>" . strlen($string_without_spaces); // Get the length of this sentence without spaces.


//////////////////////////////////////////////////////////////////////////////////////

echo "<br>" . str_word_count($string); /// Get the number of words in this sentence. 

echo "<br>";

/////////////////////////////////////////////////////////////////////////////////
if (strpos($string,"by") !== false){
    echo "by word  exists<br>";  // Check if this word (by) exists in the string or not.
}else{
    echo "by word not exists<br>";
}


///////////////////////////////////////////////////////////////////////////////////////
$eraa_word = substr($string,0,8);
echo $eraa_word . "<br>"; // Get the word (EraaSoft) from the string and print it.

//////////////////////////////////////////////////////////////////////////////////
$string_without_by = str_replace("by","",$string);

echo $string_without_by . "<br>"; // Remove the word (by) from the string and print the string with and without (by)
echo $string;









