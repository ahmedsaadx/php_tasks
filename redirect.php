<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
        .card {
            margin: auto;
            max-width: 500px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card text-center shadow-lg">
        <div class="card-body">
            <h3 class="card-title">Thank you for Signing Up!</h3>
            <p class="card-text">Redirecting to the sign-in page in 4 seconds...</p>
            <p><strong>Your Name:</strong> <?php echo htmlspecialchars($_POST["fullName"]); ?></p>
            <p><strong>Your Email:</strong> <?php echo htmlspecialchars($_POST["email"]); ?></p>
        </div>
        <div class="card-footer text-muted">
            <a href="signin.php" class="btn btn-primary">Go to Sign In</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

