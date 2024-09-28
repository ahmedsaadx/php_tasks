<?php 

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Show Data</title>
</head>
<body>
<?php 
include_once("include/header.php"); 
?>

<h1 class='text-center'>Show Data</h1>

<div class="container">
<?php if (isset($_SESSION["success"])): ?>
    <div class="alert alert-success mt-3">
    <?php echo $_SESSION["success"]; unset($_SESSION["success"]) ;?>
  </div>
  <?php endif; ?>
    <h2>User Information</h2>
    <?php if (isset($_SESSION['data'])): ?>
        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['data']['name']); ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['data']['email']); ?></li>
            <li class="list-group-item"><strong>Salary:</strong> <?php echo htmlspecialchars($_SESSION['data']['salary']); ?></li>
            <li class="list-group-item"><strong>Phone:</strong> <?php echo htmlspecialchars($_SESSION['data']['phone']); ?></li>
            <li class="list-group-item"><strong>Role:</strong> <?php echo htmlspecialchars($_SESSION['data']['role']); ?></li>
        </ul>
    <?php else: ?>
        <p>No user data available.</p>
    <?php endif; ?>

</div>
<div class="text-center mt-4">
      <form method="POST" action="">
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
      </form>
    </div>
    <?php
    if (isset($_POST["logout"])) {
      session_unset();
      session_destroy();
      header("Location: add_user.php");
      exit();

    } 
    ?>

</body>
</html>
