<?php

/*

2 - Write a script to remove the duplicated numbers from this array then sort it Ascending
	$numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] 
    Output :  [ 1 , 2 , 3 , 4 , 5 , 6 , 7 ]

*/


// $numbers = [ 1 , 1 , 1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] ;

// $exported_array = [];

// for($i = 0 ;$i <= count($numbers);$i++ ){
//     if (!in_array($numbers[$i],$exported_array)){
//         $exported_array[] = $numbers[$i];
//     }
// }
// sort($exported_array);

// var_dump($exported_array);

#############################################################################################
    
// other solve

$numbers = [ 1 , 1 , 1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] ;
$exported_array = [];
for($i = 0 ;$i <= count($numbers);$i++ ){
    
    if ( $numbers[$i] != $numbers[$i+1]){
        $exported_array[] = $numbers[$i];
    }
}

sort($exported_array);

var_dump($exported_array);


########################################################################

