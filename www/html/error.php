<?php
session_start();
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
<div class="w3-content" style="max-width:2000px;margin-top:46px">
 <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="accountinfo">
    
<?php echo "ERROR! ". $_SESSION['statusmsg']; ?>
</div>
</div>
</body>
</html>