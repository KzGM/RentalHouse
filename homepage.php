
<!DOCTYPE html>
<?php
error_reporting(E_ALL ^ E_NOTICE);
require ('db.php');
require_once "Controller.php";
session_start();
try {
  $Email = $_SESSION['Email'];
}
catch(Exception $e){

}
?>


<html lang="english">
  <head>
    <title>Home</title>
  
    
    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" /> 

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
    
    <div>
      <link href="./desktop2.css" rel="stylesheet" />

      <div class="desktop1-container">
        <div class="desktop1-desktop1">
          <div class="desktop1-navbar"> 
            <img
              alt="Vector2640"
              src="public/playground_assets/vector2640-tqc.svg"
              class="desktop1-vector"
            />
            <div class="desktop1-topnavbar">
              <div class="desktop1-navbar1">`
                <div class="topnav">
                  <a class="active" href="#home">Home</a>
                  <a href="aboutUs.php">About</a>
                  <a href="contact.php">Contact</a>
                  
                </div>

                <div class="topnav">
                  
                  
                  
                  <a href="Rent.php"> Rent </a>
                  
                </div>

                <div style="padding: 1px 20px;">
                  <form action="homepage.php" method="post" enctype="multipart/form-data">
                  <input name="search" type="text"  placeholder="Search for apartments..." style="border:3px solid black; height:45px; width: 250px;" > </input>
                  <input style = "border:1px solid black; border-radius: 10px; background:#FF6F61; height:45px; width:60px" type="submit" name="submit" value = "Search">  </input>
                  </form>
                </div>

                <div style="padding: 1px 10px; margin-left:40px; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight: bold;">
                <?php
                if ($Email == "") {
                  echo '<div class = "topnav">';
                  echo '<a href = "Sign_up.php"> Sign up  </a>';
                  echo '</div>';
                  echo '</div>';
                }
                else{
                  echo "<p style='text-align:center'>Welcome</p><p style='color:red'>" . $Email . "</p>";
                  echo "</div>";
                  echo '<div class="topnav">';
                  echo '<a href="Sign_out.php">Sign out</a>';
                  echo '</div>';
                }
                ?>

            </div>
           
          </div>

          

          <div class="desktop1-group244">
            <div class="desktop1-headerpicture">
              <img
                alt="pexelsexpectbest32378022652"
                src="public/playground_assets/pexelsexpectbest32378022652-49zo-600h.png"
                class="desktop1-pexelsexpectbest3237802"
              />
            </div>
            <div class="desktop1-group243">
              <div class="desktop1-lefttext">
                <div class="desktop1-headertext">
                  <div class="desktop1-group180">
                    <span class="desktop1-text06">
                      <span>Acommodation for everyone</span>
                    </span>
                    <span class="desktop1-text08">
                      <span>
                        <span>
                          We would like to introduce a website providing a
                          complete service for the rental of real estate for
                          students. We have been operating in every cities in
                          Viet Nam for more than 1 year.
                        </span>
                        <br />
                        <span>
                          More than 100 000 Users register rental places in this
                          website. We will strive to improve our services and
                          customer satisfaction,
                        </span>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
