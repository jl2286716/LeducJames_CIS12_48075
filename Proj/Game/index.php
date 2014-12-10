<!--
	Author:		James Leduc
	Title:		Zompocalypse
	Purpose:	A zombie game where survival is based upon choice and chance.
	Created:	Nov 16, 2014
	Modified:	Nov 17, 2014
-->
<!doctype html>
<html lang="en">
	<head>
		<title>Zompocalypse: Login</title>
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
		<a href="play.php"><button>PLAY TEST</button></a>
		<br><br><center><h1>LOGIN TO ENTER THE ZOMBIE APOCALYPSE!</h1></center><br><br>
		<center>
			<button onclick="clickLogin()" id="logBtn" style="display:inline">LOGIN</button>
			<a href="signup.php"><button id="signBtn" style="display:inline">SIGN UP</button></a>
		</center>
		
		<center>
			<hr id="tLine" style="display:none">
			<div id="errors" style="color:red"></div>
			<hr id="bLine" style="display:none">
		</center>

		<?php	//	check user logins:
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				require ('../includes/functions_logins.php');	//	include login functions
				require ('mysqli_connect.php');					//	include database connection
				
				//	check logins
				if(isset($_POST['uLogSub'])){
					list($check, $data) = checkUser($dbc, $_POST['logMail'], $_POST['logPass']);
					
					if($check){
						setcookie('user_id',$data['user_id'],time()+3600);
						setcookie('fName',$data['fName'],time()+3600);
						
						redirect('loggedin.php');
					}else{
						$errors = $data;
						showErrors($errors);
					}
				}elseif(isset($_POST['aLogSub'])){
					list($check, $data) = checkAdmin($dbc, $_POST['uName'], $_POST['admPass']);
					
					if($check){
						setcookie('admin_id',$data['admin_id'],time()+3600);
						setcookie('fName',$data['fName'],time()+3600);
						
						redirect('dash.php');
					}else{
						$errors = $data;
						showErrors($errors);
					}
				}
				mysqli_close($dbc);
			}
		?>

		<!--	Login Form	-->
		<center><div id="log" style="display:none">
			<h2>LOGIN</h2>
			<form name="login" id="login" action="login.php" method="get">
				<b>EMAIL:</b><br><input type="text" name="logMail" id="logMail" value="<?php if(isset($_POST['logMail'])) echo $_POST['logMail']; ?>" /><br>
				<b>PASSWORD:</b><br><input type="password" name="logPass" id="logPass" value="<?php if(isset($_POST['logPass'])) echo $_POST['logPass']; ?>"	/><br><br>
				<input type="submit" name="uLogSub" value="LOGIN" />
			</form>
		</div></center>
		
	</body>
</html>