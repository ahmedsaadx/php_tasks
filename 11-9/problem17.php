<?php
/* 
$description = "no pain , no gain ";

Check from this string o If the string has “gain” Print ( success word ) o If the string has ( peen ) Print ( success word )  Else ( wrong word )


*/
$description = "no pain , no gain ";

function check_words($words){
    if (!is_string($words)){
        return "enter strings only";
    }
    #strpos return string postion (can be 0 ) or false
    if ( strpos($words,"pain")  !== false) {
        return " success word";
    }elseif (strpos($words,"gain") !== false ){
        return " success word";
    }else{
        return " wrong word";    
    }
}


echo check_words($description);