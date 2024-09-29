<?php
require_once("inc/header.php");

echo "<h2 class='text-center'>Home</h2>";


$profile=json_decode(file_get_contents("database/profile.json"),true);





echo "<div class='d-flex justify-content-center align-items-center' style='height: 100vh;'>
    <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='" . $profile[0]['profile_img'] . "' alt='Profile image'>
        <div class='card-body'>
            <h5 class='card-title'>". $profile[0]['name'] . "</h5>
            <p class='card-text'>".$profile[0]['role']."</p>
            <a href='". $profile[0]['site'] ."' class='btn btn-primary'>Site</a>
            <a href='edit.php' class='btn btn-primary'>edit</a>
        </div>
    </div>
</div>";
