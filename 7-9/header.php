<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">MyWebsite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'services') ? 'active' : ''; ?>" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'blog') ? 'active' : ''; ?>" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
