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
	<title>Contact Us</title><meta name="viewport" content="initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	 <style type="text/css">
 	#bcg-contact {
  background-color: white;
  background-image: url("../images/Truck/forest.jpg");
  background-size: cover; }

#contact-menu {
  height: 5%;
  width: 100%; }
  #contact-menu h3 {
    margin-top: 5px;
    font-family: "PT Sans", sans-serif;
    color: white;
    padding: 10px 0; }
  #contact-menu #contactForm {
    float: left;
    width: 50%;
    height: 100%;
    background-color: #b3c100; }
    #contact-menu #contactForm:hover {
      background-color: #739f3d; }

        #contact-menu #booking {
    float: right;
    width: 50%;
    height: 100%;
    background-color: #4cb5f5; }
    #contact-menu #booking:hover {
      background-color: #34675c; }

      #container-booking {
  height: 100%; }
  #container-booking #booking-form {
    width: 90%;
    float: none;
    margin: 0 auto;
    margin-bottom: 5%; }
    #container-booking #booking-form h1 {
      font-family: "Sigmar One", cursive;
      margin-top: 100px;
      text-decoration: underline; }
    #container-booking #booking-form p {
      margin: 0 auto;
      text-align: justify;
      padding: 0px 50px;
      margin-bottom: 100px;
      font-size: 20px;
      line-height: 2em; }
    #container-booking #booking-form span {
      font-size: 22px;
      font-weight: bold; }
    #container-booking #booking-form form h2 {
      border: 3px solid;
      width: 100%;
      padding: 15px 0; }
    #container-booking #booking-form form div {
      margin: 0px 20% 10%; }
    #container-booking #booking-form form #contact {
      margin-bottom: 0; }
    #container-booking #booking-form form #submitButton {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      font-size: 40px; }
  #container-booking #bookingEntered {
    background-color: grey; }

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
	<div class = "content" id = "content-contact">
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
				<img src="../images/Logo/sumo_togo.jpg">
				<div class = 'info' id = "booking-form" style  = "margin-top: 100px">
					<p  style = "text-align: center"><span>Thank you for choosing Sumo Salad to host your event<br>We will get back to you about your reservation as soon as possible.</span></p>
				</div>
			</div>
		</div>
	</div>
</article>
<footer style = "height: 300px; width: 100%">
	<h1>Connect</h1>
	<div class = 'social'><a href=""><img src="../images/Social_Media/fb1.jpg"></a></div>
	<div class = 'social'><a href=""><img src="../images/Social_Media/instagram.jpg"></a></div>
	<div class = 'social'><a href=""><img src="../images/Social_Media/twit.png" style = "background-color: white"></a></div>
	<div id = "caption">
		<figcaption>jeff@sumosaladtruck.com <hr width="20%" style= "margin: 0 auto"> Website by Daniel Choi</figcaption>
	</div>
</footer><script src="../js/main.js" type="text/javascript"></script>
</body>
</html>
