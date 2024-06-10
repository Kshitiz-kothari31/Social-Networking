<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- css link -->
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <form action="" method="POST">
        <div class="container">
            <img src="images/login_page_image.png" alt="this is an image.">
            <div class="loginBox">
                <h1 id="firstheading">Holla, </h1> 
                <h1 id="secondheading">Welcome Back</h1> 
                <p>hey, welcome back to your special place.</p>
                <div class="inputBox">
                    <input type="text" placeholder="Username" name="username" required class="inputStyle"> <br>
                    <input type="password" placeholder="Password" name="password" required class="inputStyle"> <br>
                    <input type="checkbox" name="check" required class="check"> <span>Remember me</span>
                    <a href="#">Forget Password?</a> <br>
                    <input type="submit" value="Login" class="loginBtn"> <br> <br> <br>
                    <span class="bottomSignup">Don't have an account? <a href="signUp.php" id="SignUpStyle" >SignUp</a></span>
                </div>
            </div>
        </div>
    </form>
</body>
</html>