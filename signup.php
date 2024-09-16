<?php
// Initialize variables
$name = $email = $gender = $password = $confirmPassword = "";
$nameErr = $emailErr = $genderErr = $passwordErr = $confirmPasswordErr = "";

// Array to store errors and data
$response = array("errors" => array(), "data" => array());

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty($_POST["fullName"])) {
        $response["errors"]["name"] = "Name is required";
    } else {
        $name = test_input($_POST["fullName"]);
        if (!preg_match("/^[a-zA-Z-' ]+$/", $name)) {
            $response["errors"]["name"] = "Only letters, hyphens, and white space are allowed";
        }
    }

    // Email validation
    if (empty($_POST["email"])) {
        $response["errors"]["email"] = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response["errors"]["email"] = "Invalid email format";
        }
    }

    // Gender validation
    if (empty($_POST["gender"])) {
        $response["errors"]["gender"] = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // Password validation
    if (empty($_POST["password"])) {
        $response["errors"]["password"] = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    // Confirm password validation
    if (empty($_POST["confirmPassword"])) {
        $response["errors"]["confirmPassword"] = "Confirm password is required";
    } else {
        if ($_POST["confirmPassword"] != $_POST["password"]) {
            $response["errors"]["confirmPassword"] = "Passwords must match";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
        }
    }

    // Add data to response if no errors
    if (empty($response["errors"])) {
        $response["data"]["name"] = $name;
        $response["data"]["email"] = $email;
        $response["data"]["gender"] = $gender;
        $response["data"]["password"] = $password;
    }
}

// Function to sanitize input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Output JSON response

echo json_encode($response, JSON_PRETTY_PRINT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
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
  </style>
</head>
<body>

<div class="signup-container">
  <h2 class="signup-header">Sign Up</h2>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="mb-3">
      <label for="fullName" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your name" >
      <span class="error"><?php echo $nameErr; ?></span>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input  class="form-control" id="email" name="email" placeholder="name@example.com" >
      <span class="error"><?php echo $emailErr; ?></span>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
      <span class="error"><?php echo $passwordErr; ?></span>
    </div>
    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" >
      <span class="error"><?php echo $confirmPasswordErr; ?></span>
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="female" value="female">
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>
      <span class="error"><?php echo $genderErr; ?></span>
    </div>
    <button type="submit" class="btn signup-btn w-100">Sign Up</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>