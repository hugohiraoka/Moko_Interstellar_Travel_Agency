<?php
include_once "dbconfig.php";
include "functions.php";
ob_start();
session_start();

echo "HELLO";
$sql = "SELECT USERNAME, PASSWORD, PASSWORD_HASH, EMAIL FROM USERS WHERE USERNAME = 'batman';";
$result = $conn->query($sql);

if ($result->num_rows >0) 
{

	while($row = $result->fetch_assoc())
	{
		
		$password			= $row['PASSWORD'];
		$username			= $row['USERNAME'];
				
		$hashpassword = password_hash($password, PASSWORD_DEFAULT);

		

		echo "Hashing password for ".  $username . " ---> " . $hashpassword;

		//$sqlupdate = "UPDATE USERS SET PASSWORD_HASH = $hashpassword WHERE USERNAME = $username;
		//$resultupdate = $conn->query($sqlupdate);
	
	}	
}

?>


