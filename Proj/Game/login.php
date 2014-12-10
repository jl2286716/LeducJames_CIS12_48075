<!--
	Author:		James Leduc
	Title:		Zompocalypse
	Purpose:	A zombie text-based adventure game where survival is based upon choice and chance.
	Created:	Nov 16, 2014
	Modified:	Dec 09, 2014
	NOTE:		
-->
<!doctype html>
<html lang="en">
	<head>
		<title>Zompocalypse: Sign Up</title>
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
		<br><br><center><h1>LOGIN TO ENTER THE ZOMBIE APOCALYPSE!</h1></center><br><br>
		<center><h3>Or return <a href="index.php">HOME</a>...</center>
		
		<center>
			<hr id="tLine" style="display:none">
			<div id="errors" style="color:red"></div>
			<hr id="bLine" style="display:none">
		</center>

		<?php	//	check user logins:
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				require ('includes/functions_logins.php');	//	include login functions
				require ('includes/mysqli_connect.php');		//	include database connection
				
				//	check logins
				if(isset($_POST['uLogSub'])){
					list($check, $data) = checkUser($dbc, $_POST['logMail'], $_POST['logPass']);
					
					if($check){
						setcookie('user_id',$data['user_id'],time()+3600);
						setcookie('uName',$data['uName'],time()+3600);
						
						redirect('play.php');
					}else{
						$errors = $data;
						showErrors($errors);
					}
				}
				mysqli_close($dbc);
			}
		?>
		
		
		<center><form name="uLog" id="uLog" action="login.php" onsubmit="" method="post" >
			<legend><fieldset>
				<fieldset>
					<legend>LOGIN</legend><br>
					EMAIL:<br>
					<input type="text" name="logMail" id="logMail" value="<?php if(isset($_POST['logMail'])) echo $_POST['logMail']; ?>" /><br>
					PASSWORD:<br>
					<input type="password" name="logPass" id="logPass" value="<?php if(isset($_POST['logPass'])) echo $_POST['logPass']; ?>" /><br><br>
					<input type="submit" name="uLogSub" value="LOGIN" /><br>
				</fieldset>
			</fieldset></legend>
		</form></center>
		
	</body>
</html>