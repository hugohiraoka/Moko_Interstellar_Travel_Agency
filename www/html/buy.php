<!DOCTYPE html>

<?php
ob_start();
include "header_user.php";
include_once "dbconfig.php";
session_start();

		$count=0;
		$sqldest = "SELECT * FROM DESTINATION";
		$resultdest = $conn->query($sqldest);

		if ($resultdest->num_rows >0) 
		{
		
			while($row = $resultdest->fetch_assoc())
			{	
			//	$destid = $row["DEST_ID"];
			//	$destname = $row['DEST_NAME'];
			//	$destfare = $row['DEST_FARE'];
			//	$desttype= $row["DEST_TYPE"];
			//	$destsystem= $row["DEST_SYSTEMBELONG"];
			//	$destdistance= $row["DEST_DISTFROMEARTH"];
			//	$destdesc= $row["DEST_DESCRIPTION"];
			//	$destimg1 = $row["DEST_IMAGE1"];
			//	$destimg2 = $row["DEST_IMAGE2"];
			//	$destimg3 = $row["DEST_IMAGE3"];
			//	++$count;
			//	$destination = array(array($destid,$destname,$destfare,$desttype,$destsystem,$destdistance,$destdesc,$destimg1,$destimg2,$destimg3));
			}

		}
?>

<html>
<title>Buy your Trip</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<br>





<div class="w3-container w3-teal">
<h1>Destinations</h1>
</div>

<div class="w3-content">

<?php
$planet = 3;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

 <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_23.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_alpha">Visit <?php echo " ".$destname;?></button></p>
</div>
<?php if (isset($_POST['btn_alpha']))
{
	
	
}
?>

</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_40.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_45.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
	</div>
	</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_15.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_16.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>



<?php
$planet  += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_36.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>




<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_37b.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>


<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_32a.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
	</div>
	</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_007.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_17b.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>


<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="
resources/images/planets/planet_46b.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
	</div>
	</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>



<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_43.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_44.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>


<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_39a.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
	</div>
	</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_35b.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_26.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>


<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_29a.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
	</div>
	</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>


<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="
resources/images/planets/planet_27.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>


<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="
resources/images/planets/planet_27b.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
	</div>
	</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>



<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_21b.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_22.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>


<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_23.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
	</div>
	</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_24b.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_39b.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>


<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_6b.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
	</div>
	</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>




<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_11a.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
	</div>
	</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_40.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
</div>
	<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>

<?php
$planet += 1;

	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	
	if ($resultd01->num_rows >0) 
	{
	$row = $resultd01->fetch_assoc(); 
	
	$destid 		= $row['DEST_ID'];
	$destname		= $row['DEST_NAME'];
	$destfare		= $row['DEST_FARE'];
	$desttype		= $row['DEST_TYPE'];
	$destsyst		= $row['DEST_SYSTEMBELONG'];
	$destdist		= $row['DEST_DISTFROMEARTH'];
	$destdesc		= $row['DEST_DESCRIPTION'];
	$destimg1 	= $row['DEST_IMAGE1'];
	$destimg2 	= $row['DEST_IMAGE2'];
	$destimg3 	= $row['DEST_IMAGE3'];
	}

	//$sqlr = "SELECT * FROM REVIEWS WHERE DEST_ID = '$count'";
	//$resultr = $conn-> query($sqlr);
	
	//$count2 = 0;
	/*
	if ($resultr->num_rows >0) 
		{
		
			while($row = $resultr->fetch_assoc())
			{	
				$review = $row['REVIEW_RATE'];
				$total += $review;
				++$count2;
			}
		}
	$totav = $total/$count2;
*/	?>

<div class="w3-row w3-margin">
	<div class="w3-third">
		<img src="resources/images/planets/planet_45.jpg" style="width:100%;min-height:240px">
	</div>
	<div class="w3-twothird w3-container">
	
	<div class="w3-container">
  
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Destination </th>
        <td><?php echo $destname;?></td>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>Type</th>
      <td><?php echo $desttype;?></td>
    <tr class="w3-hover-blue">
      <th>System </th>
      <td><?php echo $destsyst;?></td>
    </tr>
    <tr class="w3-hover-black">
      <th>Distance</th>
      <td><?php echo $destdist. " hours";?></td>
    </tr>
    <tr class="w3-hover-text-green">
      <th>Fare</th>
      <td><?php echo $destfare. " bitcoins"?></td>
    </tr>
  </table>
	<p>
		<?php echo $destdesc;?>
		</p>
			
	</div>
	</div>
		<div class="w3-container">
	<p><button class="w3-button w3-block w3-teal" name="btn_buy">Visit <?php echo " ".$destname;?></button></p>
</div>
</div>




</div>

  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>




</form>

</div>
<?php
if (isset($_POST['btn_alpha']))
{
	
}
?>
</body>
</html>