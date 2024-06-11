<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //creating the connection.
    $conn = mysqli_connect($servername, $username, $password);

    //Checking connection.
    if( !$conn ){
        die("Sorry we failed to connect : ".mysqli_connect_error());
    }else{
        echo "Connection stablished.";
    }

    $sql = "CREATE DATABASE socialNetwork";
    if( !(mysqli_query($conn, $sql))){
        echo "error".mysqli_error();
    }else{
        echo "DataBase created.";
    }
?>