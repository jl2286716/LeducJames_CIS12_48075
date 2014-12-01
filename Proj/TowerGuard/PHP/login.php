<?php include_once("../includes/header.php"); ?>

<center><h2>We are <i>your</i>...</h2></center>
<center><h1>TOWER GUARD</h1></center>
</br>
<center><h2>Guardians, Login!</h2></center>
<br><br>

<?php	//	check user logins:
	if($_SEVER['REQUEST_METHOD'] == 'POST'){
		require ('../includes/logins.php');	//	include login functions
		require ('mysqli_connect.php');		//	include database connection
		
		//	check logins
		if(isset($_POST['uLogSub'])){
			list($check, $data) = checkUser($dbc, $_POST['logMail'], $_POST['logPass']);
			
			if($check){
				setcookie('user_id',$data['user_id']);
				setcookie('fName',$data['fName']);
				
				redirect('loggedin.php');
			}else{
				$errors = $data;
			}
		}elseif(isset($_POST['aLogSub'])){
			list($check, $data) = checkAdmin($dbc, $_POST['uName'], $_POST['admPass']);
			
			if($check){
				setcookie('admin_id',$data['admin_id']);
				setcookie('fName',$data['fName']);
				
				redirect('loggedin.php');
			}else{
				$errors = $data;
			}
		}
		mysqli_close($dbc);
	}
?>


<center><form name="uLog" id="uLog" action="" onsubmit="" method="post" >
	<legend><fieldset>
		<fieldset>
			<legend>GUARDIAN LOGIN</legend><br>
			EMAIL:<br>
			<input type="text" name="logMail" id="logMail" value="<?php if(isset($_POST['logMail'])) echo $_POST['logMail']; ?>" /><br>
			PASSWORD:<br>
			<input type="password" name="logPass" id="logPass" value="<?php if(isset($_POST['logPass'])) echo $_POST['logPass']; ?>" /><br><br>
			<input type="submit" name="uLogSub" value="LOGIN" /><br>
		</fieldset>
	</fieldset></legend>
</form></center>

<center><form name="aLog" id="aLog" action="dash.php" onsubmit="" method="post" >
	<legend><fieldset>
		<fieldset>
			<legend>ADMIN LOGIN</legend><br>
			USER:<br>
			<input type="text" name="uName" id="uName" value="<?php if(isset($_POST['uName'])) echo $_POST['uName']; ?>" /><br>
			PASSWORD:<br>
			<input type="password" name="admPass" id="admPass" value="<?php if(isset($_POST['admPass'])) echo $_POST['admPass']; ?>" /><br><br>
			<input type="submit" name="aLogSub" value="LOGIN" /><br>
		</fieldset>
	</fieldset></legend>
</form></center>

<br><br>

<?php include_once("../includes/footer.php"); ?>
