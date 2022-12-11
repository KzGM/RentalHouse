<?php
session_start();
require "db.php";

	use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

//Include required PHPMailer files
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';
	require 'phpmailer/src/Exception.php';
//Define name spaces
if (isset($_POST['forget_pass'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $check_mail = "SELECT * FROM `userlogin` where Email='$email'";
    $query = mysqli_query($conn, $check_mail);
    if (mysqli_num_rows($query) > 0) {
        $random_code = rand(10000, 99999); // generate random code 
        $insert = "UPDATE `userlogin` set Code = $random_code where Email = '$email'";
        $query = mysqli_query($conn, $insert);
        if ($query) {

            //Create instance of PHPMailer
            $mail = new PHPMailer();
            //Set mailer to use smtp
            $mail->isSMTP();
            //Define smtp host
            $mail->Host = "smtp.gmail.com";
            //Enable smtp authentication
            $mail->SMTPAuth = true;
            //Set smtp encryption type (ssl/tls)
            $mail->SMTPSecure = "tls";
            //Port to connect smtp
            $mail->Port = "587";
            //Set gmail username
            $mail->Username = 'khoalieudang@gmail.com';
            //Set gmail password
            $mail->Password = 'cnugsptneaoosgsh';
            //Email subject
            $mail->Subject = "Passoword Recovery Reset Code";
            //Set sender email
            $mail->setFrom('khoalieudang@gmail.com', 'Mailer');
            //Enable HTML
            $mail->addAddress($_POST['email']);
            $mail->isHTML(true);
            //Attachment

            //Email body
            $mail->Body = "Your Recovery Code is $random_code";
            //Add recipient
            if($mail->send()){
                $_SESSION['email'] = $email;
                echo "Sent successfully";
                header('location: Reset.php');
            }
            else{
                echo "Can't send code.";
            }
            //Finally send email
        } else {
            echo "Something went wrong.";
        }
    }
    else{
        $message = "Problem to access database.Please check if you entered email correctly.";
        echo "<script language = javascript> 
        alert('$message');
        window.location.replace('ForgotPass.php');
        </script>";
    }
}
?>