<?php
//include "header.php";
include_once "dbconfig.php";
//include "destinations.php";
session_start();

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
?>

<html>
<head>
<meta charset="UTF-8">
<meta name = "viewport" content="wdth=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div 
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
		<div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Your Trip <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="userpage.php#before" class="w3-bar-item w3-button">Before</a>
        <a href="userpage.php#dday" class="w3-bar-item w3-button">D Day</a>
        <a href="userpage.php#during" class="w3-bar-item w3-button">During</a>
	      <a href="userpage.php#after" class="w3-bar-item w3-button">After</a>
      </div>
    </div>	

		<a href="userpage.php#furbabies" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Fur Babies</a>

		<div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Others<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="userpage.php#baggage" class="w3-bar-item w3-button">Baggage</a>
        <a href="userpage.php#forbidden" class="w3-bar-item w3-button">Forbidden Goods</a>
        <a href="userpage.php#disclaimer" class="w3-bar-item w3-button">Disclaimers</a>
      </div>
    </div>

	<div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Your Account <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="userpage.php#useraccessinfo" class="w3-bar-item w3-button">User access info</a>
				<a href="userpage.php#accountinfo" class="w3-bar-item w3-button">Account Info</a>
        <a href="userpage.php#travelhistory" class="w3-bar-item w3-button">Travel History </a>
        <a href="updateaccount.php" class="w3-bar-item w3-button">Update Info</a>
      </div>
    </div>

	<a href="buy.php" class="w3-blue w3-bar-item w3-button w3-padding-large w3-hide-small w3-xlarge" style="text-shadow:1px 1px 0 #444">Buy</a>

   <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact Us</a>
	 
	 
	 
		<a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>	
		
	
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>


</body>
</html>