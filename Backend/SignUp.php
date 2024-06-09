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
        $RememberMe = $_POST['Check'];
        $Password;  
        
        if( $_POST['Password'] == $_POST['Cpassword'] ){
            $Password = $_POST['Password'];
        }

        $sql = "INSERT INTO `Users data`( `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Password`) 
            VALUES ('$Fname', '$Lname', '$Email', '$Pnumber', '$Password')";
            
        if(mysqli_query($conn, $sql))
        {
            mysqli_close($conn);
        }else{
            mysqli_close($conn);
        }
    }

?>