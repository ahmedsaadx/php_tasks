<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>please enter your name </h1>
   <form method=post action=task5.php>
    <label>username </label>
    <input type=username name=name   ></input>
   </form>
   <?php

   /* 
    Create a simple HTML form and accept the user name and display the name through PHP echo statement.
   
   Sample output of the HTML form :
   */
   
   echo "Hello" . " " .$_POST["name"];
   var_dump($_SERVER);
   ?>
</body>
</html>

