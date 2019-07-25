<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>travelLoginPage</title>

	<link rel="stylesheet" type="text/css" href="signup.css">
	
</head>
<script>
        function validateForm(){
            var pass = document.getElementById('password').value;
            var email = document.getElementById('email').value;
            var fn = document.getElementById('username').value;
            var ln = document.getElementById('lastname').value;
            var tel = document.getElementById('number').value;
            var patt = new RegExp("^[\\w\\.]+@{1}[a-zA-Z]+\\.[a-z]+$");
            var pat = new RegExp("^[\\d]{10}$")            
            var re = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
            var name = /[^a-zA-Z]/
            if(fn=="" || fn==null || name.test(fn.toString())){
                alert("Enter a valid first name.");
                return false;
            }
            if(ln=="" || ln==null ||name.test(ln.toString())){
                alert("Enter a valid last name.");
                return false;
            }
           
            if(tel=="" || tel==null || tel.toString().length!=10 || !pat.test(tel.toString())){
                alert("Enter Valid mobile number");
                return false;
            }
            if(email=="" || email==null || !patt.test(email.toString())){
		        alert("Enter a valid email.");
		        return false;
	        }
            
            if(pass=="" || pass==null){
                alert("password must not be empty.");
                return false;
            }
            if(!re.test(pass.toString())){
                alert("Password must contain minimum eight characters, at least one letter, one number and one special character");
                return false;
            }
            
            return true;
        }
</script>
<body>

	<div class="box">
		<h2>Sign Up</h2>
		<form action="createuser.php"  method="get" onsubmit="return validateForm();">
			<div class="inputBox">
					<input type="text" name="username" required="" id="first">
					<label>First Name</label>
					<span id="username"></span>
			</div>
			<div class="inputBox">
					<input type="text" name="lastname" required="" id="last">
					<label>Last Name</label>
					<span id="lastname"></span>
			</div>
			 <div class="inputBox">
                 <input type="date" name="dob" id="dob">
                 <label>D.O.B</label>
            </div>
			<div class="inputBox">
					<input type="text" name="email" required="" id="email" >
					<label>E-mail</label>
					<span id="email"></span>
			</div>
			
			<div class="inputBox">
					<input type="number" name="contact" required="" id="number" >
					<label>Contact</label>
					<span id="number"></span>
			</div>
			<div class="inputBox">
            	  <label>Gender</label>
            	  <br>
                 <input type="radio" name="gender" value="male" checked> <label1>Male</label>
                 <br>
                 <input type="radio" name="gender" value="female"> <label2>Female</label>
                 <br>
                 <input type="radio" name="gender" value="female"> <label3>Others</label>
                 
            </div><br>
            <div class="inputBox">
					<input type="password" name="password" required="" id="pass1" >
					<label>Password</label>
					<span id=""></span>
			</div>
			<div class="inputBox">
					<input type="password_1" name="" required="" id="pass2">
					<label>Confirm Password</label>
					<span id=""></span>
			</div>
			<input type="submit" name="submit" value="Sign Up">
			
		</form>
	</div>
	

</body>
</html>