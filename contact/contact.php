<?php
if($_POST["message"]) {
	$fromEmail = "From: " . $_POST['email'];
    mail("jeff@sumosaladtruck.com", $_POST["subject"], $_POST["message"], $fromEmail);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="description" content=""> 
	<!-- ^^^ Fill this description up after consulting Jeff -->
	<meta name="viewport" id = "viewport" content="widht=device-widt, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<meta name = "keywords" content="Sumo, Salad, Food, Truck, sumosalad, asian green, pesto chicken, taco quinoa salad, balsamic beetroot, basil chicken penne, thai chicken noodle, sweet hawaiian chicken, chipotle pulled pork, jones pure cane soda">
	<title>Contact Us</title><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans%7COswald%7CSigmar+One">
	 <style type="text/css">
 	#bcg-contact {
	  background-color: white;
	  background-image: url("../images/Truck/forest.jpg");
	  background-size: cover;
	}

	#container-contact{
		height: 100%;
		overflow: hidden;
	}

	#contact-menu {
	  height: 5%;
	  width: 100%;
	  margin-bottom: 50px;
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

	#container-contact h1{
		font-size: 2em;
		letter-spacing: .1em;
		line-height: 3em;
		margin-top: 10%;
		font-family: "Sigmar One", cursive;
		font-weight: bold;
	}

	@media(max-width: 1000px){
		#container-contact h1{
			margin: 2em 2em;
		}

		#container-contact img{
			width: 80%;
			height: auto;
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
		<div class = "container container-other" id = "container-contact">
			<div id = "contact-menu">
				<a href = "index.html#contactToHere"><div id = "contactForm"><h3>Contact</h3></div></a>
				<a href = "../booking/index.html#bookingToHere"><div id = "booking"><h3>Booking</h3></div></a>
			</div>
			<div id = "contactToHere"></div>
			<h1>Your Message Has Been Received<br>Thank You!</h1>
			<img src="../images/Logo/vectorTruck.jpg">
		</div>
</article>
<footer style = "height: 20%; width: 100%">
	<h1>Connect</h1>
	<div class = 'social'><a href="https://www.facebook.com/sumosaladtruck/?fref=ts" target = "_blank"><img src="../images/Social_Media/fb1.jpg" alt = "FB"></a></div>
	<div class = 'social'><a href="https://www.instagram.com/sumosaladtruck/" target = "_blank"><img src="../images/Social_Media/instagram.jpg" alt = "IG"></a></div>
	<div class = 'social'><a href="https://twitter.com/hashtag/sumosaladtruck" target = "_blank"><img src="../images/Social_Media/twit.png" alt = "TW" style = "background-color: white"></a></div>
	<div class = 'social'><img src="../images/Social_Media/snapchat.jpg" alt = "SC"></div>
	<div id = "caption">
		<p>jeff@sumosaladtruck.com</p> <hr style= "width: 20%; margin: 0 auto"> <p>Website by Daniel Choi</p>
	</div>
</footer>
</body>
</html>