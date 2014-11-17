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
			//	Hidden/Reveal Function:
			function clickLogin(){
				var tagID = document.getElementById("logBtn");
					tagID.style.display="none";
					tagID = document.getElementById("signBtn");
					tagID.style.display="none";
					tagID = document.getElementById("log");
					tagID.style.display="block";
			}
		</script>
	</head>
	<body>
		<a href="play.html"><button>PLAY TEST</button></a>
		<br><br><center><h1>LOGIN TO ENTER THE ZOMBIE APOCALYPSE!</h1></center><br><br>
		<center>
			<button onclick="clickLogin()" id="logBtn" style="display:inline">LOGIN</button>
			<a href="signup.php"><button id="signBtn" style="display:inline">SIGN UP</button></a>
		</center>
		
		<!--	Login Form	-->
		<center><div id="log" style="display:none">
			<h2>LOGIN</h2>
			<form name="login" id="login" action="login.php" method="get">
				<b>EMAIL:</b><br><input type="text" name="logMail" id="logMail" /><br>
				<b>PASSWORD:</b><br><input type="password" name="logPass" id="logPass"	/><br><br>
				<input type="submit" value="LOGIN" />
			</form>
		</div></center>
		
	</body>
</html>