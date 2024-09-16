<?php
//1 - Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position


$array=[1,2,3,4,5,6,7,8,9,10];

for($i=0;$i < count($array);$i++){
    if ($array[$i] ){
        echo $array[$i];
        if ( !($array[$i] == 10) ){
            echo "-";
        }else{
            continue;
        }

      }

}



// other solve 

// $array1=[];

// for($i = 1 ;$i <= 10;$i++ ){
//     array_push($array1,$i);
//     // $array[] = $i ;
// }
// $string= implode("-",$array1);
// // var_dump($array1);
// echo $string;