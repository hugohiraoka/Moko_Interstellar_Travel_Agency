<!DOCTYPE html>
<?php
ob_start();
include "header_user.php";
include_once "dbconfig.php";
//include "destinations.php";
session_start();

$username = $_SESSION['uname'];
$useremail = $_SESSION['useremail'];

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
		
		$paxid = $row['PAX_ID'];
		$_SESSION['paxid'] = $paxid;
		$firstname = $row['PAX_FIRSTNAME'];
		$_SESSION['firstname']= $firstname;
		$middlename = $row['PAX_MIDDLENAME'];
		$_SESSION['middlename']= $middlename;
		$lastname = $row['PAX_LASTNAME'];
		$_SESSION['lastname']= $lastname;
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
		$_SESSION['paxareacode']= $paxareacode;
		$paxphone = $row['PAX_PHONE'];
		$_SESSION['paxphone']= $paxphone;
		$paxcontname = $row['PAX_CONTACTINFONAME'];
		$_SESSION['paxcontname']= $paxcontname;
		$paxcontemail = $row['PAX_CONTACTEMAIL'];
		$_SESSION['paxcontemail']= $paxcontemail;
		$paxcontphone = $row['PAX_CONTACTPHONE'];
		$_SESSION['paxcontphone']= $paxcontphone;
		$profimg = $row['PAX_IMAGE'];
		$_SESSION['paxprofimg']= $paxprofimg;
	}
}



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

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="resources/images/cover/cover_004.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     		<h3> <div class="w3-panel w3-leftbar w3=light-grey">
						<p class="w3-large w3-serif">
						<i>"When the cards all fold, and the saints we see, are all made of gold..."</i></p>
						<p><b>Imagine Dragons<b></p></div></h3>  
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="resources/images/general/faraway.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    		<h3> <div class="w3-panel w3-leftbar w3=light-grey">
					<p class="w3-large w3-serif">
					<i>"They say oh my god I see the way you shine.."</i></p>
					<p><b>Dance Monkey.</b></p></div></h3>  
    </div>
    </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="resources/images/general/orange-nebula-near-a-golden-planet-39039-1920x1080.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
					<h3> <div class="w3-panel w3-leftbar w3=light-grey">
					<p class="w3-large w3-serif">
					<i>"Nobody cried, Nobody even noticed."</i></p>
					<p><b>Billie Eilish</b></p></div></h3>  
    </div>    
    </div>

	<div class="mySlides w3-display-container w3-center">
    <img src="resources/images/general/44279.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     <h3> <div class="w3-panel w3-leftbar w3=light-grey">
					<p class="w3-large w3-serif">
					<i>"Just Keep swimming."</i></p> 
					<p><b>- Nemo</b></p></div></h3> 
    </div>
  </div>

	<div class="mySlides w3-display-container w3-center">
    <img src="resources/images/general/hdwallpaperwidescreenspace6.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     <h3> <div class="w3-panel w3-leftbar w3=light-grey">
					<p class="w3-large w3-serif">
					<i>"Houston we have a problem."</i></p>
					<p><b>Apollo 13</b></p></div></h3>      
    </div>
  </div>

</div>

<!-- Before your Trip -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="before">
    <h2 class="w3-wide">Before Your Trip</h2>
    <p class="w3-opacity"><i>Prepare Ahead for the Trip of your lifetime</i></p>
    
		<p class="w3-justify">We want your trip to be the best experience ever. To fully enjoy your trip, you must prepare ahead in advance. We recommend travellers to begin preparations at least 30 days before their first trip, and 7 days before subsequent trips. The length of time you need to prepare before your trip will depend on several factors.</p>	
		<br>
		<img src= "resources/images/general/planet_53d.jpg" alt="Prepare" style width="100%">
		<br>
		<br>
		<p class="w3-justify">Physical Condition. If you can't climb a flight of staircases and/or have difficulties walking for more than 2 blocks, you really will need more than 30 days to prepare before your trip.  Our offices are located in the top of the Pyramid tower in San Francisco, and the elevator does not reach the top floor because of the narrowness of the building. So to reach our offices, you will need to climb the last 4 stories by yourself. And heck, we really cannot imagine you arriving to our offices without walking at least a couple blocks. So without physical preparation, your trip would end before it starts.</p>	
		<br>
		
		<img src= "resources/images/general/planet_53e.jpg" alt="you travel" style width="100%">
		<br>
		<br>
		<p class="w3-justify">Family. If you have a very big family, you may need more time to say the farewells to them. Because some of our trips may cross the boundaries of the speed of light, time may dilate and when - if - you return to Earth, all your loved ones may no longer exist.</p>	

		<p class="w3-justify"> We recommend you begin preparations well before your trip date, as soon you embark on the decision of your trip, consider all the factors that may be loose end. Afterall, you may not know when you will be returning to Earth.</p>
		<br>
		
	</div>

<!-- The day of Your Trip D-Day-->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="dday">
    <h2 class="w3-wide">The D-Day is here</h2>
    <p class="w3-opacity"><i>The Day is finally here. Are you ready?</i></p>
    
		<p class="w3-justify">The day of your trip, come to the Transatlantic Building in downtown San Francisco, at least 3 hours before your trip. Yes, its the iconic, pyramidal shaped white building in the financial center right next to China town.</p>	
		<p class="w3-justify">We suggest before you drop by for your trip, to stop at some of the great Chinese food restaurants in Chinatown. You may have dim-sum, mapo-tofu, sichuan chicken, dumplings, or anything else you may want. Afterall, this may be the last time you experience Chinese food, or better say, any food at any restaurant, ever.</p>
		<br>
		<img src= "resources/images/general/headquarters.png" alt="the office TV show" style width="100%">
		<br>
		<br>
		<p class="w3-justify">When you arrive to the building, take one of the elevators to floor 60. When it finally stops, walk to floor 65, and you will arrive to our office, No. 65-000.  Here, your experience will begin. First, we will seal your suitcases, fit you with all the necessary gear for your trip, and brief you about the destination you are about to visit. </p>	
		<p class="w3-justify">And then, you be given the MokoSpace space agent device and be invited to window number one, from where you will jump into intergalactic, interstellar, interplanetary space. Don't worry, your furry babies and your baggage will go with you.</p>
		<br>
		<img src= "resources/images/general/49862daed3fe4a38b911f128c307b461.jpg" alt="Yup we are here" style width="100%">
		<br>
		<br>
	</div>

<!-- During Your Trip -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="during">
    <h2 class="w3-wide">During Your Trip</h2>
    <p class="w3-opacity"><i>The experience of the lifetime.</i></p>
    
		<p class="w3-justify">While you travel to your final destination, simply relax and enjoy the trip. If you are travelling to an interstellar location, you may travel at the speed of light or greater than the speed of light, defying quantum physics. In that case, you and your fur babies will be wearing compact, super protective, ultra resistant, special clothing so when you arrive at the other side, you are not missing any body parts.</p>	
		<br>
		<img src= "resources/images/general/Space-Tourism.jpg" alt="Space " style width="100%">
		<br>
		<br>
		<p class="w3-justify">If you go through a wormloop, do not worry..You may come across stars, comets, asteroids, planets, space ships, UFOs, cosmic dust, space garbage, and many other things. Just relax and enjoy your trip. </p>	
		<p class="w3-justify">Finally, when you arrive to your final destination, mark the location where you landed with your MOKOSPACE space agent. If you fail to do this, you may have many problems returning back to Earth. In that situation, you will have to contact customer support.</p>	
		<br>
		<img src= "resources/images/general/space-holidays.jpg" alt="somewhere" style width="100%">
		<br>
		<br>
		<p class="w3-justify"> Always follow the guidance of the local authorities, respect the local culture, fauna, flora. Do not loiter, always pick after you and your fur babies.  </p>
	
	</div>

<!-- After your Trip -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="after">
    <h2 class="w3-wide">After Your Trip</h2>
    <p class="w3-opacity"><i>What happens after your Trip</i></p>
    
		<p class="w3-justify">When you return home, you may feel many side effects from your space trip. Some of the side effects may be elongated limbs, shrank head, permanent nausea, blindness, deafness, chronic depression, hallucinations, priapism, memory loss, blood clots, compulsive behaviors, Stevens-Johnson Syndrome, Suicidality, and Death.</p>	
		<br>
		<img src= "resources/images/general/sideeffects_001.png" alt="more side effects" style width="100%">
		<br>
		<br>
		<p class="w3-justify">Suicidality stems back to reports from travellers that claim that space trips could lead to suicidality. Although this is inconclusive, a warning is issued about the increased risk of suicidal thinking and behavior in children, adolescents, and young adults with major depressive disorder and other psychiatric disorders.</p>	
		<br>
		<img src= "resources/images/general/sideffects_002.png" alt="Good Luck" style width="100%">
		<br>
		<br>
		
		<p class="w3-justify">Stevens-Johnson syndrome (SJS) is a rare, life-threatening hypersensitivity reaction of the skin and mucous membranes that may be caused by space traveling. During SJS, large macules rapidly spread and form together, leading to blistering, necrosis, and shedding of the skin. </p>	
		<br>
	
	</div>


<!-- Fur babies -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="furbabies">
    <h2 class="w3-wide">Your fur Babies</h2>
    <p class="w3-opacity"><i>Because they are part of your family</i></p>
    
		<p class="w3-justify">Are you planning to take your dog with you when you travel? Before you start on your to-do list, make sure you ask yourself if traveling is something your dog will enjoy. If your dog isn’t a fan of new places and adventures, he may prefer to stay back with someone to love him in the comfort of his own home. If new adventures aren’t fun for both of you, and if your pet isn’t happy on your trip, neither of you will enjoy the experience. I’ve gained a lot of experience traveling with my dog Maggie over the years. Here’s what you’ll need to know when your dog is your traveling buddy.</p>	
		<br>
		<img src= "resources/images/general/furbaby_003.png" alt="Fur Babies" style width="100%">
		<br>
		<br>
		<p class="w3-justify"> Plan accordingly! I pack a bag of quick, easy-to-grab supplies for road trips such as extra poop bags, an extra leash, a small towel, our vaccination records, and of course, some treats. You want to include pit stops in your road trip for your pet to stretch their legs, catch a ball, and use a restroom. You never know when these pit stops can turn into fun adventures jumping in puddles or walking in the damp grass, so that towel will be handy. </p>	
		<br>
		<img src= "resources/images/general/436044-1544250513-wide_facebook.jpg" alt="Fur Babies" style width="100%">
		<br>
		<br>
		<p class="w3-justify"> Practice beforehand for any situations your pet may encounter. For example, if you will be using a harness or crate in the car for a road trip, do a few shorter practice runs so it’s something familiar and positive. Make sure your pet is not only restrained in the car but traveling in a crash-tested harness or crate by the center for pet safety, a 3rd party company that does crash testing for pet safety. Many items are not only unsafe but could cause more harm acting as a slingshot in an accident. It can also be helpful to review the airport’s pet policies, as well as their pet-relief areas.</p>
		<br>
		<img src= "resources/images/general/furbaby_001.png" alt="More Fur Babies" style width="100%">
				
	</div>


<!-- Section: Baggage -->

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="baggage">
    <h2 class="w3-wide">Baggage</h2>
    <p class="w3-opacity"><i>It seems as though the rules of baggage allowance are ever changing and increasing in complexity.</i></p>
    
		<p class="w3-justify">In fact, recently, some airlines have changed what counts as hand luggage, what qualifies as checked baggage, and how many pieces of each sort that travelers are allowed to take. People are confronted with unexpected situations at the airport, and the shifting restrictions involving the characterization and weight limitations of carry-on bags, checked luggage, and additional baggage have several travelers frantic and frustrated. What’s more, their wallets end up taking a hit too. People board a flight with thinner wallets than they anticipated, and that’s definitely not an ideal start. </p>	
		<br>
		<img src= "resources/images/general/baggage_001.png" alt="baggage" style width="100%">
		<br>
		<br>
		<p class="w3-justify">Throughout the summer, many major airlines updated their domestic and international baggage allowance policies, but no need to worry. We’ve researched over 45 top airlines and we’ll flesh out the latest involving baggage allowance, to include the most common luggage weight allowances for carry-on and checked baggage. That way, you can easily pack your things and go.  </p>	
		<br>
		<img src= "resources/images/general/baggage_002.png" alt="Dont overpack" style width="100%">
		<br>
		<br>
		
		<p class="w3-justify">Remember though always to pack essentials in your carry-on in case you experience a flight delay or any other issues, where you need your stuff. For a flight delay you can claim flight delay compensation, but it could still be important, that you have your important things with you. </p>	
		<br>
		<img src= "resources/images/general/baggage_004.png" alt="Travel light" style width="100%">
		<br>
		
	</div>


<!-- Forbidden Goods -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="forbidden">
    <h2 class="w3-wide">Forbidden Goods</h2>
    <p class="w3-opacity"><i>Things you can't bring or do during your Trip</i></p>
    
		<p class="w3-justify">The Protocol for the Prohibition of the Use in War of Asphyxiating, Poisonous or other Gases, and of Bacteriological Methods of Warfare, usually called the Geneva Protocol, is a treaty prohibiting the use of chemical and biological weapons in international armed conflicts. It was signed at Geneva on 17 June 1925 and entered into force on 8 February 1928. It was registered in League of Nations Treaty Series on 7 September 1929.[4] The Geneva Protocol is a protocol to the Convention for the Supervision of the International Trade in Arms and Ammunition and in Implements of War signed on the same date, and followed the Hague Conventions of 1899 and 1907.  It prohibits the use of "asphyxiating, poisonous or other gases, and of all analogous liquids, materials or devices" and "bacteriological methods of warfare". This is now understood to be a general prohibition on chemical weapons and biological weapons, but has nothing to say about production, storage or transfer. Later treaties did cover these aspects — the 1972 Biological Weapons Convention (BWC) and the 1993 Chemical Weapons Convention (CWC). </p>	
		<br>
		<img src= "resources/images/general/forbidden_001.png" alt="No No" style width="100%">
		<br>
		<br>
		<p class="w3-justify">Animals are not ours to experiment on, eat, wear, use for entertainment, or abuse in any way. Explore this section to learn more about the issues.
		
		Every day in countries around the world, animals are fighting for their lives. They are enslaved, beaten, and kept in chains to make them perform for humans’ “entertainment”; they are mutilated and confined to tiny cages so that we can kill them and eat them; they are burned, blinded, poisoned, and cut up alive in the name of “science”; they are electrocuted, strangled, and skinned alive so that people can parade around in their coats; and worse.<p>

		<p class="w3-justify">The abuse that animals suffer at human hands is heartbreaking, sickening, and infuriating. It’s even more so when we realize that the everyday choices we make—such as what we eat for lunch and the kind of shampoo we buy—may be directly supporting some of this abuse. But as hard as it is to think about, we can’t stop animals’ suffering if we simply look the other way and pretend it isn’t happening.</p>
		<br>
		<img src= "resources/images/general/forbidden_002.png" alt="More No No" style width="100%">
		<br>
		<br>
		<p class="w3-justify">Animals are counting on compassionate people like you to give them a voice and be their heroes by learning about the issues they face and taking action. Each of us has the power to save animals from nightmarish suffering-and best of all, it’s easier than you might think. If you’re ready to join the millions of other compassionate people who are working to create a kinder, better world for animals, learn how animals suffer when used for experimentation, food, entertainment, clothing and the pet-trade. Together, we can make a difference.</p>	
		<br>
		<img src= "resources/images/general/forbidden_003.png" alt="Defintely No" style width="100%">
		<br>
		<br>
</div>


	<!-- DIsclaimer -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="disclaimer">
    <h2 class="w3-wide">Disclaimers</h2>
    <p class="w3-opacity"><i>Liabilities and Responsibilities</i></p>
    
		<p class="w3-justify w3-tiny">MokoSpace is not responsible and liable by any means if your trip does not go accordingly to your expectations. MokoSpace is not responsible for lost goods, acts of God or force manure, or any accident that may cause your death or if you are eternally lost in space. In other words, you agree to travel at your own risk. </p>	
		<p class="w3-justify w3-tiny">If you have any claims you can kindly conduct them through email to <no-claims@iclaimnothing.abc>. We cannot guarantee that you may get a response.  You can also try calling us at +0.(123) 000-0000 at your convenience. All claims have to be made 48 hours before your incident occurs. You must present hard evidence to make your claim (for example, hard evidence would be a video of you during your trip arriving at your destination without your suitcases.</p>	
		<p class="w3-justify w3-tiny">Both parties agree that all claims and litigaton must be conducted by the supreme court of planet X, somewhere in Andromeda. Both parties renounce to any lawsuits conducted through any other court.  </p>	
		<p class="w3-justify  w3-tiny"> You, the traveller, must indemnize MOKOSPACE in the case you give us a bad review. You give all rights to MokoSpace to use, dispose, publish, destroy, copy, distribute, take credit to all your pictures and videos taken during your trip. In the case of no return (lost in space) you grant MOKOSPACE all rights to all your properties and assets.</p>
		
	</div>
	
  
	
	  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT US</h2>
    <p class="w3-opacity w3-center"><i>Questions? Leave us note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> San Francisco, CA<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +415 806 6831<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mokospace@mokospace.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
	
	
	
		<!-- Your Trips -->
	<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="travelhistory">
		<h2 class="w3-wide">Your Trips</h2>
    <p class="w3-opacity"><i>The amazing places you have visited</i></p>
		
		<p class="w3-justify">
		<br>
		<br>
		

		<hr>
		<?php
				print "<pre>";
				printf("%4s", "Trip");		
				printf("%15s", "To");
				printf("%12s", "Left");
				printf("%12s", "Arrived");
				printf("%16s", "System");
				printf("%6s", " ");
				printf("%8s", "Dist");
				printf("%6s", "$");
				printf("%5s", "*");
				printf("%10s\n", "Status");	
				printf("____________________________________________________________________________________________________");
				print "<pre>";

		?>

			
	<?php
				
		$sqltrip = "SELECT * FROM ((TRIPRECORD INNER JOIN REVIEWS ON TRIPRECORD.TRIP_ID = REVIEWS.TRIP_ID) INNER JOIN DESTINATION ON DESTINATION.DEST_ID = TRIPRECORD.DEST_ID) WHERE TRIPRECORD.PAX_ID = '$paxid'";
		$resultrip = $conn->query($sqltrip);

			

		if ($resultrip->num_rows >0) 
		{
		
			while($row = $resultrip->fetch_assoc())
			{	

			
				$destname = $row['DEST_NAME'];
				$desttype = $row['DEST_TYPE'];
				$destsyst	= $row['DEST_SYSTEMBELONG'];
				$destdist	= $row['DEST_DISTFROMEARTH'];
				$revdate	= $row['REVIEW_DATE'];
				$revrate	= $row['REVIEW_RATE'];
				$revcomm	=$row['REVIEW.DEST_NAME'];
				$tripid		=$row['TRIP_ID'];
				$tripdate	=$row['TRIP_DEPARTURE'];
				$tripret	=$row['TRIP_RETURN'];
				$triprtn	=$row['TRIP_RETURNED'];
				$tripflag	=$row['TRIP_TRIPFLAG'];
				$tripstat	=$row['TRIP_CURRSTATUS'];
				$tripfare=$row['DEST_FARE'];
				++$countrips;
				$expenses += $tripfare;
				$reviews += $revrate;

					print "<pre>";
					printf("%4s", $tripid);		
					printf("%18s", $destname);
					printf("%12s", $tripdate);
					printf("%12s", $tripret);
					printf("%20s", $destsyst);
					printf("%6u", $destdist);
					printf("%8u", $tripfare);
					printf("%4s", $revrate);
					printf("%12s", $tripstat);
					print "<pre>";
					
			}
		}
/*				$destid = $row['DEST_ID'];
				
				$sqldest = "SELECT * FROM DESTINATION WHERE DEST_ID = '$destid'";
				$resultdest = $conn->query($sqldest);
				
				while($row = $resultdest->fetch_assoc())
				{
					
					

					
					$destname = $row['DEST_NAME'];
					$desttype = $row['DEST_TYPE'];
					$destsyst = $row['DEST_SYSTEMBELONG'];
					$destdist = $row['DEST_DISTFROMEARTH'];
					$destfare = $row['DEST_DESCRIPTION'];


					$sqltrip = "SELECT * FROM TRIPRECORD WHERE DEST_ID = '$destid'";
					$resulttrip = $conn->query($sqltrip);

					while ($row = $resultrip->fetch_assoc())
					{		
					$tripid		= $row['TRIP_ID'];
					$tripdep	= $row['TRIP_DEPARTURE'];
					$tripret	=	$row['TRIP_RETURN'];
					$tripretn	=	$row['TRIP_RETURNED'];
					$tripflag	=	$row['TRIP_TRIPFLAG'];
					$tripstat	=	$row['TRIP_CURRSTATUS'];

					$sqlrev	=	"SELECT * FROM REVIEWS WHERE TRIP_ID = '$tripid'";
					$resultrev = $conn->query($sqlrev);

					while ($row = $resultrev->fetch_assoc())
					{
					print "<pre>";

					printf("%8s", $tripid);					
					printf("%8s", $destname);
					printf("%8s", $desttype);
					printf("%8s", $destsyst);
					printf("%8s", $destdist);
					print "<pre>";
					
				}
				echo "<br>";
			}*/
		//}
		
		else
		{
		 echo "You haven't gone anywhere";
		}		
				
				$avgcost = $expenses/$countrips;
				$avgreview = $reviews/$countrips;
		?>
    
		</p>
		</div>
		
		<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="useraccessinfo">
	
  <ul class="w3-ul w3-card-4">
	<li class="w3-bar">
      <img src="resources/images/icons/906-9065448_stats-icon-statistics-color.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large"><?php echo $countrips?></span><br>
        <span>Total Trips</span>
      </div>
    </li>
		<li class="w3-bar">
        <div class="w3-bar-item">
        <span class="w3-large"><?php printf("%1\$.2f / 5.0 ",$avgreview)?></span><br>
				<span>Average Review</span>
				
      </div>
    </li>
	<li class="w3-bar">
        <div class="w3-bar-item">
        <span class="w3-large"><?php printf("Bitcoin %1\$.2f",$expenses)?></span><br>
        <span>Total Expenses</span>
      </div>
    </li>
	<li class="w3-bar">
        <div class="w3-bar-item">
        <span class="w3-large"><?php printf("%1\$.2f",$avgcost)?></span><br>

        <span>Average Cost</span>
      </div>
    </li>

	</div>
 
 
 

		
		
		
		
	

	<!-- Your user acess login information -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="useraccessinfo">
    <h2 class="w3-wide">Login Information</h2>
    <p class="w3-opacity"><i>Basic access</i></p>

		<p class="w3-justify">
		<div class="w3-container">
		<ul class="w3-ul w3-card-4">
	
	    <li class="w3-bar">
      <!-- <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span> -->
      <img src="resources/images/icons/baseline_admin_panel_settings_black_18dp.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $username;?></span><br>
        <span>username</span>
      </div>
			<div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $_SESSION['loginemail'];?></span><br>
        <span>email</span>
      </div>
		</li>
		<br>
	</ul>
	</div></p>
	</div>
		
		
	<!-- Your account info -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="accountinfo">
    <h2 class="w3-wide">Your Account</h2>
    <p class="w3-opacity"><i>Your account information</i></p>


	<p class="w3-justify">
	<div class="w3-container">
	<ul class="w3-ul w3-card-4">
	
	    <li class="w3-bar">
      <!-- <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span> -->
      <img src="resources/images/icons/sharp_assignment_ind_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $username?></span><br>
        <span>username</span>
      </div>
			<div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxid?></span><br>
        <span>passenger id</span>
      </div>
			<div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxgender?></span><br>
        <span>gender</span>
      </div>
    </li>
		<br>
	
    <li class="w3-bar">
     <!-- <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span> -->
      <img src="resources/images/icons/sharp_account_circle_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $firstname?></span><br>
        <span>first name</span>
			</div>
			<div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $middlename ?></span><br>
        <span>middle name</span>
			</div>
			<div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $lastname ?></span><br>
        <span>last name</span>
			</div>	
    </li>
		<br>

    <li class="w3-bar">
      <!-- <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span> -->
      <img src="resources/images/icons/sharp_apps_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $pasno?></span><br>
        <span>passport number</span>
      </div>
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $pascountry?></span><br>
        <span>passport country</span>
      </div>
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $pasissuedate." ".$pasexpdate?></span><br>
        <span>issue Date & exp Date</span>
      </div>
		</li>
		
		 <li class="w3-bar">
      <!-- <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span> -->
      <img src="resources/images/icons/sharp_location_city_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxaddress?></span><br>
        <span>street address</span>
      </div>
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxcity?></span><br>
        <span>city</span>
      </div>
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxstate.", ".$paxcountry?></span><br>
        <span>state & country</span>
      </div>
		</li>

		 <li class="w3-bar">
      <!-- <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span> -->
      <img src="resources/images/icons/sharp_call_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxdob?></span><br>
        <span>date of birth</span>
      </div>
			<div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo "+".$paxcountrycode."(". $paxareacode .")".$paxphone?></span><br>
        <span>phone Number</span>
      </div>
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxemail?></span><br>
        <span>email</span>
      </div>
		</li>
		
	 <li class="w3-bar">
      <!-- <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span> -->
      <img src="resources/images/icons/sharp_local_hospital_black_24dp.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxcontname?></span><br>
        <span>emergency contact</span>
      </div>
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxcontphone?></span><br>
        <span>emergency phone</span>
      </div>
      <div class="w3-bar-item" style="width:200px">
        <span class="w3-large"><?php echo $paxcontemail?></span><br>
        <span>emergency email</span>
      </div>
		</li>
		
  </ul>
	</div>
	</p>
	</div>


	<!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT US</h2>
    <p class="w3-opacity w3-center"><i>Questions? Leave us note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> San Francisco, CA<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +415 806 6831<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mokospace@mokospace.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>


  		
		
	
	
	
	
<!-- End Page Content -->
</div>

<?php
include "footer.php";
echo "Temp Pas no = ".$_SESSION['tempasno'];
?>

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

</body>
</html>