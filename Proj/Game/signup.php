<!--
	Author:		James Leduc
	Title:		Zompocalypse
	Purpose:	A zombie game where survival is based upon choice and chance.
	Created:	Nov 16, 2014
	Modified:	Nov 16, 2014
	NOTE:		Still need to create and connect to the database with the 'connect.php'.
-->
<!doctype html>
<html lang="en">
	<head>
		<title>Zompocalypse Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/styles.css">	<!-- Include Style Sheets -->
		<script src=""></script>
		<?php
			//	Display the Errors:
			function showErrors($errors){
				echo ('<script>var tagID = document.getElementById("tLine");');
				echo ('tagID.style.display="block";');
				echo ('tagID = document.getElementById("bLine");');
				echo ('tagID.style.display="block";');
				echo ('tagID = document.getElementById("errors");');
				echo ('tagID.innerHTML = "<h2 style=\"color:red\">ERRORS!</h2><p><b>The following errors occurred:</b></p><p>');
				foreach($errors as $msg){
					echo '<b> * '.$msg.' * </b><br>\n';
				}
				echo ('</p><p>Please, try again!</p>"</script>');
			}
		?>
	</head>
	<body>		
		<br><br><center><h1>SIGN UP TO ENTER THE ZOMBIE APOCALYPSE!</h1></center><br><br>
		
		<center>
			<hr id="tLine" style="display:none">
			<div id="errors" style="color:red"></div>
			<hr id="bLine" style="display:none">
		</center>
		<?php	//	Validate Sign Up Form:
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
				$errors = array();
			
				$name = $_POST['uName'];
				$regX = "/^\s*([A-Z][a-z]{1,})(([A-Z][a-z]{1,})*)\s*$/";
				
				if(empty($_POST['uName'])){
					echo ("<script>var tagID = document.getElementById('uName'); tagID.style.backgroundColor='#FF0000';</script>");
					$errors[] = ("You forgot to enter your name!");
				}elseif(preg_match($regX,$name)){
					echo ("<script>var tagID = document.getElementById('uName'); tagID.style.backgroundColor='#00FF00';</script>");
					$n = trim($_POST['uName']);	//	$n - 'name' for SQL query
				}else{
					echo ("<script>var tagID = document.getElementById('uName'); tagID.style.backgroundColor='#FF0000';</script>");
					$errors[] = 'Please, enter a valid name!';
				}
				
				$eMail = $_POST['uMail'];
				$regX = "/^\s*[A-Za-z0-9]{1,}[@][A-Za-z]{1,10}[\.][A-Za-z]{1,5}([\.][A-Za-z]{1,5})?\s*$/";
				
				if(empty($_POST['uMail'])){
					echo ("<script>var tagID = document.getElementById('uMail'); tagID.style.backgroundColor='#FF0000';</script>");
					$errors[] = "You forgot to enter your email!";
				}elseif(preg_match($regX,$eMail)){
					echo ("<script>var tagID = document.getElementById('uMail'); tagID.style.backgroundColor='#00FF00';</script>");
					$m = trim($_POST['uMail']);	//	$m - 'email' for SQL query
				}else{
					echo ("<script>var tagID = document.getElementById('uMail'); tagID.style.backgroundColor='#FF0000';</script>");
					$errors[] = 'Please, enter a valid email!';
				}
				
				$passW = $_POST['uPass'];
				$regX = "/((?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%^&*-_]).{5,15})/";
				
				if(empty($_POST['uPass'])){
					echo ("<script>var tagID = document.getElementById('uPass'); tagID.style.backgroundColor='#FF0000';</script>");
					$errors[] = "You forgot to enter your password!";
				}elseif(preg_match($regX,$passW)){
					echo ("<script>var tagID = document.getElementById('uPass'); tagID.style.backgroundColor='#00FF00';</script>");
					$p = trim($_POST['uPass']);	//	$p - 'password' for SQL query
				}else{
					echo ("<script>var tagID = document.getElementById('uPass'); tagID.style.backgroundColor='#FF0000';</script>");
					$errors[] = 'Invalid Password! Please, enter a password with a length of 5-15 characters!';
					$errors[] = 'Include at least 1 letter, 1 number, and 1 special character (e.g. !@#$%^&*-_)!';
				}

				$vPass = $_POST['vPass'];
				
				if(empty($_POST['vPass'])){
					echo ("<script>var tagID = document.getElementById('vPass'); tagID.style.backgroundColor='#FF0000';</script>");
					$errors[] = "You forgot to verify your password!";
				}elseif($vPass==$passW){
					echo ("<script>var tagID = document.getElementById('vPass'); tagID.style.backgroundColor='#00FF00';</script>");
				}else{
					echo ("<script>var tagID = document.getElementById('vPass'); tagID.style.backgroundColor='#FF0000';</script>");
					$errors[] = 'Your passwords do not match!';
					$errors[] = 'Please, recheck your passwords!';
				}
				
				if(empty($errors)){	//	IF the form is filled out properly:
				
					//	Register to the database:
					//	Open ('require') the database connection:
					//	Make the query:
					//	Run the query:
						//	IF query ran okay, "You are registered!":
						//	ELSE "System Error!":
					//	Close database
				
				}else{	//	ELSE report the errors:
					showErrors($errors);
				}
			}
		?>

		<!--	User Form	-->
		<center><div id="sign">
			<h2>SIGN UP</h2>
			<form name="user" id="user" action="signup.php" onsubmit="" method="post">
				<b>NAME:</b><br><input type="text" name="uName" id="uName" value="<?php if(isset($_POST['uName']))echo $_POST['uName']; ?>" /><br>
				<b>EMAIL:</b><br><input type="text" name="uMail" id="uMail" value="<?php if(isset($_POST['uMail']))echo $_POST['uMail']; ?>" /><br>
				<b>PASSWORD:</b><br><input type="password" name="uPass" id="uPass" value="<?php if(isset($_POST['uPass']))echo $_POST['uPass']; ?>" /><br>
				<b>VERIFY PASSWORD:</b><br><input type="password" name="vPass" id="vPass" value="<?php if(isset($_POST['vPass']))echo $_POST['vPass']; ?>" /><br><br>
				<input type="submit" value="SIGN UP" />
			</form>
		</div></center>
		
	</body>
</html>