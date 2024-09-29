<?php
require_once("inc/header.php");

echo "<h2 class='text-center'>Posts</h2>";

if(file_exists("database/posts.json")){
    $posts = json_decode(file_get_contents("database/posts.json"),true);

}else{
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://jsonplaceholder.typicode.com/posts");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $json_data=curl_exec($ch);
    curl_close($ch);
    file_put_contents("database/posts.json",$json_data);
}

echo '<table class="table">
<thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Title</th>
    <th scope="col">Body</th>
  </tr>
</thead>
<tbody>';
foreach($posts as $post){
    echo '<tr>
            <th scope="row">' . htmlspecialchars($post['id']) . '</th>
            <td>' . htmlspecialchars($post['title']) . '</td>
            <td>' . htmlspecialchars($post['body']) . '</td>
          </tr>';
}
echo '</tbody>
    </table>';
