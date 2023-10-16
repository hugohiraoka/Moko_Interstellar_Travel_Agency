<!DOCTYPE html>
<?php
include "header.php";
include_once "dbconfig.php";
//include "destinations.php";
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
<div class="w3-content" style="max-width:2000px;margin-top:25px">

  <!-- Automatic Slideshow Images -->
  
	<div class="mySlides w3-display-container w3-center">
    <img src="resources/images/cover/cover_001.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3> <div class="w3-panel w3-leftbar w3=light-grey">
						<p class="w3-large w3-serif">
						<i>"It is pure BS, Science Fiction copied out of Star Trek."</i></p>
						<p><b>Bill Gates<b></p></div></h3>  
						</div>
  </div>
	
  <div class="mySlides w3-display-container w3-center">
    <img src="resources/images/cover/cover_002.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
		 <h3> <div class="w3-panel w3-leftbar w3=light-grey">
						<p class="w3-large w3-serif">
						<i>"It is impossible, it will not work, it's pure fantasy.."</i></p>
      <p><b>- The Naysayers.</b></p></div></h3>    
    </div>
  </div>
	
  <div class="mySlides w3-display-container w3-center">
    <img src="resources/images/cover/cover_006.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
		 <h3> <div class="w3-panel w3-leftbar w3=light-grey">
						<p class="w3-large w3-serif">
						<i>"In 10,000 years my ionic war engine will work. I am the only one that can get it done."</i></p></div></h3>
      <p><b>Elon Musk</b></p>    
    </div>
  </div>
	
	<div class="mySlides w3-display-container w3-center">
    <img src="resources/images/cover/cover_005.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
		 <h3> <div class="w3-panel w3-leftbar w3=light-grey">
						<p class="w3-large w3-serif">
						<i>"Don't stop believin', Hold on to that feelin"</i></p></div></h3>
      <p><b>Journey</b></p>    
    </div>
  </div>

	<div class="mySlides w3-display-container w3-center">
    <img src="resources/images/cover/cover_009.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				 <h3> <div class="w3-panel w3-leftbar w3=light-grey">
						<p class="w3-large w3-serif">
						<i>"The Ryugu asteroid discovery will blow your mind.."</i></p></div></h3>
      <p><b>Mongo, Engineer at MokoSpace</b></p>    
    </div>
  </div>
	
	<div class="mySlides w3-display-container w3-center">
    <img src="resources/images/cover/cover_003.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
		<h3> <div class="w3-panel w3-leftbar w3=light-grey">
						<p class="w3-large w3-serif">
      <i>"The Truth is out there."</i></p>
      <p><b>FBI Agents Fox Mulder and Dana Scully.</b></p></div></h3>  
    </div>
  </div>

  <!-- Science Fiction -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="scifi">
    <h2 class="w3-wide">Why?</h2>
    <p class="w3-opacity"><i>What we knew about it.</i></p>
    <p class="w3-justify">Maybe we knew absolutely nothing. But we knew from Einstein's theory of relativity E=mc2, that it was impossible to travel at a speed faster than the absolute speed of light. Then we heard that Faster Than Light (FTL) velocities would be possible with warp engines. And finally we heard that one day, we will  build worm holes that would make interstellar travel feasible. We also knew that our fastest space ships reached a record-breaking, once in a lifetime, speed of 165,000 mph (266,000 kmh), or 0.0246% the speed of light.  That sounds mighty fast, but Proxima Centauri, the nearest star to our Sun, is "only" 4.25 light years away. That fastest ship would take only 17,243.68 years to arrive, without considering the time required to slow down the ship before arrival. So yes, space travelling is impossible.
		How about travelling to planets in our Solar system? </p><br>
		<img src= "resources/images/general/interplanetary_travel.png" style width="780">
		<br>
		<br>
		
		<p class="w3-justify"> All right, we could travel to the Moon in only 3 days. That doesn't sound so bad, right? But, soon, everybody will travel to the moon in Elon Musk's SpaceX rockets. What is there to do in the moon anyway? Are you going there just for a selfie? Well, maybe you are. But even if you want to visit Jupiter, you will only take 6 years, and you may never return back to Earth. Never mind. </p>
		<br>
	
		<table class="w3-justify">
			<tr>
				<th> Destination </th>
				<th> Time to Travel </th>
				<th> </th>
			</tr>
			<tr>
				<td> Sun </td>
				<td> 3 years </td>
				<td> <img src= "resources/images/planets/sun.png" padding-left: 20px; style width="40"></td>
			</tr>
			<tr>
				<td> Mercury </td>
				<td> 6.5 years </td>
				<td> <img src= "resources/images/planets/mercury.png" style width="40"></td>				
			</tr>
				<td> Venus </td>
				<td> 15 months</td>	
				<td> <img src= "resources/images/planets/venus.png" style width="40"></td>
			<tr>
				<td> Moon </td>
				<td> 3 days</td>	
				<td> <img src= "resources/images/planets/moon.png" style width="40"></td>
			</tr>
				<td> Mars </td>
				<td> 7 months</td>
				<td> <img src= "resources/images/planets/mars.png" style width="40"></td>
			<tr>
				<td> Jupiter </td>
				<td> 6 years</td>	
				<td> <img src= "resources/images/planets/jupiter.png" style width="40"></td>
			</tr>
				<td> Saturn </td>
				<td> 7 years</td>	
				<td> <img src= "resources/images/planets/saturn.png" style width="70"></td>
			<tr>
				<td> Uranus </td>
				<td> 8.5 years </td>	
				<td> <img src= "resources/images/planets/uranus.png" style width="40"></td>
			</tr>
			<tr>
				<td> Neptune </td>
				<td> 12 years </td>
				<td> <img src= "resources/images/planets/neptune.png" style width="40"></td>
			</tr>
			<tr>
				<td> Pluto </td>
				<td> 9.5 years </td>
				<td> <img src= "resources/images/planets/pluto.png" style width="40"></td>
			</tr>
				<td> Proxima Centauri b </td>
				<td> 74,002 yeas </td>
				<td> <img src= "resources/images/planets/proximacentaurib.png" style width="40"></td>
			<tr>
				<td> Alpha Centauri Aa  </td>
				<td> 78,273 years </td>		
				<td> <img src= "resources/images/planets/alphacentauriaa.png" style width="40"></td>				
			</tr>
			<tr>
				<td> Alpha Centauri b </td>
				<td> 82,928 years </td>
				<td> <img src= "resources/images/planets/alphacentaurib.png" style width="40"></td>
			</tr>
			<tr>
				<td> Nur </td>
				<td> 120,675 years </td>
				<td> <img src= "resources/images/planets/nur.png" style width="40"></td>
			</tr>
			<tr>
				<td> Dagobah </td>
				<td> 122,823 years </td>
				<td> <img src= "resources/images/planets/dagobah.png" style width="40"></td>
			</tr>
			<tr>
				<td> Takodana </td>
				<td> 127,902 years </td>
				<td> <img src= "resources/images/planets/takodana.png" style width="40"></td>
			</tr>
			<tr>
				<td> Krypton </td>
				<td> 130,108 years </td>
				<td> <img src= "resources/images/planets/krypton.png" style width="40"></td>
			</tr>
			<tr>
				<td> Alderaan </td>
				<td> 131,457 years </td>
				<td> <img src= "resources/images/planets/alderaan.png" style width="40"></td>
			</tr>
			<tr>
				<td> Dantooine </td>
				<td> 157,000 years </td>
				<td> <img src= "resources/images/planets/dantooine.png" style width="40"></td>
			</tr>
			<tr>
				<td> Mandalore </td>
				<td> 178,291 years </td>
				<td> <img src= "resources/images/planets/mandalore.png" style width="40"></td>
			</tr>
			<tr>
				<td> Trappist-1 </td>
				<td> 580,993 years </td>
				<td> <img src= "resources/images/planets/trappist1.png" style width="40"></td>
			</tr>
		</table>
		<br>
		
	
		<p class="w3-justify"> But some of us always wonder what is out there beyond our Solar system, far away in the Milky way, and even farther away in other galaxies. Have you ever dreamt about visiting the neighbor solar systems Alpha, Beta and Proxima centauri? How about seeing the center of our own Milky way? Or travelling to Andromeda, a neightbor galaxy? How about those amazing planets in the Star Wars galaxy? With the current technology we have, we will continue wondering forever.</p>
		
		<p class="w3-justify"> The universe is vast, immense, maybe not infinite but to us, it is.  Our lives are ephimerous, insignificant compared to the history of the universe. So unless we develop some revolutionary technology that allow us to cut the traveling time by millions of times, we will never visit any of those distant worlds. We want to visit those worlds and that is why we never gave up and continued with our research.</p>
		<br>
	
		<h2>Warp Drives</h2>
		<img src= "resources/images/scifi/startrek.png" alt="USS enterprise" style width="100%">   
		<br>
		<br>
		<p class="w3-justify"> A warp drive is a theoretical superluminal spacecraft propulsion system in many science fiction works, most notably Star Trek and much of Isaac Asimov's work. A spacecraft equipped with a warp drive may travel at speeds greater than that of light by many orders of magnitude. In contrast to some other fictitious faster-than-light technologies such as a jump drive, the warp drive does not permit instantaneous travel between two points, but rather involves a measurable passage of time which is pertinent to the concept. In contrast to hyperspace, spacecraft at warp velocity would continue to interact with objects in "normal space." The general concept of "warp drive" was introduced by John W. Campbell in his 1931 novel Islands of Space.</p>
		<br>
		
		<h2>Ion Drives</h2>
		<img src= "resources/images/scifi/einsteindrive.png" alt="Einstein Ion Drive" style width="100%">
		<br>
		<br>
		<p class="w3-justify">Ion thrusters are being designed for a wide variety of missions—from keeping communications satellites in the proper position (station-keeping) to propelling spacecraft throughout our solar system. These thrusters have high specific impulses—ratio of thrust to the rate of propellant consumption, so they require significantly less propellant for a given mission than would be needed with chemical propulsion. Ion propulsion is even considered to be mission enabling for some cases where sufficient chemical propellant cannot be carried on the spacecraft to accomplish the desired mission. </p>
		
		<p class="w3-justify">
		The positively charged ions migrate toward grids that contain thousands of very precisely aligned holes (apertures) at the aft end of the ion thruster. The first grid is the positively charged electrode (screen grid). A very high positive voltage is applied to the screen grid, but it is configured to force the discharge plasma to reside at a high voltage. As ions pass between the grids, they are accelerated toward a negatively charged electrode (the accelerator grid) to very high speeds (up to 90,000 mph). </p>
		<br>
	
		<h2>Wormholes</h2>
		<img src= "resources/images/scifi/wormhole.png" alt="Wormhole" style width="100%">
		<br>
		<br>
		<p class="w3-justify">Wormholes are solutions to the Einstein field equations for gravity that act as "tunnels," connecting points in space-time in such a way that the trip between the points through the wormhole could take much less time than the trip through normal space. </p>
	
		<p class="w3-justify"> "Traversable" wormholes exist in wormhole space-times in which the wormhole is held open at least long enough for a signal or object (spaceship) to pass through. Interest in such wormhole solutions in general relativity was stimulated when Michael Morris and Kip Thorne of the California Institute of Technology examined the general properties necessary for a wormhole to remain open. They found that if a wormhole is static and unchanging in time, then it must contain "exotic" matter. Such matter has negative energy density and a large negative pressure (or tension)--larger in magnitude than the energy density. Such matter is called "exotic" because it so little resembles all forms of known matter. </p>
		<br>

		<h2>We are very, very, very far away from going anywhere..</h2>
		<img src= "resources/images/scifi/teletransportation2.jpg" alt="Interstellar Travel" style width="100%">
		<br>
		<br>
		<p class="w3-justify"> Warp drives, Ion drives, Epstein drives, Jump drives, Wormholes, Blackholes will get us nowhere, well maybe one day, but by then, we will all be dead. If we can wait 1,000 years, maybe then interplanetary travel within our Solar System could be normal. Maybe then, we could send probes to other stars. For us, right now, it will not happen with our current technology.</p>
		
		<p class="w3-justify"> We need a breakthrough, something that could be a game changer. But what could it be? </p>
	</div>
	
	<!-- What we do -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="whatwedo">
    <h2 class="w3-wide">What we do</h2>
    <p class="w3-opacity"><i>Finding a Solution, or better say, Dreaming for a way.</i></p>
    
		<p class="w3-justify">There had to be a way to find a solution to the problem of interplanetary travel. How could we travel those immense distances? Would coming up with a fancy name for a new engine be the solution? Maybe stealing the technology from a sci-fi movie? Or perhaps imagining a non-sense, pure imaginatively solution and wait for it to become reality by good luck? .</p>	
		
		<img src= "resources/images/research/immensedistance.png" alt="Immense Distances" style width="100%">
		<br>
		<br>
		
		<p class="w3-justify"> First came the sub-warp engine. This design evolved onto the anti-ion engine, which led to the super-warper. It was the super warper that helped us develop the multi laser polaroid thrust engine, a first one in its class. We also realized that Artificial Intelligence and Machine Learning had to, somehow, be thrown into our equation. And so the first intelligent engine with automatic power off and revolution control loop was developed.  We called this "Revolution Engine". </p>	

		<img src= "resources/images/research/engine_01.png" alt="Revolution Engine" style width="75%">
		<br>

		<p class="w3-justify"> Unfortunately by then we realized that the Revolution Engine was extremely heavy and it's power output per net pound was extremely inefficient.  Who could have imagined that! This lead us to scratch the Revolution and completely redesign the engine.  We decided to add fuel injectors, a timing belt, a water pump, and some other stuff. The next engine was going to be light, powerful and it would for sure, finally take us to Proxima Centauri in a blink of an eye. Did we mention that we put a "Ferrari" badge so we could make it faster? </p>
		
		<img src= "resources/images/research/engine_02.png" alt="Ferrari Engine" style width="90%">
		
		<p class="w3-justify"> The Ferrari engine didn't fare well. While it had this fancy badge, it just couldn't lift off from the ground. One of our engineers stressed the word "lift", so we realized that the solution was to develop an engine that we could lift ourselves off the ground.  And so we were back on the drawing board. And proudly produced the Lifan engine. A two stroke, 25 cubic centimeter, 2-lb torque engine. The idea was to place 10 million Lifan engines together to achieve the required power.</p>
		
		<img src= "resources/images/research/engine_03.png" alt="Motorcycle Lifan Engine" style width="75%">

		<p class="w3-justify"> The Lifan engine had quality issues and was never produced. But what really doomed the engine was our finding that the Lifan engine had been, somehow, entirely copied from the original Honda CB50, a classic motorcycle of its era. We learned from our mistakes and went onto developing the Mega Ultra Rotor Warped Bionic engine. The MURWB engine was unique in its class.  Four engines could lift heavy base stations, and eight engines could achieve speeds faster than a modern car, maybe.  This engine was ultimately placed into our spaceship prototype hoping for a great success.   </p>
		<br>

		<img src= "resources/images/research/engine_04.png" alt="Ultra Bionic Engine" style width="30%">
		<br>
		<br>
		<p class="w3-justify"> Our spaceship prototype, the WJJS267211AB-1, was sturdy, sleek, and easy to maneuver. It offered remote control operation, rechargeable power sources, and a best in its class signal range. We were ready to embark in our interstellar voyage.</p>

		<img src= "resources/images/research/spaceship.png" alt="The WJJS267211AB-1" style width="65%">

		<h2 class= "w3-wide">And so we Failed</h2>
		<p class="w3-justify">You were entirely right. We knew nothing about interplanetary travel, we couldn't tell the difference between a boat and a rocket. In fact, all our integral equations were missing a central part and led to nowhere. Still, we dreamt about travelling to very far away worlds. Perhaps it was because we wanted to run away from all the caos, destruction, and unfairness nature to our society. In our dreams, all our problems disappeared, there was no more hunger, no racism, no poverty, nobody worried about money, nobody was richer than anyone else, nobody was fighting for power, no animals suffered, and found ourselves in wonderful, majestic planets. Perhaps we wanted to run away from evil, we wanted to run away from ourselves.</p>	
		<br>
		<img src= "resources/images/research/failed.png" alt="Research" style width="100%">
	</div>
	
	<!-- Discovery -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="discovery">
    <h2 class="w3-wide">A new discovery</h2>
    <p class="w3-opacity"><i>How an accident led to a revolutionary invention</i></p>
    
		<p class="w3-justify">After failing at everything, we decided to visit a space exploration exhibition. The most interesting exhibit was from the Japan Space Agency (JAXA) and the discoveries the Hayabusa 2 space probe had made during its landing on the Ryugu asteroid and return to Earth.  We were perplexed at how anyone could land on a fast moving asteroid. </p>	
		<br>
		<img src= "resources/images/discovery/hayabusa_01.png" alt="Hayabusa concept" style width="100%">
		<br>
		<br>
		<p class="w3-justify">You see, the story doesn't end there. The Hayabusa2 brought something back to Earth. It was a piece of rock with tons of metal minerals and carbon that told the story of the evolution of the universe and probably how Earth was formed and life came to be.  A shiny object that was being studied with much attention by international scientists.  </p>	
		<br>
		<img src= "resources/images/discovery/hayabusa_02.png" alt="Hayabusa actual landing" style width="100%">
		<br>
		<br>
		
		<p class="w3-justify">On display was a rock brought back by Hayabusa 2. Mongo, One of the engineers in our team was drinking a 7-Eleven slurpee when he accidentally tripped and fell onto the metallic rock, spilling all his Slurpee on the rock and breaking it in half.  What the entire scientific community had tried to preserve, Mongo broke in 2 seconds. But inside the rock, the secret diagram containing the formula for interstellar space travel was found. The slurpee was fundamental to reveal the secret writings, some reaction with all the chemicals made all those microscopic writings visible. </p>	
		<br>
		<img src= "resources/images/discovery/hayabusa_03.png" alt="The actual rock" style width="100%">
		<br>
		<br>
		<p class="w3-justify"> The rest of the story is boring. But who would have guessed, not even the brightest minds on Earth, that a meteoric rock combined with a 7-Eleven slurpee will pave the way to finding the greatest hidden secret ever. Moko obtained the rights to do the first human trials (There were no non-human animal trials). In fact, Mongo was the first trailblazer to travel to a very far, distant land. At the end, MOKO obtained the exclusive rights to commercialize space travel.</p>
		<br>
		<img src= "resources/images/discovery/slurpee.png" alt="The actual rock" style width="50%">
	</div>
	
		<!-- Technology -->
	<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="tech">
		<h2 class="w3-wide">The Technology</h2>
    <p class="w3-opacity"><i>The revolutionary patented exclusive technology is here</i></p>
		
		<p class="w3-justify">The discovery revealed that we could teleport ourselves, our pets, and 2 suitcases into far away locations in the entire universe. Guns, bazookas, knives, machetes, swords, bombs, batons, molotov cocktails, and any other type of item that could be used as a weapon would be instantaneously desintegrated during travelling.  After a lot of science, physics, mathematics, and philosophy, we developed the first algorithm to reproduce the technology on Earth.</p>	
		<br>
		<img src= "resources/images/tech/equations.png" alt="Equations for all" style width="100%">
		<br>
		<br>
		<p class="w3-justify">Product of our research, we developed the new Portable compact XVK Moko space agent.  This is a handheld device that lets you enter the planet you wish to visit. The XVK contains propietary ultra secret technology that allows you to teleport yourself from our main hub in San Francisco, California onto the desired destination. </p>
		<br>
		
		<img src= "resources/images/tech/device_01.png" alt="Life in other worlds" style width="80%">
		<br>
		<br>
		<p class="w3-justify">Teleportation had side-effects, both positive and negative. It slowed down human metabolism, which caused all travellers to become instantaneous vegans during the time of our entire trip. Research shows that travellers that safely returned to Earth, were most likely to continue on a strictly vegan diet. Also, travellers changed their frame of mind: Human qualities like prejudice, racism, sexism, mysogany, simply disappeared. Money and power became irrelevant and feelings of empathy, compassion, and solidarity were embedded inside the human spirit. Also, all diseases disappeared and travellers returned to Earth energized and younger, perhaps an effect of interstellar travelling. </p>
		<br>
		
		<img src= "resources/images/tech/teleportation.png" alt="Life in other worlds" style width="30%">
		<br>
		<br>
		
		<p class="w3-justify">We were able to travel to far distant worlds, see the unknown, visit different kingdoms, know new sentient beings, see unimaginable sceneries, climb 200 miles vertical walls, embrace 10 miles wide trees, swim in pure gold waters, walk on ultra magnetic cities, and many other things that you too need to experience. </p>	
		<br>
		<img src= "resources/images/tech/life_other_planet.png" alt="Life in other worlds" style width="100%">
	</div>
		
		
		
	<!-- Destinations -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="destinations">
    <h2 class="w3-wide">Our Destinations</h2>
    <p class="w3-opacity"><i>The Universe at your fingerprints</i></p>

	<!-- 1 -->
	
	
	<?php
	$planet = 3;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_23.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_40.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_45.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>

<!-- 2 -->

	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_15.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_16.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_13b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>
	
	<!-- 3 -->


	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_46b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_47.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_49a.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>
	<!-- 4 -->
	
	
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_45.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_51b.png" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_42.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>

	<!-- 5 -->
	
	
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_30b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_36.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_37b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>

<!-- 6 -->
	
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_32a.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_007.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_17b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>
	
	<!-- 7 -->
	
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_46b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_43.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_44.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>
	
	
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_39a.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_35b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_26.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>
	
	
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_29a.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_17b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_27b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>
	
	
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_21b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_22.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_23.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>
	
	
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_24b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_39b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_6b.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>
	
	
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="resources/images/planets/planet_11a.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $destname;?></b></p>
        <p><?php echo $destdesc;?></p>
      </div>
    </div>
    
	<?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>
	
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="resources/images/planets/planet_40.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
       <p><b><?php echo $destname;?></b></p>
       <p><?php echo $destdesc;?></p>
    </div>
  </div>
		
  <?php
	$planet += 1;
	$sqld01= "SELECT * FROM DESTINATION WHERE DEST_ID ='$planet'";
	$resultd01 = $conn->query($sqld01);
	if ($resultd01->num_rows >0) {
		$row = $resultd01->fetch_assoc(); 
		$destname		= $row['DEST_NAME'];
		$destdesc		= $row['DEST_DESCRIPTION'];
		$destimg1 	= $row['DEST_IMAGE1'];
		$destimg2 	= $row['DEST_IMAGE2'];
		$destimg3 	= $row['DEST_IMAGE3'];}
	?>

  <div class="w3-third w3-container w3-margin-bottom">
		<img src="resources/images/planets/planet_45.jpg" alt="<?php echo $destname;?>" style="width:100%" class="w3-hover-opacity">
		<div class="w3-container w3-white">
			<p><b><?php echo $destname;?></b></p>
      <p><?php echo $destdesc;?></p>
    </div>
   </div>		
	</div>
	
	
	
	
  <!-- Research & Development -->
 <!-- <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Book your Trip</h2>
      <p class="w3-opacity w3-center"><i>Click and Buy!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/newyork.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/paris.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/sanfran.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  -->
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
