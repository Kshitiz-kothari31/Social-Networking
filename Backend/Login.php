<?php
    include 'Partials/dbconnection.php';

    if( $_SERVER["REQUEST_METHOD"] == "POST"){
        $Email = $_POST['email'];
        $Pword = $_POST['password'];
        $RememberMe = isset($_POST['check']) ? $_POST['check'] : '';
        
        // $sql = "SELECT * FROM users WHERE Email = '$Email' AND Password = '$Pword'";
        $sql = "SELECT * FROM users WHERE Email = '$Email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if( $num == 1 ){
            while( $row = mysqli_fetch_assoc($result)){
                if ( password_verify($Pword, $row['Password'])){
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $Email;
                    header("Location: ../HOME/homePage.html");
                    exit();
                }
            }
        }else{
            header("Location: ../HOME/login.html");
            exit();            
        }
    }

?>