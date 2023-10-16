<!DOCTYPE html>
<?php
ob_start();
include "header_user.php";
include_once "dbconfig.php";
//include "destinations.php";
include "functions.php";
session_start();


		$username 				= $_SESSION['uname'];
		$useremail 				= $_SESSION['useremail'];
		$firstname 				= $_SESSION['firstname'];
		$lastname 				= $_SESSION['lastname'];
		$middlename 			= $_SESSION['middlename'];
		$paxid 						= $_SESSION['paxid'];
		$pasno						= $_SESSION['pasno'];
		$pascountry 			= $_SESSION['pascountry'];
		$pasexpdate 			= $_SESSION['pasexpdate'];
		$pasissuedate 		= $_SESSION['pasissuedate'];
		$paxdob 					= $_SESSION['paxdob'];
		$paxemail 				= $_SESSION['paxemail'];
		$paxgender 				= $_SESSION['paxgender'];
		$paxaddress 			= $_SESSION['paxaddress'];
		$paxcity 					=	$_SESSION['paxcity'];
		$paxstate 				= $_SESSION['paxstate'];
		$paxcountry 			= $_SESSION['paxcountry'];
		$paxcountrycode 	= $_SESSION['paxcountrycode'];
		$paxareacode 			= $_SESSION['paxareacode'];
		$paxphone 				= $_SESSION['paxphone'];
		$paxcontname 			= $_SESSION['paxcontname'];
		$paxcontemail 		= $_SESSION['paxcontemail'];
		$paxcontphone 		= $_SESSION['paxcontphone'];
		$profimg 					=	$_SESSION['paxprofimg'];

//		$sqlupdatepax = "UPDATE PASSENGER SET PAX_MIDDLENAME='Pamela' WHERE USERNAME='$username'";
//	$conn -> query($sqlupdatepax);



		//error variables
		/*  $error_pasissuedate = $error_paxdob = $error_paxemail = $error_paxgender = $error_paxcity = $error_paxstate = $error_paxcountry = $error_paxcountrycode = $error_paxareacode = $error_phone = $error_contname = $error_contemail = $error_contphone = "";
		*/
		$error_firstname = $error_middlename = $error_lastname = $error_pasno = $error_pascountry = $error_pasexpdate = "";
		$error_input = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {			

			if (empty($_POST["firstname"])) {
				$errormsg = "First Name is required";
				$error_input += 1;
			} else {
				$firstname = test_input($_POST["firstname"]);
								
				if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
					$errormsg = "Only letters and white space allowed";
					$error_input += 1;
				} else {
					$errormsg = "";
					$error_input += 0;
				}
			}
	
			if (empty($_POST["middlename"])) {
				$errormsg = "Middle name is required";
				$error_input += 1;
			} else {
				$middlename = test_input($_POST["middlename"]);
				
				if (!preg_match("/^[a-zA-Z ]*$/", $middlename)) {	
					$errormsg = "Only letters and white space allowed";
					$error_input += 1;	
				} else {
	
					$errormsg = "";
					$error_input += 0;
				}
			}

			if (empty($_POST["lastname"])) {
				$errormsg = "Last name is required";
				$error_input += 1;
			} else {
				$lastname = test_input($_POST["lastname"]);
							
				if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {	
					$errormsg = "Only letters and white space allowed";
					$error_input += 1;	
				} else {
	
					$errormsg = "";
					$error_input += 0;
				}
			}
			
		
			if (empty($_POST["pasno"])) {
				$errormsg = "Passport number is required";
				$error_input += 1;
			} else {
				$pasno = test_input($_POST["pasno"]);
				$errormsg = "";
				$error_input += 0;
			}
			
			
			if (empty($_POST["pascountry"])) {
				$errormsg = "Passport country is required";
				$error_input += 1;
			} else {
				$pascountry = test_input($_POST["pascountry"]);
				
				if (!preg_match("/^[a-zA-Z ]*$/", $pascountry)) {	
					$errormsg = "Only letters and white space allowed";
					$error_input += 1;	
				} else {
				$errormsg = "";
				$error_input += 0;
				}
			}
			
			if (empty($_POST["pasexpdate"])) {
				$errormsg =  "Passport expiration date is required";
				$error_input += 1;
			} else {
				$pasexpdate = test_input($_POST["pasexpdate"]);
			
			/*	if (validateDate($pasexpdate)!= "1")
				{
					$errormsg =  "Passport Expiration date is invalid. Reenter YYYY-MM-DD";	
					$error_input += 1;
				}
				else
				{
				*/
					$errormsg = "";
					$error_input += 0;
			//	}
			}
			
			if (empty($_POST["pasissuedate"])) {
				$errormsg =  "Passport issue date is required";
				$error_input += 1;
			} else {
				$pasissuedate = test_input($_POST["pasissuedate"]);
			/*
				if (validateDate($pasissuedate)!= "1")
				{
					$errormsg =  "Passport issue date is invalid. Reenter YYYY-MM-DD";	
					$error_input += 1;
				}
				else
				{
				*/
					$errormsg = "";
					$error_input += 0;
			//	}
				
			}
			
				if (empty($_POST["paxdob"])) 
			{
				$errormsg = "Date of Birth is required";
			} 
			else 
			{
				$paxdob = test_input($_POST["paxdob"]);
			/*
				if (validateDate($paxdob)!="1")
				{
					$errormsg = "Date birth is invalid";	
				}
				else
				{
					*/
					$errormsg = "";
					$error_input += 0;
			//	}
			}
		
			if (!empty($_POST["paxgender"])){
				$paxgender = test_input($_POST["paxgender"]);
				$errormsg = "";
				$error_input += 0;
			}
			else
			{
				$errormsg="Gender can't be empty";
				$error_input += 1;
			}
		
			if (empty($_POST["paxaddress"])) 
			{
				$errormsg = "Address  is required";
			} 
			else 
			{
				$errormsg = test_input($_POST["paxaddress"]);
				$error_input += 0;
			}
			
			 
			if (empty($_POST["paxcity"])) 
			{
				$errormsg = "Home city  is required";
			} 
			else 
			{
				$errormsg = test_input($_POST["paxcity"]);
				$error_input += 0;
			}
			
			if (empty($_POST["paxstate"])) 
			{
				$errormsg = "State is required";
			} 
			else 
			{
				$paxstate = test_input($_POST["paxstate"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$paxstate))
				{
					$errormsg = "Only letters and white space allowed";
					$error_input += 1;
				}
				else
				{
					$errormsg = "";
					$error_input += 0;
				}
			}
  
		  
			if (empty($_POST["paxcountry"])) 
			{
				$errormsg = "Country is required";
			} 
			else 
			{
				$paxcountry = test_input($_POST["paxcountry"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$paxcountry))
				{
					$errormsg = "Only letters and white space allowed";
					$error_input += 1;
				}
				else
				{
					$errormsg = "";
					$error_input += 0;
				}
			}
  
			if (empty($_POST["paxemail"])) 
			{
				$errormsg = "E-mail is required";
			} 
			else 
			{
					$paxemail = test_input($_POST["paxemail"]);
				/*	if (!filter_var($email,FILTER_VALIDATE_EMAIL))
						{
						$errormsg="Email Invalid format";
						$error_input += 1;
						}
					else
						{*/
						$errormsg = "";
						$error_input += 0;
					//	}
			} 

			if (!empty($_POST["paxcountrycode"])){
				$paxcountrycode = test_input($_POST["paxcountrycode"]);
				$errormsg = "";
				$error_input += 0;
			}
			else
			{
				$errormsg="Phone country code can't be empty";
				$error_input += 1;
			}

			if (!empty($_POST["paxareacode"])){
				$paxareacode = test_input($_POST["paxareacode"]);
				$errormsg = "";
				$error_input += 0;
			}
			else
			{
				$errormsg="Phone area code can't be empty";
				$error_input += 1;
			}


			if (!empty($_POST["paxphone"])){
				$paxphone = test_input($_POST["paxphone"]);
				$errormsg = "";
				$error_input += 0;
			}
			else
			{
				$errormsg="Phone number can't be empty";
				$error_input += 1;
			}

			if (!empty($_POST["paxcontname"])){
				$paxcontname = test_input($_POST["paxcontname"]);
				$errormsg = "";
				$error_input += 0;
			}
			else
			{
				$errormsg="Emergency contact name can't be empty";
				$error_input += 1;
			}

			if (!empty($_POST["paxcontphone"])){
				$paxcontphone = test_input($_POST["paxcontphone"]);
				$errormsg = "";
				$error_input += 0;
			}
			else
			{
				$errormsg="Emergency contact phone number can't be empty";
				$error_input += 1;
			}

			if (empty($_POST["paxcontemail"])) 
				{
					$errormsg = "Emergency contact E-mail is required";
				} 
				else 
				{
						$paxcontemail = test_input($_POST["paxcontemail"]);
			/*
					if (!filter_var($email,FILTER_VALIDATE_EMAIL))
							{
							$errormsg="Email Invalid format";
							$error_input += 1;
							}
						else
							{*/
							$errormsg = "";
							$error_input += 0;
							//}
				} 
}





/*
$sqlpax = "SELECT * FROM PASSENGER WHERE USERNAME ='$username'";
$resultpax = $conn->query($sqlpax);

if ($resultpax->num_rows >0) 
{
	$row = $resultpax->fetch_assoc(); 
	
	echo "username from query: ". $row['USERNAME'];
	echo "password from query: ". $row['PAX_FIRSTNAME'];
	echo "email from query: ". $row['PAX_LASTNAME'];

	if ($row['USERNAME']==$username)
	{
		/*
		
		$paxid = $row['PAX_ID'];
		$paxid = $_SESSION['paxid'];
		$firstname = 	$_SESSION['firstname'];
		$middlename = $_SESSION['middlename'];
		$lastname = 	$_SESSION['lastname'];
		$pasno = $row['PAX_PASSPORT'];
		$_SESSION['pasno']= $pasno;
		$pascountry = $row['PAX_PASSPORTCOUNTRY'];
		$_SESSION['pascountry']= $pascountry;
		$pasexpdate = $row['PAX_EXPDATE'];
		$_SESSION['pasexpdate']= $pasexpdate;
		$pasissuedate = $row['PAX_ISSUEDATE'];
		$_SESSION['pasissuedate']= $pasissuedate;
		$paxdob = $row['PAX_BIRTHDATE'];
		$_SESSION['paxdob']= $paxdob;
		$paxemail = $row['PAX_EMAIL'];
		$_SESSION['paxemail']= $paxemail;
		$paxgender = $row['PAX_GENDER'];
		$_SESSION['paxgender']= $paxgender;
		$paxaddress = $row['PAX_ADDRESS'];
		$_SESSION['paxaddress']= $paxaddress;
		$paxcity = $row['PAX_CITY'];
		$_SESSION['paxcity']= $paxcity;
		$paxstate = $row['PAX_STATE'];
		$_SESSION['paxstate']= $paxstate;
		$paxcountry = $row['PAX_COUNTRY'];
		$_SESSION['paxcountry']= $paxcountry;
		$paxemail = $row['PAX_EMAIL'];
		$_SESSION['paxemail']= $paxemail;
		$paxcountrycode = $row['PAX_COUNTRYCODE'];
		$_SESSION['paxcountrycode']= $paxcountrycode;
		$paxareacode = $row['PAX_AREACODE'];
		$_SESSION['areacode']= $paxareacode;
		$paxphone = $row['PAX_PHONE'];
		$_SESSION['paxphone']= $paxphone;
		$paxcontname = $row['PAX_CONTACTINFONAME'];
		$_SESSION['paxcontname']= $paxcontname;
		$paxcontemail = $row['PAX_CONTACTEMAIL'];
		$_SESSION['address']= $paxcontemail;
		$paxcontphone = $row['PAX_CONTACTPHONE'];
		$_SESSION['address']= $paxcontphone;
		$profimg = $row['PAX_IMAGE'];
		$_SESSION['paxprofimg']= $paxprofimg;
	/*}*/
//}



?>

<html>
<head>
<meta charset="UTF-8">
<meta name = "viewport" content="wdth=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>



<!-- Page content -->
<div class="w3-content" style="width: max-width:2000px;margin-top:46px">

 <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		
	<!-- Your account info -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="accountinfo">
    <h2 class="w3-wide">Your Account</h2>
    <p class="w3-opacity"><i>Your account information</i></p>

<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
	<?php 
		if ($error_input > 0) 
		{
			echo $errormsg;
		}

	?>
	
	</div>
	<p class="w3-justify">
	<div class="w3-container">
	<ul class="w3-ul w3-card-4">
	
	    <li class="w3-bar">
      <!-- <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span> -->
      <img src="resources/images/icons/sharp_assignment_ind_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small w3-center" style="width:85px">
      <div class="w3-bar-item" style="width:150px">
        <span class="w3-large">
					<input class="w3-input w3-center" type="text" name="username" value="<?php echo $username;?>" disabled>
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">username</span>
      </div>
			<div class="w3-bar-item" style="width:150px">
        <span class="w3-large">
					<input class="w3-input w3-center" type="text" name="paxid" value="<?php echo $paxid;?>" disabled>
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">passenger id</span>
      </div>
		<div class="w3-bar-item" style="width:150px">
        <span class="w3-large">
					<input class="w3-input w3-center" type="text" name="paxgender" value="<?php echo $paxgender;?>">
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">gender</span>
      </div>
			<div class="w3-bar-item" style="width:150px">
        <span class="w3-large">
					<input class="w3-input w3-center" type="text" name="paxdob" value="<?php echo $paxdob;?>">
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">date of birth</span>
      </div>
		
    </li>
		<br>
		
	 <li class="w3-bar">
     <!--<span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span> -->
      <img src="resources/images/icons/sharp_account_circle_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small w3-center" style="width:85px">
    <div class="w3-bar-item" style="width:200px">
       <span class="w3-large">
					<input class="w3-input w3-center" type="text" name="firstname" value="<?php echo $firstname;?>">
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">first name</span>
			</div>
			
			<div class="w3-bar-item" style="width:200px">
        <span class="w3-large">
					<input class="w3-input w3-center" type="text" name="middlename" value="<?php echo $middlename;?>">
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">middle name</span>
			</div>
		<div class="w3-bar-item" style="width:200px">
				<input class="w3-input w3-center" type="text" name="lastname" value="<?php echo $lastname;?>">
					<span class="w3-large"></span><br>
        <span class="w3-small w3-opacity" style="height:30px">last name</span>
			</div>	
    </li>
		<br>
	
	
		<li class="w3-bar">

			<div class="w3-bar-item" style="width:75px">
				<img src="resources/images/icons/sharp_apps_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small w3-center" style="width:70px">
      </div>
			<div class="w3-bar-item" style="width:180px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="pasno" value="<?php echo $pasno;?>"></span><br>
        <span class="w3-small w3-opacity" style="height:30px">Passport Number</span>
      </div>
      <div class="w3-bar-item" style="width:160px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="pascountry" value="<?php echo $pascountry;?>"></span><br>
        <span class="w3-small w3-opacity" style="height:30px">Passport Country</span>
      </div>
      <div class="w3-bar-item" style="width:130px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="pasissuedate" value="<?php echo $pasissuedate;?>"></span><br>
        <span class="w3-small w3-opacity" style="height:30px">Issue Date</span>
      </div>
      <div class="w3-bar-item" style="width:130px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="pasexpdate" value="<?php echo $pasexpdate;?>"></span><br>
        <span class="w3-small w3-opacity" style="height:30px">Exp Date</span>
      </div>
		</li>

	
			 <li class="w3-bar">

   <img src="resources/images/icons/sharp_location_city_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small w3-center" style="width:85px">
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="paxaddress" value="<?php echo $paxaddress;?>"></span><br>
        <span class="w3-small w3-opacity" style="height:30px">street address</span>
      </div>
      <div class="w3-bar-item" style="width:150px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="paxcity" value="<?php echo $paxcity;?>"></span><br>
        <span class="w3-small w3-opacity" style="height:30px">city</span>
      </div>
      <div class="w3-bar-item" style="width:100px">
        <span class="w3-large">
				<input class="w3-input w3-center w3-medium" type="text" name="paxstate" value="<?php echo $paxstate;?>"></span><br>
        <span class="w3-small w3-opacity" style="height:30px">state</span>
      </div>
			 <div class="w3-bar-item" style="width:100px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="paxcountry" value="<?php echo $paxcountry;?>">
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">country</span>
      </div>
		</li>

			
		<li class="w3-bar">

    <img src="resources/images/icons/sharp_call_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small w3-center" style="width:85px">
      <div class="w3-bar-item" style="width:75px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="paxcountrycode" value="<?php echo $paxcountrycode;?>">
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">country code</span>
      </div>
			 <div class="w3-bar-item" style="width:75px">
					<span class="w3-large">
						<input class="w3-input w3-center w3-medium" type="text" name="paxareacode" value="<?php echo $paxareacode;?>">
					</span><br>
        <span class="w3-small w3-opacity" style="height:30px">area code</span>
      </div>
			<div class="w3-bar-item" style="width:150px">
				<span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="paxphone" value="<?php echo $paxphone;?>">
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">phone Number</span>
      </div>
      <div class="w3-bar-item" style="width:250px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="paxemail" value="<?php echo $paxemail;?>">
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">e-mail</span>
      </div>
		</li>
			
	    	
	 <li class="w3-bar">

     <img src="resources/images/icons/sharp_local_hospital_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small w3-center" style="width:85px">
      <div class="w3-bar-item" style="width:150px">
        <span class="w3-large">
					<input class="w3-input w3-center w3-medium" type="text" name="paxcontname" value="<?php echo $paxcontname;?>">
				</span><br>
				<span class="w3-small w3-opacity" style="height:30px">emergency contact</span>
      </div>
		 <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"> 
				<input class="w3-input w3-center w3-medium" type="text" name="paxcontphone" value="<?php echo $paxcontphone;?>">
				</span><br>
				<span class="w3-small w3-opacity" style="height:30px">emergency number</span>
      </div>
      <div class="w3-bar-item" style="width:250px">
        <span class="w3-large">
				<input class="w3-input w3-center w3-medium" type="text" name="paxcontemail" value="<?php echo $paxcontemail;?>">
				</span><br>
        <span class="w3-small w3-opacity" style="height:30px">emergency email</span>
      </div>
		</li>


  </ul>
	</div>
	</p>
	</div>
	
	<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        
				<p><button class="w3-button w3-round w3-block w3-medium w3-black w3-section w3-padding" style="width:30%; display: block; margin-left: auto; margin-right: auto;" type="submit" name="button_update">update</button></p>
				<p><button class="w3-button w3-round w3-block w3-medium w3-black w3-section w3-padding" style="width:30%; display: block; margin-left: auto; margin-right: auto;" type="reset" name="button_update">reset</button></p>
				<p><button class="w3-button w3-round w3-block w3-medium w3-black w3-section w3-padding" style="width:30%; display: block; margin-left: auto; margin-right: auto;" type="submit" name="button_update">cancel</button></p>
				
     </div>

	

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<?php
    

if (isset($_POST['button_update']))
  {
	

	
	if ($error_input == 0)
	{		
	
	$sqlupdatepax = "UPDATE PASSENGER SET PAX_FIRSTNAME ='$firstname', PAX_MIDDLENAME = '$middlename', PAX_LASTNAME = '$lastname', PAX_PASSPORT = '$pasno', PAX_PASSPORTCOUNTRY ='$pascountry', PAX_EXPDATE='$pasexpdate', PAX_ISSUEDATE='$pasissuedate', PAX_BIRTHDATE='$paxdob', PAX_GENDER = '$paxgender',PAX_ADDRESS='$paxaddress',PAX_CITY='$paxcity', PAX_STATE='$paxstate',PAX_COUNTRY='$paxcountry',PAX_EMAIL='$paxemail',PAX_COUNTRYCODE='$paxcountrycode',PAX_AREACODE='$paxareacode',PAX_PHONE='$paxphone',PAX_CONTACTINFONAME='$paxcontname',PAX_CONTACTEMAIL='$paxcontemail',PAX_CONTACTPHONE='$paxcontphone',PAX_IMAGE='' WHERE USERNAME = '$username'";
	$conn -> query($sqlupdatepax);	
	header("location: userpage.php");

		}
		}
		
		
if (isset($_POST['button_cancel']))
    {
	echo "PRESSED CANCEL". "<br>";
	header("location: userpage.php");
	exit();
    }
		
?>



	</form>

	
<!-- End Page Content -->
</div>


</body>


<?php
include "footer.php";
?>
</html>