<?php
session_start();
require_once('db_connection_handler.php');
require_once('inc/header.php');
$query = "SELECT * FROM tasks";
$result = mysqli_query($conn, $query);
?>

<div class="container mt-4">
    <?php if(isset($_SESSION['success_delete_task'])):?>
        <div class="alert alert-success">
          <?php echo $_SESSION['success_delete_task']; ?>
        </div>
     <?php endif?>
  <div class="row">
    <?php $i = 1; while ($row = mysqli_fetch_array($result)) : ?>
      <div class="col-md-4 mb-4"> <!-- 3 cards per row for medium screens -->
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title"><?php echo $i++ . "- " . htmlspecialchars($row["name"]); ?></h5> <!-- Display task number -->
            <!-- <h5 class="card-title"><?php echo htmlspecialchars($row["name"]); ?></h5> -->
            <p class="card-text"><?php echo htmlspecialchars($row["description"]); ?></p>
            <p class="card-text"><small class="text-muted">Due Date: <?php echo htmlspecialchars($row["due_date"]); ?></small></p>
            <a   class="btn btn-primary btn-sm">Edit</a>
            <a href="delete_task.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this task?');"> Delete</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
<?php
if (isset($_SESSION['success_delete_task'])){
    unset($_SESSION['success_delete_task']);
}



