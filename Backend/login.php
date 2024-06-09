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

    if( $_SERVER["REQUEST_METHOD"] == "POST"){
        $U_Name = $_POST['username'];
        $P_Word = $_POST['password'];
        $RememberMe = $_POST['check'];

        $sql = "INSERT INTO `userdata`( `UserName`,  `Password`) VALUES ('$U_Name', '$P_Word')";
        if(mysqli_query($conn, $sql))
        {
            mysqli_close($conn);
        }else{
            mysqli_close($conn);
        }
    }

?>