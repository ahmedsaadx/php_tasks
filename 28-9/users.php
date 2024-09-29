<?php
require_once("inc/header.php");

echo "<h2 class='text-center'>Users</h2>";


if (file_exists("database/users.json")){
    $users_data=json_decode(file_get_contents("database/users.json"),true);
}else{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/users");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Return the response as a string
    $json_data = curl_exec($ch);
    curl_close($ch);
    file_put_contents("database/users.json",$json_data);
    $users_data=json_decode(file_get_contents("database/users.json"),true);

}

foreach( $users_data as $user){
    echo "<div class='d-flex justify-content-center align-items-center my-3'>
        <div class='card' style='width: 18rem;'>
            <div class='card-body'>
                <h5 class='card-title'>". $user['username'] . "</h5>
                <p class='card-text'>".$user['email']."</p>
                <p class='card-text'>".$user['phone']."</p>
                <p class='card-text'>".$user['website']."</p>
                <p class='card-text'>".$user['address'][0]." ". $user['address'][1] ."</p>
                
            </div>
        </div>
    </div>";
}




