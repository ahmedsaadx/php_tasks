<?php
require_once("inc/header.php");





$data_in_array = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get the submitted data
    $name = htmlspecialchars($_POST['name']);
    $profile_img = htmlspecialchars($_POST['profile_img']);
    $site = htmlspecialchars($_POST['site']);
    $role = htmlspecialchars($_POST['role']);
    
    // Append the submitted data into the array
    $data_in_array[] = [
        'name' => $name,
        'profile_img' => $profile_img,
        'site' => $site,
        'role' => $role
    ];
      // Encode the array into JSON
      $data_in_json = json_encode($data_in_array, JSON_PRETTY_PRINT);

      // Save the JSON data into the file
      file_put_contents('database/profile.json', $data_in_json);
      header("location: index.php");

}
echo '
<form method="POST"  > 
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" class="form-control" id=name" name="name" aria-describedby="emailHelp" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label >Photo URL</label>
    <input type="url" class="form-control" id="profile_img" name="profile_img" placeholder="Url" required>
  </div>
  <div class="form-group">
    <label >Site</label>
    <input type="name" class="form-control" id="site" name="site" placeholder="Site" required>
  </div>
  <div class="form-group">
    <label >Role</label>
    <input type="name" class="form-control" id="role" name="role" placeholder="role" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
';


