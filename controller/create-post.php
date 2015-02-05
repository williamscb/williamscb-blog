<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $connection = new mysqli($host, $username, $password, $database);
    
 $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
 //A mechanism used to protect our database//
 $post = filter_input (INPUT_POST, "post", FILTER_SANITIZE_STRING);
 
$query = $connection->query("INSERT INTO posts SET title = '$title', post = 'post'");

if($query){
    echo"<p>Succesfully inserted post: $title</p>";
}
else{
   echo "<p>$connection->error</p>";
}

 
 $connection->close();

