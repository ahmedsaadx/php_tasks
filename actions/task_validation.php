<?php 
require_once('../db_connection_handler.php');
session_start() ;

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: ../create_task.php');
    exit();
}else{

    $task_name = $_POST["task_title"];
    $task_description= $_POST["task_description"] ;
    $task_date = $_POST["due_date"];
    $add_task_query= "insert into tasks (`name`,`description`,`due_date`) Values ('$task_name','$task_description','$task_date')";
    if (empty($task_name)){
        $_SESSION['errors']['task_name_required'] = "task name required";
    }else{
        input_sanitization($task_name);
        if (strlen($task_name) > 50){
            $_SESSION['errors']['task_name_lenght'] = "task name must be under 50 charater";
        }
    }
    }
    input_sanitization($task_description);
    if (strlen($task_description) > 150){
            $_SESSION['errors']['task_description_lenght'] = "task description must be under 150 charater";
    }
    
    
    if (empty($_SESSION['errors'])){
        mysqli_query($conn,$add_task_query);
       
        $_SESSION['success'] = "Task Add Successfully";

        header('location: ../create_task.php');
        exit();
        
    }else{
        header('location: ../create_task.php');
        exit();
    }
    



function input_sanitization($input){
    return trim(htmlspecialchars($input));
}
