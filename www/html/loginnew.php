<?php
include_once "dbconfig.php";
include "functions.php";
ob_start();
//include "header.php";
session_start();

$entry_error=0;
$errormessage = "";
$uppercase 		= preg_match('@[A-Z]@', $password);
$lowercase 		= preg_match('@[a-z]@', $password);
$number    		= preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["username"])) {
  	$errormessage = "Username is required";
		$entry_error = 1;	
  } else {
   	$username = test_input($_POST["username"]);
		if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
			$errormessage="Only letters, and numbers allowed";
			$entry_error = 1;
		} else {
			$entry_error = 0;
	}}

	if (empty($_POST["useremail"])) {
		$errormessage = "E-mail is required";
		$entry_error = 1;
	} else {
   	$useremail = test_input($_POST["useremail"]);
		if (!filter_var($useremail,FILTER_VALIDATE_EMAIL)){
			$errormessage = "Invalid email format";
			$entry_error = 1;
		} else {
			$entry_error = 0;
		}}

	if (empty($_POST["password1"])) {
    $errormessage = "Password is required";
		$entry_error = 1;
	} else {
    $password1 = test_input($_POST["password1"]);
		if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#",$password1)){
		$errormessage="Only letters, numbers and special characters allowed";
		$entry_error = 1;
		} else {
			$entry_error = 0;
	}}

if (empty($_POST["password2"])) {
    $errormessage = "Retype Password is required";
		$entry_error = 1;
	} else {
    $password2 = test_input($_POST["password2"]);
		if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#",$password2)){
		$errormessage="Only letters, numbers and special characters allowed";
		$entry_error = 1;
		} else {
			$entry_error = 0;
	}}

}


?>

<html>
<head>
<meta charset="UTF-8">
<meta name = "viewport" content="wdth=device-width, initial-scale=1.0">
<title>Welcome</title>
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="styles.css">

</head>

<body>

<div class="w3-container">

	<!--<script type="text/javascript"> 
    $(document).ready(function(){
        $('#id01').modal('show');
    });
  </script> 
	-->
<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Login</button>

 <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="resources/images/users/profile_0.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
	
		<form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <div class="w3-section">
          <label class="w3-text-teal" style="width:360px; display: block; margin-left: auto; margin-right: auto;"><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" style="width:360px; display: block; margin-left: auto; margin-right: auto;" type="text" placeholder="Enter Username" name="username" >
					<label class="w3-text-teal" style="width:360px; display: block; margin-left: auto; margin-right: auto;"><b>Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" style="width:360px; display: block; margin-left: auto; margin-right: auto;" type="text" placeholder="Enter E-mail" name="useremail" >
          <label class="w3-text-teal" style="width:360px; display: block; margin-left: auto; margin-right: auto;"><b>Password</b></label>
          <input class="w3-input w3-border w3-margin-bottom" style="width:360px; display: block; margin-left: auto; margin-right: auto;" type="password" placeholder="Enter Password" name="password1" >
				<label class="w3-text-teal" style="width:360px; display: block; margin-left: auto; margin-right: auto;"><b>Retype Password</b></label>
      		<input class="w3-input w3-border w3-margin-bottom" style="width:360px; display: block; margin-left: auto; margin-right: auto;" type="password" placeholder="Retype Password" name="password2" >
					<p><button class="w3-button w3-round w3-block w3-medium w3-teal w3-section w3-padding" style="width:20%; display: block; margin-left: auto; margin-right: auto;" type="submit" name="button_signUp">Sign Up</button></p>
        
				</div>
				<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
					
				</div>
				<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
					<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red" name="button_cancel">Cancel</button>
				</div>

</div>

				<script>
            $(function() 
              {
                $("#show").on("click",function(){var x = $("#password1");
                if (x.attr('type') === "password1") 
                {
                    x.attr('type','text');
                    $(this).removeClass('fa fa-eye-slash')
                    $(this).addClass('fa fa-eye')
                } 
                else 
                {
                x.attr('type','password1');
                $(this).removeClass('fa fa-eye')
                $(this).addClass('fa fa-eye-slash')
                } // End of if
                })// End of click event
            });
					</script>
</form>

<?php
if (isset($_POST['button_signUp'])) {
	
	if ($entry_error > 0){
		$lenusername = strlen(utf8_decode($username));

		if ($lenusername > 5) {
			$statusmsg = "OK. Username length is at least 6 characters.";
									
			if ($usermame != $useremail) {
				$statusmsg = "Ok. username and useremail are not the same.";
		
				$sql = "SELECT * FROM USERS WHERE USERNAME='$username' OR EMAIL='$useremail'";
				$result = $conn->query($sql);				
						
				 if (!($result-> num_rows >0)) {
						$statusmsg = "OK. The username or email you chose is available.";
						
						$lenpassword1 = strlen(utf8_decode($password1));
							
							if ($password1 == $password2) {
							$statusmsg = "OK. Password1 and Password2 are the same.";
							$password = $password1;

								//check password strength		
								if($uppercase || $lowercase || $number || $specialChars || strlen($password) > 7) {
									
									$hashpassword = password_hash($password, PASSWORD_DEFAULT);
								
									//insert new record
								
									$sqlnewuser = "INSERT INTO USERS (USERNAME, PASSWORD, PASSWORD_HASH, EMAIL) VALUES ('$username', '$password', '$hashpassword', '$useremail')";
									$conn->query($sqlnewuser);
								
									if ($conn) {
										$statusmsg = "Record added successfully.";
										$_SESSION['uname'] = $username;
										$_SESSION['useremail'] = $useremail;
										header ("location: newaccount.php");
									}	else {
										$statusmsg = "Error. Record could not be added.";
									}
								}
								else 
								{
									$statusmsg = "Error. Password must be at least 8 characters long, include at least one upper case letter, one number and one special character.";
									$_SESSION['statusmsg']=$statusmsg;
									header ("location: error.php");							
								}
							} else {							
							$statusmsg = "Error. Password 1 and 2 are not the same.";
							$_SESSION['statusmsg']=$statusmsg;
							header ("location: error.php");
						}
				} else {
				$statusmsg = "Error. Username or Email already exists.";
				$_SESSION['statusmsg']=$statusmsg;
				header ("location: error.php");
				} 
				
			} else {
				$statusmsg = "Error. Username and email are the same.";
				$_SESSION['statusmsg']=$statusmsg;
				header ("location: error.php");
			}
		}	else {
			$statusmsg = "Error. Username lenght must be at least 6 characters long";
			$_SESSION['statusmsg']=$statusmsg;
			header ("location: error.php");
			}
	} else {
			$statusmsg = "Error. There are errors in the input of data";
			$_SESSION['statusmsg']=$statusmsg;
			header ("location: error.php");
	
	}
}
 
if (isset($_POST['button_cancel']))
    {
			echo "PRESSED CANCEL". "<br>";
			header("location: index.php");
			exit();
    }
?>

</body>
</html>