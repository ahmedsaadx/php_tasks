<?php
/* 
Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.

List of components : Scheme, Host, Path
Expected Output :
Scheme : http
Host : www.w3resource.com
Path : /php-exercises/php-basic-exercises.php

*/

$url = parse_url('https://www.google.com/ishowyou.php');


$scheme=$url["scheme"];
$host = $url["host"];
$path = $url["path"];

echo "Scheme:" . " ". $scheme . "<br>";
echo "host:" . " ". $host . "<br>";
echo "Path" . " " . $path . "<br>";
