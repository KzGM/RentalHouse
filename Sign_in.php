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
</head>
<body>
<?php require_once "Controller.php"; ?>
    
    <form action="Sign_in.php" method="post" enctype="multipart/form-data">
    <section>
        <!--Bắt Đầu Phần Hình Ảnh-->
        <div class="img-bg">
            <img src="mau-nha-dep-8x14m-1.jpg" alt="Blue back ground">
        </div>
        <!--Kết Thúc Phần Hình Ảnh-->
        <!--Bắt Đầu Phần Nội Dung-->
        <div class="noi-dung">
            <div class="form">
                <h2>Welcome to Rental Acommodation</h2>
                <form action="">
                <div class="input-form">
                        <span>Email</span>
                        <input type="text" name="email" required>
                    </div>
                    <div class="input-form">
                        <span>Password</span>
                        <input type="password" name="password" id = "password" onkeyup='check();' required/>
                    </div>
                    <div class="input-form">
                        <p>Forgot password? <a href="ForgotPass.php">Change</a></p>
                    </div>
                    <div class="nho-dang-nhap">
                        <label><input type="checkbox" name=""> Remember sign in!</label>
                    </div>
                    <div class="input-form">
                        <input type="submit" class="login_btn" name="login_btn" value="Sign in"/>
                    </div>

                </form>
                <h3>Use social network</h3>
                <ul class="icon-dang-nhap">
                    <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                    <li><i class="fa fa-google" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                </ul>
            </div>
        </div>
        <!--Kết Thúc Phần Nội Dung-->
    </section>
</body>
</html>