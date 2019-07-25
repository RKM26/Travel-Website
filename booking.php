
<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="booking.css">
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
					<li><a href="front.php">Log out</a></li>
				</ul>
			</ul>
		</div>
	</header>
	
	<div class="boxx">
		<h1>Package Booking</h1>

		



		<form class="form" action="mail.php" method="post">
			<div class="box">
				<label>First Name :</label>
				<p1 style="font-size: 18px; line-height: 25px; font-family: serif; color: #fff;"> 
				<?php
					session_start();
					echo $_SESSION["username"];
					 ?>
				</p>
			</div><br>
			<div class="box">
				<label>Last Name :</label>
				<p1 style="font-size: 18px; line-height: 25px; font-family: serif; color: #fff;"> 
				<?php
				
					echo $_SESSION["lastname"];
					 ?>
				</p>
			<div class="box">
				<label>Location :</label>
				<?php 
					echo $_POST["city"];
				?>
			</div>
			<br>
			<div class="box">
				<br /><label>Start Date :</label>
				<input type="date" name="Date" id="start date ">
			</div>
			<div class="box">
				<br /><label>No. of Days :</label>
				<input type="number" name="" id="numberofdays">
			</div>
			<br>
					<div class="box">
			<br /><label>Number of passangers :</label>
			<input type="number" name="" id="numberofpass">
			<span id="numbertext"></span>
			</div>
			<div class="box">
				<br /><label>E-mail :</label>
				<p1 style="font-size: 18px; line-height: 25px; font-family: serif; color: #fff;">  
				<?php
					
					echo $_SESSION["email"];
					 ?>
				</p>
			</div>
		<div class="box">
			<br /><label>Number :</label>
			<p1 style="font-size: 18px; line-height: 25px; font-family: serif; color: #fff;">  
				<?php
					
					echo $_SESSION["contact"];
					 ?>
				</p>
		</div>
		<div class="b1">
			<input type="submit" name="submit" value="Submit">
		</div>				
		</form>
	</div>

</body>
</html>