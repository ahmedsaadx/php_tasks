<?php
session_start();
$errors = [];
$name = $email = $password = $confirmPassword = $salary = $role =  $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty($_POST["fullName"])) {
        $errors["nameErr#1"] = "Name is required";
    } else {
        $name = test_input($_POST["fullName"]);
        if (!preg_match("/^[a-zA-Z-' ]+$/", $name)) {
            $errors["nameErr#2"] = "Only letters, hyphens, and white space are allowed";
        }
    }
   
    // Email validation
    if (empty($_POST["email"])) {
        $errors["mailErr#1"] = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["mailErr#2"] = "Invalid email format";
        }
    }

   

    // Password validation
    if (empty($_POST["password"])) {
        $errors["passErr#1"] = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[#\$!@&*()%])[A-Za-z\d#$!@&*()%]{8,}$/",$password) ){
            $errors["passErr#2"] = "Password must be at least 8 characters long, contain at least one letter, one number, and one special character ($#@&*()%).";
        }
    }

    // Confirm password validation
    if (empty($_POST["confirmPassword"])) {
        $errors["confirmErr#1"] = "Confirm password is required";
    } else {
        if ($_POST["confirmPassword"] != $_POST["password"]) {
            $errors["confirmErr#2"] = "Passwords must match";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
        }
    }
    if (empty($_POST["phone"])){
        $errors["phoneRequiredErr"]= "Phone is required";
    }else{
        $phone = test_input($_POST["phone"]) ;
        if (!preg_match("/^[0-9]{11}$/", $phone)) {
            $errors["phoneErr#2"] = "Phone must be exactly 11 digits and numeric only.";
        }
    }
    if(empty($_POST["salary"])){
        $errors["salaryRequiredErr"]= "salary is required";
    }else{
        $salary = test_input($_POST["salary"]);
        if ($salary <= 0  || !preg_match("/^[0-9]+$/", $salary) ){
            $errors["salaryErr#2"] = "Salary must be a positive number.";
        }
    }
    
    $role =  test_input($_POST["role"]);

    if (empty($errors)) {
            $_SESSION["success"] = "done";
            $_SESSION["data"]["name"] = $name;
            $_SESSION["data"]["email"] = $email;
            $_SESSION["data"]["password"] = $password;
            $_SESSION["data"]["salary"]= $salary;
            $_SESSION["data"]["role"]= $role;
            $_SESSION["data"]["phone"]= $phone;
            
            header("Location: ../show_data.php");
            die();



    }else{
        $_SESSION["errors"] = $errors ;
    }
}else{
    echo "Invalid HTTP Method . must be POST method";
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


