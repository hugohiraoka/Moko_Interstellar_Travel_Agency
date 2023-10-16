<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);


//function imageUpload()
//{
/*	
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
*/

// Check if image file is a actual image or fake image
/*
if(isset($_POST["submit_1"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
*/

// Check if file already exists
/*if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

*/
	
function validateDate($valdate) {
	$mydate = explode("/",$valdate);
	$dateOK = "1";
	if(count($mydate) !=3) 
	{
		$dateOK="0";
		return $dateOK;
		//throw new Exception('Invalid date format!');
	}
	$date_month = $mydate[0];
	$date_day =$mydate[1];
	$date_year = $mydate[2];
		
	if (!checkdate($date_month,$date_day,$date_year))
	{
		$dateOK="0";
		//throw new Exception($mydate . 'is invalid');
	}
	return $dateOK;
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


/* 
function upimage(){
	
<form action ="functions.php" method="post" enctype="multipart/form-data">
  <?php echo "Select image to upload: "?>;
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
}
*/


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
   // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
   // echo "File is not an image.";
    $uploadOk = 0;
  }
}

echo $target_file;

// Check if file already exists
if (file_exists($target_file)) {
  //echo "Sorry, file already exists.";
  $uploadOk = 0;
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 15000000) {
 // echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
   // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
   // echo "Sorry, there was an error uploading your file.";
  }
}


?>


