<!DOCTYPE html>
<html>
<head>
	<title>top places</title>
	<link rel="stylesheet" type="text/css" href="places.css">
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<ul>
					<li><a href="home.php">home</a></li>
					<li><a href="easy.php">Mood</a></li>
					<li><a href="places.php">Locations</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="booking.php" id="">Booking</a></li>
					<li><a href="front.php">Log out</a></li>
				</ul>
			</ul>
		</div>
	</header>


	<h1>Places on top list</h1>
	

	<div class="mainn">
		
		<div class="details" >
			<?php
				if(isset($_POST['submit'])){
				$city=$_POST['city'];
				}?>
			<form action="booking.php" method="post">
				<input type="text" name="city" value="Delhi">
			   			<p ><img src="delhi.jpg" alt="Smiley face""> <b>Delhi</b>, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India, and the sprawling Jama Masjid mosque, whose courtyard accommodates 25,000 people. Nearby is Chandni Chowk, a vibrant bazaar filled with food carts, sweets shops and spice stalls.
			   			</p>
		   				
		   		<a style="color: #FFF" href="https://greenwichmeantime.com/time-zone/asia/india/delhi/map-delhi/">DELHI MAP</a>

		
		 		<button type="submit" value="submit" name="submit">CHOSE DELHI</button>
		 		<hr>
			</form>
		</div>






		<div class="details" >
			<?php
				if(isset($_POST['submit'])){
				$city=$_POST['city'];
				}?>
			<form action="booking.php" method="post">
				<input type="text" name="city" value="Mumbai">
			   			<p ><img src="mumbai.jpg" alt="Smiley face""> <b>Mumbai</b> (formerly called Bombay) is a densely populated city on India’s west coast. A financial center, it's India's largest city. On the Mumbai Harbour waterfront stands the iconic Gateway of India stone arch, built by the British Raj in 1924. Offshore, nearby Elephanta Island holds ancient cave temples dedicated to the Hindu god Shiva. The city's also famous as the heart of the Bollywood film industry.
			   			</p>
		   		<a style="color: #FFF" href="https://greenwichmeantime.com/time-zone/asia/india/mumbai/">MUMBAI MAP</a>
		
		 		<button type="submit" value="submit" name="submit">CHOSE MUMBAI</button>
		 		<hr>
			</form>
		</div>


<div class="details" >
			<?php
				if(isset($_POST['submit'])){
				$city=$_POST['city'];
				}?>
			<form action="booking.php" method="post">
				<input type="text" name="city" value="GOA">
			   			<p ><img src="goa.jpg" alt="Smiley face""> <b>Goa</b> is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the area’s tropical spice plantations. Goa is also known for its beaches, ranging from popular stretches at Baga and Palolem to those in laid-back fishing villages such as Agonda.</p>
		   		<a style="color: #FFF" href="https://www.mapsofindia.com/maps/goa/">GOA MAP</a>
		
		 		<button type="submit" value="submit" name="submit">CHOSE GOA</button>
		 		<hr>
			</form>
		</div>




		<div class="details" >
			<?php
				if(isset($_POST['submit'])){
				$city=$_POST['city'];
				}?>
			<form action="booking.php" method="post">
				<input type="text" name="city" value="Varanasi">
			   			<p ><img src="varanasi.jpg" alt="Smiley face""> <b>Varanasi</b>  is a city in the northern Indian state of Uttar Pradesh dating to the 11th century B.C. Regarded as the spiritual capital of India, the city draws Hindu pilgrims who bathe in the Ganges River’s sacred waters and perform funeral rites. Along the city's winding streets are some 2,000 temples, including Kashi Vishwanath, the “Golden Temple,” dedicated to the Hindu god Shiva.</p>
		   		<a style="color: #FFF" href="https://greenwichmeantime.com/time-zone/asia/india/varanasi/">GOA MAP</a>
		
		 		<button type="submit" value="submit" name="submit">CHOSE VARANASI</button>
		 		<hr>
			</form>
		</div>

	
<div class="details" >
			<?php
				if(isset($_POST['submit'])){
				$city=$_POST['city'];
				}?>
			<form action="booking.php" method="post">
				<input type="text" name="city" value="Manali">
			   			 <p ><img src="manali.jpg" alt="Smiley face""> <b>Manali</b>  is a high-altitude Himalayan resort town in India’s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination. Set on the Beas River, it’s a gateway for skiing in the Solang Valley and trekking in Parvati Valley. It's also a jumping-off point for paragliding, rafting and mountaineering in the Pir Panjal mountains, home to 4,000m-high Rohtang Pass.</p>
		   		<a style="color: #FFF" href="https://www.mapsofindia.com/maps/himachalpradesh/manali.htm">GOA MAP</a>
		
		 		<button type="submit" value="submit" name="submit">CHOSE MANALI</button>
		 		<hr>
			</form>
		</div>
		
	</div>
</body>
</html>


<!--<ul>
			<li>
				<img src="C:\Users\Admin\Desktop\Travel\lotus.jpg" class="image">
				<p>Delhi, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India, and the sprawling Jama Masjid mosque, whose courtyard accommodates 25,000 people. Nearby is Chandni Chowk, a vibrant bazaar filled with food carts, sweets shops and spice stalls.</p>
				<a href="https://greenwichmeantime.com/time-zone/asia/india/delhi/map-delhi/"></a>
			</li>
		</ul>*/
-->
