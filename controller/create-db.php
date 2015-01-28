<?php
    require_once(__DIR__ ."/../model/database.php");
    //__DIR__. fixes the messed up path on our php file.

    $connection= new mysqli($host, $username, $password);

    if($connection->connect_error){
       die("Error: ". $connection->connect_error); 
       //If the program has a connection error the program will die
    }
    else{
        echo "Success" . $connection->host_info;
        //If the program doesn't have a connection error it will give you information to the host
    }
    
    $connection->close();