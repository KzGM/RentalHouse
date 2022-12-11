<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</Details></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
	/* @import url('http://fornt.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap'); */

*{
    /* margin: 0;
    padding: 0; */
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 5%;
}

.logo{
    width: 100px;
    height: 100px;
    cursor: pointer;
}

.nav-links li{
    list-style: none;
    display: inline-block;
    margin: 10px 30px;
}

.nav-link li a{
    text-decoration: none;
    color: #fff;
}

.register-btn{
    background: #fca5e2;
    color: #000;
    padding: 8px 20px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 14px;
}

.navBar-white{
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
}

.contact{
    position: relative;
    min-height: 50vh;
    padding:50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.contact .content{
    max-width: 800px;
    text-align: center;
}

.contact .content h2{
    font-size: 50px;
    font-weight: 700;
    color: #000;
}

.contact .content p{
    font-size: 20px;
    font-weight: 400;
    color: #000;
}

.container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
}

.container .contactInfo{
    width: 50%;
    display: flex;
    flex-direction: row;
}

.container .contactInfo .box{
    position: relative;
    padding: 20px 0;
    display: flex;
}

.container .contactInfo .box .icon{
    min-width: 60px;
    height: 60px;
    background: #fca5e2;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 60%;
    font-size: 22px;
}

.container .contactInfo .box .text{
    display: flex;
    margin-left: 30px;
    font-size: 20px;
    flex-direction: column;
    font-weight: 300;
}

.container .contactInfo .box .text h3{
    font-weight: 600;
    color:#080aa4;
}

.container .contactInfo .box .text p{
    font-size: 18px;
    font-weight: 300;
}

</style>
	
	
</head>
<body>
    <nav id="navBar" class="navBar-white">
        <img src="DuyDat\images\Live to Work logo.png" class="logo">
        <ul class="nav-links">
            <li><a href="homepage.php" class="active">Home</a></li>    
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <a href="#" class="register-btn">Sign up</a>
    </nav>

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>We specialize in providing information on the best places to stay for students, 
                offering offers that are suitable for students' conditions, 
                please contact us for more information.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>320 Nguyễn Hữu Thọ,<br>Tân Hưng,<br>quận 7,<br>TP. Hồ Chí Minh</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>0974841247</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>LiveToWork@gmail.com</p>
                    </div>
                </div>
            </div>
            <!-- <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>type your message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="send">   
                    </div>
                </form>
            </div> -->
        </div>
    </section>
</body>
</html>