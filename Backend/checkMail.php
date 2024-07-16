<?php
    include 'Partials/dbconnection.php';

    if( $_SERVER["REQUEST_METHOD"] == "POST"){ 
        $_email = $_POST['email'];

        $sql = "SELECT * FROM users WHERE Email = '$_email'";
        $result = mysqli_query($conn, $sql);
        $num  = mysqli_num_rows($result);

        if ( $num == 1 ){
            header("Location: ../HOME/createPassword.html");
            exit();
        }else{
            header("Location: ../HOME/SignUp.html");
            exit();
        }
    }
?>