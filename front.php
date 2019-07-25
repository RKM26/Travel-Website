<!DOCTYPE html>
<html>
<head>
	<title>Text Background Move On MouseMove</title>
	<link rel="stylesheet" type="text/css" href="front.css">
</head>
<body>
	<section>
		<h1><span>veni vidi</span> amavi</h1>
		<form method="get" action="login.php">
    		<button type="submit">LOGIN</button>
		</form>
		<form method="get" action="signup.php">
    		<button type="submit">SIGNUP</button>
		</form>
	</section>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript">
			$('section').mousemove(function(e) {
				var moveX = (e.pageX * -1/10);
				var moveY = (e.pageY * -1/10);
				$(this).css('background-position', moveX + 'px ' + moveY + 'px ');
			})
		</script>
		
		

</body>
</html>