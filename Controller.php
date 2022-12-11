<?php
// function to display message and redirect page
function alert($msg, $header) {
    echo "<script type='text/javascript'>alert('$msg');
    window.location.href='$header';
    </script>";
}


session_start();
require "db.php";

// if user sign up a new account...
if(isset($_POST['register_btn']))
{
    
	$email = mysqli_real_escape_string($conn,stripslashes($_POST['email']));
	$password = mysqli_real_escape_string($conn, stripslashes($_POST['password']));
	$_SESSION['oldpass'] = $password;
    $check = "SELECT * FROM `userlogin` WHERE Email = '$email'";
    $check_query = mysqli_query($conn, $check);
    // if email already exists in the database
    if (mysqli_num_rows($check_query) > 0){
        alert("Email already exists!", "#");
    }
    else{
	$query = "INSERT into `userlogin` (Email,Password) 
    		VALUES ('$email', '$password')";
    $result = mysqli_query($conn,$query);
    if($result){
		alert("Register successfully!", "homepage.php");
        
	}
    }
}

// if user attempts to log in...

if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($conn,stripslashes($_POST['email']));
	$password = mysqli_real_escape_string($conn, stripslashes($_POST['password']));
    $query = "SELECT * FROM `userlogin` WHERE Email = '$email' AND Password = '$password'";
	  
	$select = mysqli_query($conn, $query);
	
	if(mysqli_num_rows($select) > 0){
        alert("Log in successfully", "homepage.php");
        
    } else { // yeah
       
        alert("Wrong email or password", "#");
    }
}
// code để người dùng nhận được mail chứa otp code khá dài nên tui để ở file 'index.php'

// if user attempts to enter otp code to reset password
if (isset($_POST['otp_verification'])) {
    $otp_code = mysqli_real_escape_string($conn,stripslashes($_POST['otp_code']));
    $check = "SELECT * FROM `userlogin` WHERE Code = '$otp_code'";
    $check_query = mysqli_query($conn, $check);

    
    if (mysqli_num_rows($check_query) > 0) {
        $fetch_data = mysqli_fetch_assoc($query);
        $old_pass = $fetch_data['Password'];
        $_SESSION['old_pass'] = $old_pass;
        $email = $fetch_data['Email'];
        $_SESSION['email'] = $email;
        header('location: new_pass.php');
    }
    else{ // yeah
        alert("Invalid OTP Code", "#");
    }
    
}

// if user attempts to change password
if (isset($_POST['change_pass'])) {

    $email = $_SESSION['email'];
    $old_pass = $_SESSION['old_pass'];
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    // if new pass is the same as old pass
    if($password == $old_pass)
    {
        
        alert("Please use a different password to your old one.", "#");

    }
    else
    { 

        $check = "SELECT * FROM `userlogin` WHERE Email = '$email'";
        $check_query = mysqli_query($conn, $check);
        if (mysqli_num_rows($check_query) > 0) {
            $query = "UPDATE `userlogin` SET Password = '$password' Where Email = '$email'";

            $result = mysqli_query($conn, $query);
            if ($result) {
                alert("Your password has been reset. Sign in now.", "Sign_in.php");
            }

        }
            
    }

}

?>