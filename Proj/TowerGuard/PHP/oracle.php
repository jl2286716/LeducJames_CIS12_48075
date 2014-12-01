<?php include_once("../includes/signHead.php"); ?>
	
<center><h1>THE GUARDIANS' ORACLE</h1></center>
</br>
<center><h3>"We're Listening"</h3></center>

<center>
	<hr id="tLine" style="display:none">
	<div id="errors" style="color:red"></div>
	<hr id="bLine" style="display:none">
</center>

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
		
		//	Check birth date:
		$bDate = $_POST['bDate'];
		$regX = "/^\s*((([0])?[1-9])|([1][0-2]))([-\/\s])?((([0-2])?[1-9])|([3][0-1]))([-\/\s])?(([1][9][5-9][0-9])|([2][0]{2}[0-9])|([2][0][1][0-4]))\s*$/";
		
		if(empty($_POST['bDate'])){
			echo ("<script>var tagID = document.getElementById('bDate'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "You forgot to enter your birth date!";
		}elseif(preg_match($regX,$bDate)){
			echo ("<script>var tagID = document.getElementById('bDate'); tagID.style.backgroundColor='#00FF00';</script>");
			$bd = trim($_POST['bDate']);	//	$bd - 'birth date' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('bDate'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = 'Please, enter a valid birth date!(mmddyyyy)';
		}
		
		//	Check address 1:
		$add1 = $_POST['add1'];
		$regX = "/^\s*([1-9][0-9]*)[\s]([A-Za-z0-9]{1,4}[a-z]{1,20}[\s])?([A-Za-z]{1,20}[\s])?([A-Za-z]{1,20}[\s])?([A-Za-z]{2,15}([.])?)?\s*$/";
		
		if(empty($_POST['add1'])){
			echo ("<script>var tagID = document.getElementById('add1'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "You forgot to enter your street address in the 'Address 1' field!";
		}elseif(preg_match($regX,$add1)){
			echo ("<script>var tagID = document.getElementById('add1'); tagID.style.backgroundColor='#00FF00';</script>");
			$a1 = trim($_POST['add1']);	//	$a1 - 'address 1' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('add1'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "Please, enter a valid street address in the 'Address 1' field!";
		}

		//	Check address 2:
		$add2 = $_POST['add2'];
		if(empty($_POST['add2'])){
			$a2 = "";
		}elseif(preg_match($regX,$add2)){
			echo ("<script>var tagID = document.getElementById('add2'); tagID.style.backgroundColor='#00FF00';</script>");
			$a2 = trim($_POST['add2']);	//	$a2 - 'address 2' for SQL query
		}
		
		//	Check city:
		$city = $_POST['city'];
		$regX = "/^\s*[A-Za-z\s]+\s*$/";
		
		if(empty($_POST['city'])){
			echo ("<script>var tagID = document.getElementById('city'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "You forgot to enter your city!";
		}elseif(preg_match($regX,$city)){
			echo ("<script>var tagID = document.getElementById('city'); tagID.style.backgroundColor='#00FF00';</script>");
			$c = trim($_POST['city']);	//	$c - 'city' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('city'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "Please, enter a valid city!";
		}
		
		//	Check state:
		$state = $_POST['state'];
		$s = trim($_POST['state']);	//	$s - 'state' for SQL query

		//	Check zipcode:
		$zip = $_POST['zip'];
		$regX = "/^\s*\d{5}([-\s]\d{4})?\s*$/";
		
		if(empty($_POST['zip'])){
			echo ("<script>var tagID = document.getElementById('zip'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "You forgot to enter your zipcode!";
		}elseif(preg_match($regX,$zip)){
			echo ("<script>var tagID = document.getElementById('zip'); tagID.style.backgroundColor='#00FF00';</script>");
			$z = trim($_POST['zip']);	//	$z - 'zip' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('zip'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "Please, enter a valid zipcode!";
		}
		
		//	Check phone number:
		$phone = $_POST['phone'];
		$regX = "/^\s*([(\s])?(([2][0][1-9])|([2][1-9][0-9])|([3-8][0-9][0-9])|([9][0-8][0-9]))([-\s|)\s])?(\s)?([2-9][0-9]{2})([-\s])?([0-9]{4})\s*$/";
		
		if(empty($_POST['phone'])){
			echo ("<script>var tagID = document.getElementById('phone'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "You forgot to enter your phone number!";
		}elseif(preg_match($regX,$phone)){
			echo ("<script>var tagID = document.getElementById('phone'); tagID.style.backgroundColor='#00FF00';</script>");
			$pn = trim($_POST['phone']);	//	$pn - 'phone' for SQL query
		}else{
			echo ("<script>var tagID = document.getElementById('phone'); tagID.style.backgroundColor='#FF0000';</script>");
			$errors[] = "Please, enter a valid phone number!";
		}
		
		if(empty($errors)){	//	IF the form is filled out properly:
		
			//	Register to the database:
			//	Open ('require') the database connection:
			require ('mysqli_connect.php');
			//	Make the query:
			$q = "INSERT INTO jl2286716_proj_entity_users (fName,lName,eMail,passW,bDate,add1,add2,city,state,zip,phone,rDate) VALUES ('$fn','$ln','$m',SHA1('$p'),'$bd','$a1','$a2','$c','$s','$z','$pn',NOW())";
			//	Run the query:
			$r = @mysqli_query($dbc, $q);
			if($r){	//	IF query ran okay, "You are registered!":
				echo '<center><h1>Thank you! You are now registered!</h1></center>';
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
	action="oracle.php" onsubmit="" method="post">
	<legend><fieldset>
	
		<fieldset id="left">
			<legend>Basic Information</legend>
			
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
			
			<label>Birth Date:<br>
				<input type="text" name="bDate" id="bDate" maxlength="10"
					value="<?php if(isset($_POST['bDate'])) echo $_POST['bDate']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
		</fieldset>
		
		<fieldset id="right">
			<legend>Contact Information</legend>
			
			<label>Address 1*:<br>
				<input type="text" name="add1" id="add1"
					value="<?php if(isset($_POST['add1'])) echo $_POST['add1']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
			
			<label>Address 2:<br>
				<input type="text" name="add2" id="add2"
					value="<?php if(isset($_POST['add2'])) echo $_POST['add2']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
			
			<label>City*:<br>
				<input type="text" name="city" id="city"
					value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
			
			<label>State*:<br><!--use a drop down menu and list to validate-->
				<select type="text" name="state" id="state" maxlength="2"
					value="<?php if(isset($_POST['state'])) echo $_POST['state']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
					onclick="setState()">
					<option value="AK">AK</option>
					<option value="AL">AL</option>
					<option value="AR">AR</option>
					<option value="AZ">AZ</option>
					<option value="CA">CA</option>
					<option value="CO">CO</option>
					<option value="CT">CT</option>
					<option value="DC">DC</option>
					<option value="DE">DE</option>
					<option value="FL">FL</option>
					<option value="GA">GA</option>
					<option value="HI">HI</option>
					<option value="IA">IA</option>
					<option value="ID">ID</option>
					<option value="IL">IL</option>
					<option value="IN">IN</option>
					<option value="KS">KS</option>
					<option value="KY">KY</option>
					<option value="LA">LA</option>
					<option value="MA">MA</option>
					<option value="MD">MD</option>
					<option value="ME">ME</option>
					<option value="MI">MI</option>
					<option value="MN">MN</option>
					<option value="MO">MO</option>
					<option value="MS">MS</option>
					<option value="MT">MT</option>
					<option value="NC">NC</option>
					<option value="ND">ND</option>
					<option value="NE">NE</option>
					<option value="NH">NH</option>
					<option value="NJ">NJ</option>
					<option value="NM">NM</option>
					<option value="NV">NV</option>
					<option value="NY">NY</option>
					<option value="OH">OH</option>
					<option value="OK">OK</option>
					<option value="OR">OR</option>
					<option value="PA">PA</option>
					<option value="RI">RI</option>
					<option value="SC">SC</option>
					<option value="SD">SD</option>
					<option value="TN">TN</option>
					<option value="TX">TX</option>
					<option value="UT">UT</option>
					<option value="VA">VA</option>
					<option value="VT">VT</option>
					<option value="WA">WA</option>
					<option value="WI">WI</option>
					<option value="WV">WV</option>
					<option value="WY">WY</option>
				</select>
			</label><br>
			
			<label>Zipcode*:<br>
				<input type="text" name="zip" id="zip" maxlength="10"
					value="<?php if(isset($_POST['zip'])) echo $_POST['zip']; ?>"
					style="background-color:#FF7E00; font-weight:bold"
				/>
			</label><br>
			
			<label>Phone Number*:<br>
				<input type="text" name="phone" id="phone" maxlength="14"
					value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>"
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