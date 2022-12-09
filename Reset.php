<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Reset Code</title>
     <link rel="stylesheet" href="signup.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php session_start(); 
require_once "Controller.php";

?>



    <form action="Reset.php" method="post" enctype="multipart/form-data">
    <section>
        <!--Bắt Đầu Phần Hình Ảnh-->
        <div class="img-bg">
            <img src="mau-nha-dep-8x14m-1.jpg" alt="Blue back ground">
        </div>
        <!--Kết Thúc Phần Hình Ảnh-->
        <!--Bắt Đầu Phần Nội Dung-->
        <div class="noi-dung">
            <div class="form">
                <h2>Code Verification</h2>
                <form action="">
                    <div class="input-form">
                        <span>Enter your code to proceed</span>
                        <input type="text" name="otp_code" required>
                    </div>
                    
                    

                    
                    <!--div -> span -> input type-->
                    
                   
                     <div class="input-form">
                        <input type="submit" name="otp_verification"/> </input>
                    </div>
                    <br>
                    <div style="position:relative;">
                    <span id = "Message" style="position:absolute; top:-10px; left:0px; font-size:20px">
                    </span></div>
                    <br>
                    
                
                </form>
               
            </div>
        </div>
        <!--Kết Thúc Phần Nội Dung-->
    </section>

</body>

</html>