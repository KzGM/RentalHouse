<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</Details></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style>
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

.about{
    width: 100%;
    padding: 100px 0;
    background-color: rgb(226, 236, 242);
}

.about img{
    height: auto;
    width: auto;
}

.about .text{
    width: 500px;
}

.main{
    width: 1130px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.about .text h2{
    color: #6600ff;
    font-size: 50px;
    text-transform: capitalize;
    margin-bottom: 20px;
}

.about .text p{
    letter-spacing: 1px;
    line-height: 28px;
    font-size: 18px;
    margin-bottom: 45px;
}
	</style>
</head>
<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
try{
    $Email = $_SESSION['Email'];
}
catch(Exception $e)
{

}?>
<body>
    <nav id="navBar" class="navBar-white">
        <img src="DuyDat\img\Live to Work logo.png" class="logo">
        <ul class="nav-links">
            <li><a href="homepage.php" class="active">Home</a></li>    
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <?php
        if($Email != ""){
            echo "<a> </a>";
          }
        else{
            echo "<a href='#' class='register-btn'> Sign up </a>";
        }
        ?>

    </nav>

    <section class="about">
        <div class="main">
            <img src="DuyDat\img\paris.png">
            <div class="text">
            <h2>About Us</h2>
            <h4>Live to work <span>-work till death-</span></h4>
            <p>We are a web and software development team and we also do research on student accommodation, 
                helping students get a good place to stay during their time away from home.</p>
            </div>
        </div>
    </section>