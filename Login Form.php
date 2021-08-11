<html>
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<style>
		*{
			padding: 0;
	        margin: 0;
}
body{
	background: url('https://media.istockphoto.com/photos/wooden-tabletop-over-defocused-kitchen-background-picture-id1071414426?b=1&k=6&m=1071414426&s=170667a&w=0&h=yuYlBfH8HEREcRa8WqedZNhy3dyJ_vgSYwFOvzMLpDY=');
	background-repeat: no-repeat;
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
}
.log{
	position: absolute;
	top: 30%;
	left: 50%;
	transform: translate(-50%,-50%);
	text-align: center;
	font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	font-weight: bold;
}
.log h1{
	margin-bottom: 50px;
	font-size: 33px;
}
.bton{
	background:black;
	padding: 8px 13px;
	color:white;
	border-radius: 5px;
	box-shadow: black;
}
.bton:hover{
	color:yellow;
	font-size: 17px;
}
.loginbox{
	width: 370px;
	height: 495px;
	background: #000;
	color: #fff;
	top: 51%;
	left: 24%;
	position:absolute;
	display: block;
	transform: translate(-50%,-50%);
	padding: 70px 30px;
	box-sizing: border-box;
	font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	font-weight: bold;
	border-radius: 70px 0px 70px 0px
}
.picture{
	width: 100px;
	height: 100px;
	border-radius: 50px;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 29px;
}
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;	
}
.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}
.loginbox input[type="text"],input[type="password"]{
	border: none;
	outline: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.loginbox input[type="submit"]{
	border: none;	
	height: 40px;
	background: #FB2525;
	color: #fff;
	font-size: 18px;
	text-align: center;
}
.loginbox input[type="submit"]:hover{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
.loginbox input[type="close"]{
	border: none;	
	height: 40px;
	background: #FB2525;
	text-align: center;
	color: #fff;
	font-size: 18px;
}
.loginbox input[type="close"]:hover{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgray;
}
.loginbox a:hover{
	color:  #ffc107;
	font-size: 13px;
}
.output{
	width: 370px;
	height: 495px;
	background: #000;
	color:#fff;
	top: 51%;
	left: 76%;
	position:absolute;
	transform: translate(-50%,-50%);
	padding: 70px 30px;
	box-sizing: border-box;
	font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	font-weight: bold;
	border-radius: 70px 0px 70px 0px
}
.output h6{
	text-align: center;
}
</style>
</head>
<body>
<?php 
$name=$email="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST["name"];
	$email=$_POST["email"];
}
?>
<div class="output">
<h1>Your Entered Details Will Appear here</h1>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		echo "<p style='margin-top:20px;'>";
		echo "Your Name : $name<br><br>";
		echo "Your Email id : $email<br><br>";
		echo "Your Password : ********<br><br>";
		echo "An activation link was send to your Email<br/ ><br>";
		echo "Activate your account then login<br><br><br>";
		echo "<h6>Thankyou</h6>";
	}
?>
</div>
</body>
<body>
	<div class="log">
		<h1 style="color:rgb(255, 51, 0);" >SIGNUP FORM</h1><br><br><br><br><br><br><br>
		<a class="bton" id="btn" >Open Form</a><br><br><br>
		<a class="bton" id="cls" >Close Form</a>
	</div> 
	<script>
	document.getElementById("btn").addEventListener("click",function(){
	document.querySelector(".loginbox").style.display="block";
	})
	</script>	
</body>
<body>
	<div class="loginbox">
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJgEufdJF5giIai7CrW9PmCgGdXXLBVCrtcwQD0EjdTs1U2vhDTrsV4aFvK1UJQ0fxGWI&usqp=CAU" class="picture">
	<h1>Sign Up</h1>
	<form name="form" action="Login Form.php" method="POST">
		<p>Username</p>
		<input type="text" name="name" placeholder="Create Username" required>
		<p>Email</p>
		<input type="text" name="email" placeholder="Enter Email" required>
		<p>Password</p>
		<input type="password" placeholder="Create password" required>
		<input id="lgn" type="submit" value="Signup">
		<a href="#" onclick="dafunction()">Already have an account</a><br>
		<a href="#" onclick="fpfunction()" >how to create?</a>
	</form>
	<script>
	function dafunction(){
		alert("Go to login form and Login");
	}
	function fpfunction(){
		alert("Enter your details to create account");
	}
	document.getElementById("cls").addEventListener("click",function(){
	document.querySelector(".loginbox").style.display="none";
	})
	</script>
	</body>
</html>