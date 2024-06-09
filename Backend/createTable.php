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

    $sql = "CREATE TABLE `UserData`( `UserName` varchar(25) NOT NULL,  `Password` varchar(25), PRIMARY KEY (`UserName`))";

    if( !(mysqli_query($conn, $sql))){
        echo "error".mysqli_error();
    }else{
        echo "Table created.";
    }
?>