<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tạo Trang Login</title>
     <link rel="stylesheet" href="signup.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script>
        function validate(){

            if (document.getElementById("password").value != document.getElementById("confirm_password").value) {
                
                document.getElementById("Message").style.color = "Red";
                 document.getElementById("Message").innerHTML = "Password do not match!"
                //alert("Password does not match. Please enter password again!");
               return false;
            }
            else{
                document.getElementById("Message").style.color = "Green";
                document.getElementById("Message").innerHTML = "Password match!"
            }
            
        }
     </script>
</head>

<body>
<?php
require_once "Controller.php";

$email = $_SESSION['email'];

if($email == false){
    header('Location: Sign_in.php');
  }

?>

    <form onSubmit ="return validate();" action="new_pass.php" method="post" enctype="multipart/form-data">
    <section>
        <!--Bắt Đầu Phần Hình Ảnh-->
        <div class="img-bg">
            <img src="mau-nha-dep-8x14m-1.jpg" alt="Blue back ground">
        </div>
        <!--Kết Thúc Phần Hình Ảnh-->
        <!--Bắt Đầu Phần Nội Dung-->
        <div class="noi-dung">
            <div class="form">
                <h2>Choose a new password</h2>
                <form action="">
                    
                    <div class="input-form">
                        <span> New Password</span>
                        <input type="password" name="password" id = "password" onkeyup='validate();' required/>
                    </div>

                    <div class="input-form">
                        <span> Confirm Password</span>
                        <input type="password" name="confirm_password" id = "confirm_password" onkeyup='validate()' required/>
                    </div>
                    <!--div -> span -> input type-->
                    
                   
                     <div class="input-form">
                        <input type="submit" name="change_pass"/> </input>
                    </div>
                    <br>
                    <div style="position:relative;">
                    <span id = "Message" style="position:absolute; top:-10px; left:0px; font-size:20px">
                    </span></div>
                    <br>
                    
                    <div></div>
                
                </form>
                
            </div>
        </div>
        <!--Kết Thúc Phần Nội Dung-->
    </section>

</body>

</html>