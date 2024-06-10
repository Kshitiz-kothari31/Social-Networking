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
        
        $sql = "SELECT Password FROM usersdata WHERE Email = ?";

        // Prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $Email);
        
        // Execute the statement
        $stmt->execute();
        // Store result
        $stmt->store_result();
        
        if( $stmt->num_rows > 0 )
        {
            // Bind result variables
            $stmt->bind_result($db_password);
            $stmt->fetch();

            if( password_verify($Pword, $db_password)){
                header("Location: ../HOME/main_home.html");
                exit();
            }else{
                echo '<script>alert("Invalid email or password.");</script>';
            }
        }else{
            echo '<script>alert("Invalid email or password.");</script>'; 
        }
        $stmt->close();
        $conn->close();
    }

?>