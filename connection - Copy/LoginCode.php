
<?php

session_start();

require ("db.php");


if(isset($_POST['login_btn'])){
	$email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
	$password = ($_REQUEST['password']);
    $password = (mysqli_real_escape_string($conn, $password));
    $query = "SELECT * FROM `userlogin` WHERE Email = '$email' AND Password = '$password'";
	// check if the account is disabled
	
	//$status = mysqli_query($con, $query); 
	//$status = mysqli_fetch_assoc($status); 
	//$status = $status['Status'];           
	$select = mysqli_query($conn, $query);
	/*
	if($status == "disabled")
	{
		$message = "This account has been disabled, please contact the hotline 18001008";
		echo "<script language = javascript> alert('$message');</script>";
		header("Refresh:0");
			
	}
	
	if($status == "locked")
	{
		$message = "Your account has been locked. Please Contact Admin.";
		echo "<script language = javascript> alert('$message');</script>";
		header("Refresh:0");
	}

	*/
	
    
	if(mysqli_num_rows($select) > 0){
       	
		$message = "Login successful.";
		echo "<script language = javascript> 
		alert('$message');
		window.location.replace('homepage.php');
		</script>";
    } else {
       
		
		
		$message = "Wrong password or username.";
		echo "<script language = javascript> 
		alert('$message');
		window.location.replace('LoginK.php');
		</script>";
		
       
    }
	
}/* else {
    $message = "not allowed to log in.";
	echo "<script language = javascript> alert('$message');</script>";
	$_SESSION['login_attempts_1'] += 1;
	$_SESSION['login_attempts_2'] += 1;
	mysqli_query($con, "UPDATE `users` SET LoginAttempts = '".$_SESSION['login_attempts_2']."' WHERE Username = '$username'");
    header("Location: LoginK.php");
    exit(0);
}*/
/*

unset($_SESSION['locked']);
unset($_SESSION['login_attempts_1']);
unset($_SESSION['login_attempts_2']);
*/
?>