<?php
    require_once(__DIR__ . "/../model/database.php");
    
    $connection = new mysqli($host, $username, $password, $database);
    
 $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
 //A mechanism used to protect our database//
 $post = filter_input (INPUT_POST, "post", FILTER_SANITIZE_STRING);
 
 echo "<p>Titile: $title</p>";
 echo "<p>Post: $post</p>";
 
 
 $connection->close();

