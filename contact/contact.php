<?php
if($_POST["message"]) {
	$fromEmail = "From: " . $_POST['email'];
    mail("dhrchoi@gmail.com", $_POST["subject"], $_POST["message"], $fromEmail);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script><meta name="viewport" content="initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	 <style type="text/css">
 	#bcg-contact {
	  background-color: white;
	  background-image: url("../images/Truck/forest.jpg");
	  background-size: cover;
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

	#container-contact{
		font-family: "PT Sans", sans-serif;
	}

	#container-contact h1{
		font-size: 5vw;
		margin: 50px 0;
	}

	.input {
	  margin: 0 auto;
	  height: 70%;
	  width: 90%;
	}

	.input .truckimg {
	  float: left;
	  width: 50%;
	}

	.input .truckimg img{
		width: 100%;
	}

	.input .truckimg p {
	  font-size: 25px;
	  padding: 10px 0;
	}

	.info {
	  float: right;
	  width: 50%;
	  height: 100%;
	}

	.info input {
	  height: 50px;
	  width: 90%;
	  margin: 10px 0;
	  font-size: 20px;
	  padding: 0 5px;
	}

	.info input[type=submit] {
	  border: 0 none;
	  width: 100px;
	  font-size: 15px;
	  border-radius: 10px;
	  background-color: #739f3d;
	  color: white;
	  cursor: pointer;
	}

	.info textarea {
	  height: 180px;
	  width: 90%;
	  margin: 10px 0;
	  padding: 10px 10px;
	  font-size: 20px;
	}

	@media(max-width: 1000px){
		#contact-menu{
			margin-bottom: 100px;
		}

		#container-contact{
			height: 100%;
		}
		.input{
			display: table;
		}
		.input .block{
			display: table-row;
			width: 100%;
		}
		#container-contact h1{
			font-size: 34px;
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
