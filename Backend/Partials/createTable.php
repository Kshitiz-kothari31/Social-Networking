<?php
        
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "socialNetwork";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if( !$conn ){
        die("Sorry we failed to connect : ".mysqli_connect_error());
    }else{
        echo "Connection stablished.";
    }

    $sql = "CREATE TABLE `users` (
        `FirstName` VARCHAR(25),
        `LastName` VARCHAR(25),
        `Email` VARCHAR(50) UNIQUE NOT NULL,
        `PhoneNumber` VARCHAR(15),
        `Password` VARCHAR(255) NOT NULL,
        PRIMARY KEY(`Email`) 
    );";

    if( !(mysqli_query($conn, $sql))){
        echo "error".mysqli_error();
    }else{
        echo "Table created.";
    }
?>