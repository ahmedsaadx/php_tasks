<?php
require_once("inc/header.php");

echo "<h2 class='text-center'>Albums</h2>";

if(file_exists("database/albums.json")){
    $albums = json_decode(file_get_contents("database/albums.json"),true);

}else{
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://jsonplaceholder.typicode.com/albums");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $json_data=curl_exec($ch);
    curl_close($ch);
    file_put_contents("database/albums.json",$json_data);
    $albums = json_decode(file_get_contents("database/albums.json"),true);
}


echo '
<table class="table">
<thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
    </tr>
</thead>
<tbody>
';

foreach($albums as $album){
    echo '
    <tr>
        <th scope="row">' . $album['id'] .  '</th>
        <th scope="row">' . $album['title']  . '</th>
    
    </tr>';
}
echo '</tbody>
 </table>';

