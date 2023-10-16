<!-- Hugo Hiraoka -->
<?php
include_once "dbconfig.php";
include "functions.php";
//flush everything
session_unset();
session_destroy();

ob_start();
//include "header.php";
session_start();

$loginentry_error = "";
$username = $password = $loginentry = "";
$username_error = $password_error = "";
$entry_error = "";
$login_msg ="";
$msgflag='0';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["loginentry"])) 
  {
   	$loginentry_error = "Username or Email is required";
		$entry_error ="1";	
  } 
  else 
  {
    $loginentry = test_input($_POST["loginentry"]);
		echo "LOGINENTRY = ".$loginentry;
		if (!preg_match("/^[a-zA-Z0-9+&@#!\|$%^*()_-={}[]?/><,.:;'",$loginentry))
		{
			$username_error="Only letters, numbers and special characters are allowed";
			$entry_error="1";
		}
		else
		{
			$_SESSION['loginentry']=$loginentry;
			echo "LOGINENTRY = ".$loginentry;
		}
  }

	if (empty($_POST["password"])) 
  {
    $password_error = "Password is required";
		$entry_error="1";
  } 
  else 
  {
    $password = test_input($_POST["password"]);
		echo "PASSWORD = ".$password;
		if (!preg_match("/^[a-zA-Z0-9+&@#!\|$%^*()_-={}[]?/><,.:;'",$password))
		{
			$password_error="Only letters, numbers and special characters allowed";
			$entry_error="1";
		}
  }
}

$sql = "SELECT USERNAME, PASSWORD, PASSWORD_HASH, EMAIL FROM USERS WHERE USERNAME ='$loginentry' OR EMAIL ='$loginentry'";
$result = $conn->query($sql);

$msgflag='1';

$_SESSION['loginemail'] = $row['EMAIL'];


//if username and password is found in table USER
if ($result->num_rows >0) 
{
	$row = $result->fetch_assoc(); 
	
	echo "username from query: ". $row['USERNAME'];
	echo "password from query: ". $row['PASSWORD'];
	echo "email from query: ". $row['EMAIL'];

	if ($row['USERNAME']==$loginentry)
	{
		$username = $row['USERNAME'];
		$useremail = $row['EMAIL'];
		$_SESSION['uname']= $username;
		echo "username - session: ". $_SESSION['uname'];
	}
	
	if ($row['USER_EMAIL'] == $loginentry)
	{
		$email = $row['EMAIL'];
		$username = $row['USERNAME'];
		$_SESSION['useremail'] = $email;
		echo "username - email: ". $_SESSION['useremail'];
	}

	
    if (password_verify($password,$row['PASSWORD']))	
	   {
        $login_msg = "PASSWORD OK";
        $_SESSION['login_msg']=$login_msg;
				echo $_SESSION['login_msg'];
				header("location: userpage.php");	
	   }
    else
	   {
		$login_msg = "Username/Password invalid. Please try again.";
        $_SESSION['login_msg'] = $login_msg;
        echo "password is invalid--". $login_msg;
        //header("location: login.php");    
	   }
}
else
{
	$login_msg = "Username/Password invalid. Please try again.";
    $_SESSION['login_msg'] = $login_msg;
    echo "username is invalid --". $login_msg;
    //header("location: login.php");
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

<script type="text/javascript"> 
    $(document).ready(function(){
        $('#id01').modal('show');
    });
 </script> 

<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Login</button>


 <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="resources/images/users/profile_0.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
	
		<form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <div class="w3-section">
          <label class="w3-text-teal" style="width:360px; display: block; margin-left: auto; margin-right: auto;"><b>Username or Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" style="width:360px; display: block; margin-left: auto; margin-right: auto;" type="text" placeholder="Enter Username" name="loginentry" >
          <label class="w3-text-teal" style="width:360px; display: block; margin-left: auto; margin-right: auto;"><b>Password</b></label>
          <input class="w3-input w3-border" style="width:360px; display: block; margin-left: auto; margin-right: auto;" type="password" placeholder="Enter Password" name="password" >
					<span id="show" class="fa fa-eye-slash"> </span>
         
				 <p><button class="w3-button w3-round w3-block w3-medium w3-black w3-section w3-padding" style="width:30%; display: block; margin-left: auto; margin-right: auto;" type="submit" name="button_signIn">Sign In</button></p>
					
					<p><button class="w3-button w3-round w3-block w3-medium w3-teal w3-section w3-padding" style="width:20%; display: block; margin-left: auto; margin-right: auto;" type="submit" name="button_signUp">Sign Up</button></p>
					
          <p><input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me</p>
        </div>
    
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red" name="button_cancel">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

</div>

<!--</form>	
-->
<div class = "row">
				<span id="show" class="fa fa-eye-slash"> </span>
            </div>

           <script>
            $(function() 
              {
                $("#show").on("click",function(){var x = $("#password");
                if (x.attr('type') === "password") 
                {
                    x.attr('type','text');
                    $(this).removeClass('fa fa-eye-slash')
                    $(this).addClass('fa fa-eye')
                } 
                else 
                {
                x.attr('type','password');
                $(this).removeClass('fa fa-eye')
                $(this).addClass('fa fa-eye-slash')
                } // End of if
                })// End of click event
            });
        </script>
                
                                
                    <div class="row">
                        <h5><?php //echo $login_msg ?></h5>
                    </div>
         
	</div>
<?php
    

if (isset($_POST['button_signIn']))
    {
	echo "PRESSED SING IN BTN";
	//or otherwise add here an action. If no error, log in. If error, deny
    }

if (isset($_POST['button_signUp']))
    {
	echo "PRESSED SIGN UP". "<br>";
	header("location: loginnew.php");
	exit();
    }
		
		
if (isset($_POST['button_cancel']))
    {
	echo "PRESSED CANCEL". "<br>";
	header("location: index.php");
	exit();
    }
?>
</div>

</form>
    <!--
<div class="flex-container-login">
    <div>
        <h3 style="font-family: verdana; font-size: 30%; color: white;">Prototype 1</h3>
    </div>
</div>-->
    <?php
    include "footer.php"
        ?>
</body>
</html>
