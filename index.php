<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;

// Load .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Access your environment variables
echo 'Database Host: ' . $_ENV['DB_HOST'] . PHP_EOL;
echo 'Database Password: ' . $_ENV['DB_PASSWORD'] . PHP_EOL;
echo 'Database User: ' . $_ENV['DB_USERNAME'] . PHP_EOL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Dark Mode</title>
</head>
<body>
    <h1 class="text-center">Bootstrap Dark Mode Example</h1>
    <button id="toggleDarkMode" class="btn btn-secondary">Toggle Dark Mode</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const toggleButton = document.getElementById('toggleDarkMode');
        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('bg-dark');
            document.body.classList.toggle('text-white');
        });
    </script>
</body>
</html>