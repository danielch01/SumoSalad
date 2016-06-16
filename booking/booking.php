<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'Catering';

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($link === false){
	die('ERROR: Could not connect' . mysqli_error());
}

$sql = "INSERT INTO booking (Event_Name, Event_Date, Event_Time, Event_Address, Name, Email, Phone, Alt_Phone, Attendance, Billing_Address, Extra) VALUES ('$_POST[eName]','$_POST[eDate]','$_POST[eTime]','$_POST[eAddress]','$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[altPhone]','$_POST[attendance]','$_POST[billing]', '$_POST[extra]')";

mysqli_query($link, $sql)
// if(mysqli_query($link, $sql)){
// 	mysqli_query($link, $sql);
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script><meta name="viewport" content="initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	 <style type="text/css">
    #bcg-booking {
    background-color: white;
    background-image: url("../images/Truck/forest.jpg");
    background-size: cover;
  }

  #bcg-booking span{
    margin-top: -3vh;
  }

  /*------ DO NOT TOUCH ---------*/

  #contact-menu {
    height: 5%;
    width: 100%;
    margin-bottom: 100px;
  }

  #contact-menu h3 {
    margin-top: 0px;
    font-family: "PT Sans", sans-serif;
    color: white;
    padding: 10px 0;
  }

  #contact-menu #contactForm {
    float: left;
    width: 50%;
    height: 100%;
    background-color: #b3c100;
  }

  #contact-menu #booking {
    float: right;
    width: 50%;
    height: 100%;
    background-color: #4cb5f5;
  }

  #contact-menu #contactForm:hover {
    background-color: #739f3d;
  }

  #contact-menu #booking:hover {
    background-color: #7da3a1;
  }
  /*------ NOW TOUCH ---------*/

  #container-booking{
    height: 100%;
  }

  #container-booking{
    font-family: "PT Sans", sans-serif;
  }
  #container-booking h1 {
    font-family: "PT Sans", sans-serif;
      font-size: 3em;
      margin: 50px 0;
    }

    #booking-form{
      width: 70%;
      margin: 0 auto;
    }

    #booking-form h1{
      font-size: 2em;
      font-family: "Sigmar One", cursive;
      text-decoration: underline;
    }

    #booking-form p, span{
      font-family: "Arial", sans-serif;
      text-align: justify;
      width: 100%;
      margin-bottom: 50px;
      font-size: 20px;
      line-height: 2.5em;
    }

    #booking-form span{
      font-weight: 900;
    }

    #container-booking #booking-form form #submitButton{
      width: 70px;
      height: 70px;
      border-radius: 50%;
      border: 5px solid #f69454;
      background-color: #739f3d;
      font-size: 2.5em;
      margin-bottom: 50px;
      cursor: pointer;
    }

    #container-booking #booking-form form #submitButton:hover{
      border: 5px solid #ee693f;
    }

    @media (max-height: 500px) {
   /* #bcg-booking {
      height: 200px;
    }
    #bcg-booking h1 {
      top: 50%;
      margin-top: -30px;
      height: 60px;
      font-size: 60px;
    }
    #bcg-booking h1 span {
      padding-top: 10px;
      height: 100%;
      font-size: 50%;
    }*/

    #container-booking h1{
      font-size: 3em;
    }
  }

  @media(max-width: 1000px) {
/*    #bcg-booking {
      height: 300px;
    }
    #bcg-booking h1 {
      top: 50%;
      margin-top: -40px;
      height: 80px;
      font-size: 80px;
    }
    #bcg-booking h1 span {
      padding-top: 10px;
      height: 100%;
      font-size: 50%;
    }*/

    form h2{
      width: 90%;
    }

    form input{
      width: 80%;
    }
  } 
   </style>
</head>
<body>

<div class = "header nav">
	<nav>
		<div id = "logo"><a href = "../index.html"><img src="../images/Logo/images.jpg"><a></div>
		<ul>
			<li><a href="../calendar/index.html">Schedule</a></li>
			<li><a href="../menu/index.html">Menu</a></li>
			<li><a href="../about/index.html">About</a></li>
			<li><a href="../contact/index.html">Contact</a></li>
		</ul>
	</nav>
</div>

<article>
		<div class = "bcg bcg-other" id = "bcg-contact">
			<h1><span>Contact</span></h1>
		</div>
		<div class = "container container-other"  id = "container-booking" style = "height: 100%">
			<div id = "contact-menu">
				<a href = "../contact/index.html#contactToHere"><div id = "contactForm"><h3>Contact</h3></div></a>
				<a href = "index.html#bookingToHere"><div id = "booking"><h3>Booking</h3></div></a>
			</div>
			<div id = "bookingToHere"></div>
			<h1>Book Us For An Event</h1>
			<div class = "input">
				<img src="../images/Logo/sumoTogo.jpg">
				<div class = 'info' id = "booking-form" style  = "margin-top: 100px">
					<p  style = "text-align: center"><span>Thank you for choosing Sumo Salad to host your event<br>We will get back to you about your reservation as soon as possible.</span></p>
				</div>
			</div>
		</div>
</article>
<footer style = "height: 20%; width: 100%">
  <h1>Connect</h1>
  <div class = 'social'><a href="https://www.facebook.com/sumosaladtruck/?fref=ts" target = "_blank"><img src="../images/Social_Media/fb1.jpg" alt = "FB"></a></div>
  <div class = 'social'><a href="https://www.instagram.com/sumosaladtruck/" target = "_blank"><img src="../images/Social_Media/instagram.jpg" alt = "IG"></a></div>
  <div class = 'social'><a href="https://twitter.com/hashtag/sumosaladtruck" target = "_blank"><img src="../images/Social_Media/twit.png" alt = "TW" style = "background-color: white"></a></div>
  <p><img src="../images/Social_Media/snapchat.jpg" style = "width: 50px; height: 50px; border-radius: 10px" alt = "SC"><br><strong style = "color: white">@sumosaladtruck</strong></p>
  <div id = "caption">
    <p>jeff@sumosaladtruck.com <hr style= "width: 20%; margin: 0 auto"> Website by Daniel Choi</p>
  </div>
</footer>
</body>
</html>
