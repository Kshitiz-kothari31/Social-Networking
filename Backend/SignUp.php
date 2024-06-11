<?php
    include 'Partials/dbconnection.php';

    if( $_SERVER["REQUEST_METHOD"] == "POST"){
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $Email = $_POST['Email'];
        $Pnumber = $_POST['Pnumber'];
        $PrivacyPolicy = $_POST['Check'];
        $Password =  $_POST['Password'];  

        //checking that the users account is already exits or not.
        $exitsSql = "SELECT * FROM `users` WHERE Email = '$Email'";
        $result = mysqli_query($conn, $exitsSql);
        $numExitsRows = mysqli_num_rows($result);
        if( $numExitsRows > 0 ){
            header("Location: ../HOME/login.html");
            exit();
            mysqli_close($conn);
        }else{
            $sql = "INSERT INTO `users`( `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Password`) 
            VALUES ('$Fname', '$Lname', '$Email', '$Pnumber', '$Password')";
        
            if(mysqli_query($conn, $sql))
            {
                header("Location: ../HOME/homePage.html");
                exit();
                mysqli_close($conn);
            }else{
                mysqli_close($conn);
            }
        }

    }

?>