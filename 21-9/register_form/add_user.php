<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <title>Add User page </title>
    <style>
    .signup-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    .signup-header {
      text-align: center;
      margin-bottom: 20px;
    }
    .signup-btn {
      background-color: #007bff;
      color: white;
    }
    .form-group {
    border: 1px solid #ced4da;
    border-radius: 6px;
    width: auto;
    transition: border-color 0.2s;
}

.form-group:focus-within {
    border-color: #86b7fe; /* Change border color on focus */
}

.country-code {
    display: flex;
    align-items: center;
    padding-right: 10px; /* Space between code and input */
    color: #495057; /* Text color */
}

.form-control {
    padding: 5px; /* Space inside input */
    border: none; /* No border for input */
}

.form-control:focus {
    box-shadow: none; /* Remove default focus shadow */
}

.error {
    font-size: 12px; /* Size for error message */
}
</style>
  </head>
  <body>
    <?php include_once("include/header.php"); ?>

<h1 class='text-center'>Add User page </h1>

<div class="signup-container">
  <h2 class="signup-header">Sign Up</h2>
  <form method="POST" action="actions/validation.php">
    <div class="mb-3">
      <label for="fullName" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your name" >
      <span class="error"> <?php echo $_SESSION['errors']['nameErr#1'] ?? $_SESSION['errors']['nameErr#2'] ?? '';?> </span>
    </div>
    <div class="mb-3">
      <label for="Email" class="form-label">Email</label>
      <input  class="form-control" id="email" name="email" placeholder="name@example.com" >
      <span class="error"> <?php echo $_SESSION['errors']['mailErr#1'] ?? $_SESSION['errors']['mailErr#2'] ?? '';?></span>
    </div>
    <div class="mb-3">
      <label for="Salary" class="form-label">Salary</label>
      <input type="number" class="form-control" id="salary" name="salary" placeholder="salary" >
      <span class="error" > <?php echo $_SESSION['errors']['salaryRequiredErr'] ?? $_SESSION['errors']['salaryErr#2'] ?? '';?></span>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
      <span class="error"> <?php echo $_SESSION['errors']['passErr#1']??  $_SESSION['errors']['passErr#2'] ?? ''; ?></span>
    </div>
    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" >
      <span class="error"> <?php echo $_SESSION['errors']['confirmErr#1'] ?? $_SESSION['errors']['confirmErr#2'] ?? '';?></span>
</div>
<div class="mb-3">
    <div class="col-md-6">
        <label for="ec-mobile-number" class="form-label">Phone</label>
        <div class="form-group d-flex align-items-center border">
            <span class="border-end country-code px-2">+20</span>
            <input type="text" class="form-control border-0" id="ec-mobile-number" aria-describedby="emailHelp" name="phone" placeholder="1115517794" />
        </div>
        <span class="error"> <?php echo $_SESSION['errors']['phoneRequiredErr'] ?? $_SESSION['errors']['phoneErr#2'] ?? '';?></span>
    </div>
</div>


    <label for="role" class="form-label">Select Your Role</label>
    <select name="role" id="role" class="form-select">
     <option value="Employer">Employer</option>
     <option value="Manager">Manager</option>
    </select>
    
    <button type="submit" class="btn signup-btn w-100">Sign Up</button>
  </form>
  
 

  </body>
</html>
<?php

if (isset($_SESSION['errors'])){
  unset($_SESSION['errors']);
}
unset($_SESSION["success"]);





?>