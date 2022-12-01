<head>
</head>
<?php

session_start();
require('db.php');
$errors = array();
if (isset($_POST['register_btn'])){
	
	$email = stripslashes($_POST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	
	/*
	$address = stripslashes($_POST['address']);
	$address = mysqli_real_escape_string($conn,$address);
	$front_image = $_FILES['front_image']['name'];
	$front_image_size = $_FILES['front_image']['size'];
	$front_image_tmp_name = $_FILES['front_image']['tmp_name'];
	$front_image_folder = 'uploaded_image/'.$front_image;
	$back_image = $_FILES['back_image']['name'];
	$back_image_size = $_FILES['back_image']['size'];
	$back_image_tmp_name = $_FILES['back_image']['tmp_name'];
	$back_image_folder = 'uploaded_image/'.$back_image;
	*/
	/*
	$user = '0123456789';
	$username = '';
	$pass = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$password = '';
	for($i = 0; $i < strlen($user); $i++)
	{
		$username.= $user[rand(0, strlen($user) - 1)];
	}
	$username = mysqli_real_escape_string($conn, $username);
	$_SESSION['username'] = $username;
	
	for($i = 0; $i < strlen($user); $i++)
	{
		$password.= $pass[rand(0, strlen($pass) - 1)];
	}
	*/
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//$_SESSION['oldpass'] = $password;
	
    $check = "SELECT * FROM `userlogin` WHERE Email = '$email' AND Password = '$password'";
    $check_query = mysqli_query($conn, $check);
    if (mysqli_num_rows($check_query) > 0){
        $_SESSION['message'] = "This account is already existed!";
    }
	
	$query = "INSERT into `userlogin` (Email,Password) 
    		VALUES ('$email', '$password')";
    $result = mysqli_query($conn,$query);
    if($result){
		echo "<div class='container'>
			<font color='#8e1b0e' size='+4'><center>You are registered successfully.</center></font>
		<br/></div>";
		echo "<div class='container'><font size='+2'><center>Your email is: $email</center></font></div>";
		echo "<br>";
		echo "<div class='container'><font size='+2'><center>Your password is: $password</center></font></div>";
		echo "<br>";
		
}
}
?>