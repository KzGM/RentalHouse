<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Detail</Details></title>
    <link rel="stylesheet" href="./style1.css" />

    <title> Rent House </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <scrip scr="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <scrip scr="js/bootstrap.min.js"> </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Rent.php" method="post" enctype="multipart/form-data">

<?php

require_once "Controller.php";


    $str = $_SESSION["search"];
    
    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'ehome');
    $sql = "SELECT * FROM Houses WHERE HAddress = '$str'";
    $featured = $con->query($sql);
    /*
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM 'houses' WHERE HAddress = '$str'");
    
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
    */
?>
     <nav id="navBar" class="navBar-white">
        <img src="DuyDat\img\Live to Work logo.png" class="logo">
        <ul class="nav-links">
            <li><a href="homepage.php" class="active">Home</a></li>    
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <a href="Sign_up.php" class="register-btn">Sign up</a>
    </nav>
<?php
    while ($house = mysqli_fetch_assoc($featured)):
?>


	<!---
	if($row = $sth->fetch()){
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
				<
			</tr>
		</table>

	}
		
		else{
			echo "Name does not exist";
		}
}
?>

-->
	<div class = "house-details">
        <div class="house-title">
            <h1> <?= $house['Title']; ?> </h1>
            <div class="row">
                
                <div>
                    <p> Address : <?= $house['HAddress']; ?> </p>
                </div>
                
            </div>
        </div>
        <div class="gallery">
            <div class="gallery-img-1"><img src="<?= $house['img0']; ?>"></div> 
            <div><img src="<?= $house['img1']; ?>"></div>
            <div><img src="<?= $house['img2']; ?>"></div>
            <div><img src="<?= $house['img3']; ?>"></div>
            <div><img src="<?= $house['img4']; ?>"></div>
        </div>
        <br>
        <div class="small-details">
            <h2>Contact : <?= $house['Contact']; ?></h2>
            <p>Detail: &nbsp; &nbsp; 1 guest &nbsp; &nbsp; 3 beds &nbsp; &nbsp; 3 bathrooms</p>
            <h4><?= $house['Price']; ?>/month</h4>
        </div>
        <button class="rent-btn" name="Rent" type="submit">Rent</button>
    </div>



    <?php endwhile;

	
	?>

</body>
</html>