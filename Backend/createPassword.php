<?php
    include 'Partials/dbconnection.php';

    if( $_SERVER["REQUEST_METHOD"] == "POST"){
        $NewPassword = $_POST['newPassword'];
        $ConfirmPassword = $_POST['confirmPassword'];

        
    }
?>