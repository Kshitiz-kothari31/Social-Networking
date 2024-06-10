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
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $Email = $_POST['Email'];
        $Pnumber = $_POST['Pnumber'];
        $PrivacyPolicy = $_POST['Check'];
        $Password =  $_POST['Password'];  

        $sql = "INSERT INTO `UsersData`( `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Password`) 
            VALUES ('$Fname', '$Lname', '$Email', '$Pnumber', '$Password')";
            
        if(mysqli_query($conn, $sql))
        {
            header("Location: ../HOME/main_home.html");
            exit();
            mysqli_close($conn);
        }else{
            mysqli_close($conn);
        }
    }

?>