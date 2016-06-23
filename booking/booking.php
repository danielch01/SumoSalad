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
  <title>Contact Us</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans%7COswald%7CSigmar+One">


  <link rel="stylesheet" type="text/css" href="../css/style.css">
   <style type="text/css">
  #bcg-booking {
    background-color: white;
    background-image: url("../images/Truck/forest.jpg");
    background-size: cover;
  }

  #container-booking{
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

  #container-booking h1{
    font-size: 3em;
    margin: 2em 0;
  }

  #container


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
    <div class = "bcg bcg-other" id = "bcg-booking">
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
          <p  style = "text-align: center; font-size: 2em; font-family: 'Oswald', sans-serif; font-weight: bold; letter-spacing: .1em">Thank you for choosing Sumo Salad to host your event<br>We will get back to you about your reservation as soon as possible.</p>
        </div>
      </div>
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