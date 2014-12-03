<?php
	if(!isset($_COOKIE['admin_id'])){
		require ('../includes/logins.php');	//	include login functions
		redirect();
	}
?>
<?php include_once("../includes/adminHead.php"); ?>
	
<center>
	<hr id="tLine" style="display:none">
	<div id="errors" style="color:red"></div>
	<hr id="bLine" style="display:none">
</center>

<?php include_once("../includes/dashMenu.php"); ?>

<!--	Form Validators	-->
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
		$errors = array();
	
		//	Check first name:
		$fName = $_POST['fName'];
		$regX = "/^\s*[A-Z][a-z]{1,}([A-Z][a-z]{1,})?(([-\s][A-Z][a-z]{1,})|([A-Z][a-z]{1,}))?\s*$/";
		
		if(empty($_POST['fName'])){
			echo ("<script>var tagID = document.getElementById('fName'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = ("You forgot to enter your first name!");
		}elseif(preg_match($regX,$fName)){
			echo ("<script>var tagID = document.getElementById('fName'); tagID.style.backgroundColor='#00FF00';</script>");
			$fn = trim($_POST['fName']);	//	$fn - 'firstname' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('fName'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = 'Please, enter a valid first name!';
		}
		
		//	Check last name:
		$lName = $_POST['lName'];
		$regX = "/^\s*(([A-Z][a-z]{1,})([-][A-Z][a-z]{1,})?.*(\s+[A-Z][a-z]{1,})?|([A-Z][a-z'][a-zA-Z][a-z]{1,}))\s*$/";
		
		if(empty($_POST['lName'])){
			echo ("<script>var tagID = document.getElementById('lName'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = ("You forgot to enter your last name!");
		}elseif(preg_match($regX,$lName)){
			echo ("<script>var tagID = document.getElementById('lName'); tagID.style.backgroundColor='#00FF00';</script>");
			$ln = trim($_POST['lName']);	//	$ln - 'lastname' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('lName'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = 'Please, enter a valid last name!';
		}
		
		//	Check user name:
		$uName = $_POST['uName'];
		$regX = "/^\s*(([A-Z][a-z]{1,})([-][A-Z][a-z]{1,})?.*(\s+[A-Z][a-z]{1,})?|([A-Z][a-z'][a-zA-Z][a-z]{1,}))\s*$/";
		
		if(empty($_POST['uName'])){
			echo ("<script>var tagID = document.getElementById('uName'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = ("You forgot to enter your user name!");
		}elseif(preg_match($regX,$uName)){
			echo ("<script>var tagID = document.getElementById('uName'); tagID.style.backgroundColor='#00FF00';</script>");
			$un = trim($_POST['uName']);	//	$un - 'username' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('uName'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = 'Please, enter a valid user name!';
		}
		
		//	Check email:
		$eMail = $_POST['eMail'];
		$regX = "/^\s*[A-Za-z0-9]{1,}[@][A-Za-z]{1,15}[\.][A-Za-z]{1,5}([\.][A-Za-z]{1,5})?\s*$/";
		
		if(empty($_POST['eMail'])){
			echo ("<script>var tagID = document.getElementById('eMail'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "You forgot to enter your email!";
		}elseif(preg_match($regX,$eMail)){
			echo ("<script>var tagID = document.getElementById('eMail'); tagID.style.backgroundColor='#00FF00';</script>");
			$m = trim($_POST['eMail']);	//	$m - 'email' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('eMail'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = 'Please, enter a valid email!';
		}
		
		//	Check password:
		$passW = $_POST['passW'];
		$regX = "/((?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%^&*-_]).{5,15})/";
		
		if(empty($_POST['passW'])){
			echo ("<script>var tagID = document.getElementById('passW'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "You forgot to enter your password!";
		}elseif(preg_match($regX,$passW)){
			echo ("<script>var tagID = document.getElementById('passW'); tagID.style.backgroundColor='#00FF00';</script>");
			$p = trim($_POST['passW']);	//	$p - 'password' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('passW'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = 'Invalid Password! Please, enter a password with a length of 5-15 characters!';
			$errors[] = 'Include at least 1 letter, 1 number, and 1 special character (e.g. !@#$%^&*-_)!';
		}

		//	Verify password:
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
			require ('mysqli_connect.php');
			//	Make the query:
			$q = "INSERT INTO jl2286716_proj_entity_admins (fName,lName,uName,eMail,passW,rDate) VALUES ('$fn','$ln','$un','$m',SHA1('$p'),NOW())";
			//	Run the query:
			$r = @mysqli_query($dbc, $q);
			if($r){	//	IF query ran okay, "You are registered!":
				echo '<center><h1>Thank you! A new admin has been added!</h1></center>';
				echo '<center><h1>Now, <a href="login.php">LOGIN</a>!</h1></center>';
			
			}else{	//	ELSE "System Error!":
				echo '<h2 style="color:red">You could not be registered due to a system error. We apologize for any inconvenience.</h2>';
			}
			//	Close database
			mysqli_close($dbc);
		
		}else{	//	ELSE report the errors:
			showErrors($errors);
		}
	}
?>


<center><form name="signup" id="signup"
	action="newAdmin.php" onsubmit="" method="post">
	<legend><fieldset>
	
		<fieldset>
			<legend>Login Information</legend>
			
			<label>First Name*:<br>	<!-- color:#FF7E00 is a shade of Amber -->
				<input type="text" name="fName" id="fName"
					value="<?php if(isset($_POST['fName'])) echo $_POST['fName']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
			
			<label>Last Name*:<br>
				<input type="text" name="lName" id="lName"
					value="<?php if(isset($_POST['lName'])) echo $_POST['lName']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
			
			<label>User Name*:<br>
				<input type="text" name="uName" id="uName"
					value="<?php if(isset($_POST['uName'])) echo $_POST['uName']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
			
			<label>Email*:<br>
				<input type="text" name="eMail" id="eMail"
					value="<?php if(isset($_POST['eMail'])) echo $_POST['eMail']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
			
			<label>Password*:<br>
				<input type="password" name="passW" id="passW" maxlength="15"
					value="<?php if(isset($_POST['passW'])) echo $_POST['passW']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
			
			<label>Verify Password*:<br>
				<input type="password" name="vPass" id="vPass" maxlength="15"
					value="<?php if(isset($_POST['vPass'])) echo $_POST['vPass']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
		</fieldset>
		
		<p>&nbsp;</p>
		<center><input type="submit" value="Enter the TowerRealm"/>
		<pre></pre>
		<input type="reset" value="Return Defaults" /></center>
	</fieldset></legend>
</form></center>
<?php include_once("../includes/footer.php"); ?>