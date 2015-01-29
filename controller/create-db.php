<?php
    require_once(__DIR__ ."/../model/database.php");
    //__DIR__. fixes the messed up path on our php file.

    $connection= new mysqli($host, $username, $password);
    // Connects you to mysqli and gives you the host, username, and password

    if($connection->connect_error){
       die("Error: ". $connection->connect_error); 
       //If the program has a connection error the program will die
    }
    
    $exists = $connection->select_db($database);
    
    if(!$exists){
      $query = $connection->query("CREATE DATABASE $database");
      
      if($query) {
          echo "Successfully created database" . $database;
      }
    }
    else {
        echo "Database has already exists.";
    }
    
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar (255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY(id))"); 
    // Creates a query that creates a table that needs to have an id,title, and post
    
    if($query){
        echo "Successfully created table: posts";
    }
   
    
    $connection->close();