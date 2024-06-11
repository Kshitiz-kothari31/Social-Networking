<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "socialnetwork";
        
    //creating the connection.
    $conn = mysqli_connect($servername, $username, $password, $database);
        
    //Checking connection.
    if( !$conn ){
        die("Sorry we failed to connect : ".mysqli_connect_error());
    } 
?>