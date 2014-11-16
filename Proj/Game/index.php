<!--
	Author:		James Leduc
	Title:		Zompocalypse
	Purpose:	A zombie game where survival is based upon choice and chance.
	Created:	Nov 16, 2014
	Modified:	Nov 16, 2014
-->
<!doctype html>
<html lang="en">
	<head>
		<title>Zompocalypse Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/styles.css">	<!-- Include Style Sheets -->
		<script src=""></script>
		<script>
		</script>
		<?php
			//	Form Validations:
			function validateName(){
				$name = $_REQUEST['uName'];
				$regX = "/^\s*([A-Z][a-z]{1,})(([A-Z][a-z]{1,})*)\s*$/";
				if(preg_match($regX,$name)){
					echo ("<script>var tagID = document.getElementById('uName'); tagID.style.backgroundColor='#00FF00';</script>");
					return true;
				}else{
					echo ("<script>var tagID = document.getElementById('uName'); tagID.style.backgroundColor='#FF0000';</script>");
					echo ("<script>alert('Please, enter a valid name!');</script>");
					return false;
				}
			}
			function validateEmail(){
				$eMail = $_REQUEST['uMail'];
				$regX = "/^\s*[A-Za-z0-9]{1,}[@][A-Za-z]{1,10}[\.][A-Za-z]{1,5}([\.][A-Za-z]{1,5})?\s*$/";
				if(preg_match($regX,$eMail)){
					echo ("<script>var tagID = document.getElementById('uMail'); tagID.style.backgroundColor='#00FF00';</script>");
					return true;
				}else{
					echo ("<script>var tagID = document.getElementById('uMail'); tagID.style.backgroundColor='#FF0000';</script>");
					echo ("<script>alert('Please, enter a valid email!');</script>");
					return false;
				}
			}
			function validatePassword(){
				$passW = $_REQUEST['uPass'];
				$regX = "/((?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%^&*-_]).{5,15})/";
				if(preg_match($regX,$passW)){
					echo ("<script>var tagID = document.getElementById('uPass'); tagID.style.backgroundColor='#00FF00';</script>");
					return true;
				}else{
					echo ("<script>var tagID = document.getElementById('uPass'); tagID.style.backgroundColor='#FF0000';</script>");
					echo ("<script>alert('Invalid Password!\nPlease, enter a password with a length of 5-15 characters!\nInclude at least 1 letter, 1 number, and 1 special character (!@#$%^&*-_)!');</script>");
					return false;
				}
			}
			function verifyPassword(){
				$passW = $_REQUEST['uPass'];
				$vPass = $_REQUEST['vPass'];
				if($vPass==$passW){
					echo ("<script>var tagID = document.getElementById('vPass'); tagID.style.backgroundColor='#00FF00';</script>");
					return true;
				}else{
					echo ("<script>var tagID = document.getElementById('vPass'); tagID.style.backgroundColor='#FF0000';</script>");
					echo ("<script>alert('Your passwords do not match!\nPlease, check your passwords!');</script>");
					return false;
				}
			}
			function validateSign(){
				if(!validateName())return false;
				if(!validateEmail())return false;
				if(!validatePassword())return false;
				if(!verifyPassword())return false;
				return true;
			}
		?>
	</head>
	<body>		
		<br><br><center><h1>LOGIN TO ENTER THE ZOMBIE APOCALYPSE!</h1></center><br><br>
		<!--	User Form	-->
		<center><div id="sign" style="">
			<h2>SIGN UP</h2>
			<form name="user" id="user" action="signup.php" onsubmit="return validateSign()" method="get">
				<b>NAME:</b><br><input type="text" name="uName" id="uName" /><br>
				<b>EMAIL:</b><br><input type="text" name="uMail" id="uMail" /><br>
				<b>PASSWORD:</b><br><input type="password" name="uPass" id="uPass" /><br>
				<b>VERIFY PASSWORD:</b><br><input type="password" name="vPass" id="vPass" /><br><br>
				<input type="submit" value="SIGN UP" />
			</form>
		</div></center>
		
		<!--	Login Form	-->
		<center><div id="log" style="">
			<h2>LOGIN</h2>
			<form name="login" id="login" action="login.php" method="post">
				<b>EMAIL:</b><br><input type="text" name="logMail" id="logMail" /><br>
				<b>PASSWORD:</b><br><input type="password" name="logPass" id="logPass"	/><br><br>
				<input type="submit" value="LOGIN" />
			</form>
		</div></center>
		
	</body>
</html>