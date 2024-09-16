<?php

// var_dump($_SERVER);


/* 
 Write a simple PHP browser detection script.
Sample Output : Your User-Agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36
*/

if (isset($_SERVER["HTTP_USER_AGENT"]) && !empty($_SERVER["HTTP_USER_AGENT"]) ){
    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    echo  "Your User-Agent is" . " " . $user_agent;
}