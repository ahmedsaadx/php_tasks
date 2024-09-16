<?php

 // 5. Write a PHP script to get the client IP address.

if (isset($_SERVER["HTTP_CLIENT_IP"]) && !empty($_SERVER['HTTP_CLIENT_IP'])){  //false
   
    $client_addr = $_SERVER['HTTP_CLIENT_IP'];
}elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $client_addr = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
    $client_addr = $_SERVER["REMOTE_ADDR"];
}

echo $client_addr;