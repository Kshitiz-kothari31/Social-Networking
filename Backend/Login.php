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
        $Email = $_POST['email'];
        $Pword = $_POST['password'];
        $RememberMe = isset($_POST['check']) ? $_POST['check'] : '';
        
        $sql = "SELECT * FROM users WHERE Email = '$Email' AND Password = '$Pword'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if( $num == 1 ){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $Email;
            header("Location: ../HOME/homePage.html");
            exit();
        }else{
            header("Location: ../HOME/login.html");
            exit();            
        }
    }

?>