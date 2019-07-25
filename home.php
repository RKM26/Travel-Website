<!--<?php
session_start();
$cookie_name = "user";
$cookie_value = $_SESSION["username"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body1 style="padding: 10px;
	margin: 10px;
	width: 20%;
	transform: translateY(-100%);
	font-size: 18px;
	line-height: 25px;
	font-family: serif;
	color: #fff;
	border: 1px solid white;
	border-radius: 10px;">
<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>-->
</body>
</html>



<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="home.css">
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
	<br /><br /><br /><br /><br />
	<div class="par"><p style="padding: 10px;
	margin: 10px;
	width: 20%;
	transform: translateY(-100%);
	font-size: 18px;
	line-height: 25px;
	font-family: serif;
	color: #fff;
	border: 1px solid white;
	border-radius: 10px;">WELCOME <?php
					session_start();
					echo $_SESSION["username"];
					 ?> to our website</p>
					 </div>
	<div class="para">
			<p>

				<i> you want to be healthy, <b>travel!</b> While it’s not the usual advice you hear from your doctor, <i>a 2015 study from UC Berkley</i> found that being in awe can be beneficial to your well-being. Viewing wonders like the Tian Tan Buddha in Hong Kong or a sunrise over volcanic Mt. Batur may boost the body’s defense system by reducing inflammation.<q>The things we do to experience these emotions -- a walk in nature, losing oneself in music, beholding art -- have a direct influence upon health and life expectancy,</q> says UC Berkeley psychologist Dacher Keltner. </i></p>
		</div>
	
	<div class="box">
		<div class="heading">
			<h1 >LET'S TRAVEL</h1>
		</div>
		
	</div>



</body>
</html>