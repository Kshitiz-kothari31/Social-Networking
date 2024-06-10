<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>

    <!-- css link -->
    <link rel="stylesheet" href="styles/signup.css">
</head>
<body>

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

        $error = "*";

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

    <form action="SignUp.php" method="post">
        <div class="container">
            <img src="images/login_page_image.png" alt="this is an image.">
            <div class="SignupBox">
                <h1 id="heading">Sign Up </h1>
                <p>Create your account?.</p>
                <div class="inputBox">
                    <input type="text" name="Fname" placeholder="First Name" class="inputStyle"> 
                    <input type="text" name="Lname" placeholder="Last Name" class="inputStyle">  <br>
                    <input type="text" name="Email" placeholder="Email" class="inputStyle"> 
                    <input type="tel" name="Pnumber" placeholder="phone number" class="inputStyle">  <br>
                    <input type="password" name="Password" placeholder="Password" class="inputStyle">
                    <input type="password" name="Cpassword" placeholder="Confirm Password" class="inputStyle">  <br>
                    <input type="checkbox" name="Check" class="check"> <span>i've read and agree with the <b>Terms of Service</b> and our <b>Privacy Policy</b></span>
                    <input type="submit" value="SIGN UP" class="SignupBtn"> <br> <br> <br> <br>
                    <span class="bottomSignup">Already have an account? <a href="login.html" id="LoginStyle" >Login</a></span>
                    </div>
            </div>
        </div>
    </form>

    <script src="javaScriptFiles/signUp.js"></script>
</body>
</html>