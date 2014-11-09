<!doctype html>
<html lang="en">
	<head>
		<title>The Guardians' Oracle</title>
		<meta charset="utf-8">
		<script src=""></script>	<!-- Line for libraries -->
 		<link rel="stylesheet" href="styles.css">	<!-- Include Style Sheets -->
		<script>	//	Form Validators
			function validate_firstname(){
				var arr = document.forms["signup"]["fName"].value.match(/^\s*[A-Z][a-z]{1,}([A-Z][a-z]{1,})?(([-\s][A-Z][a-z]{1,})|([A-Z][a-z]{1,}))?\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("fName");
						tagID.style.backgroundColor='#00FF00'; //	color='#00FF00' is a shade of Lime
					<?php
						$fn=trim($_POST['fName']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID FIRST NAME!");
					var tagID = document.getElementById("fName");
						tagID.style.backgroundColor='#FF0000'; //	color='#FF0000' is Red; color='#FF8C69' is a shade of Salmon
					return false;
				}
			}
			function validate_lastname(){
				var arr = document.forms["signup"]["lName"].value.match(/^\s*(([A-Z][a-z]{1,})([-][A-Z][a-z]{1,})?.*(\s+[A-Z][a-z]{1,})?|([A-Z][a-z'][a-zA-Z][a-z]{1,}))\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("lName");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$ln=trim($_POST['lName']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID LAST NAME!");
					var tagID = document.getElementById("lName");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_email(){
				var arr = document.forms["signup"]["eMail"].value.match(/^\s*((.*\d)?(.*[a-z])?.{1,20})[@][a-z]{1,15}[.][a-z]{2,4}([.][a-z]{2,4})?\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("eMail");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$em=trim($_POST['eMail']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID EMAIL ADDRESS!");
					var tagID = document.getElementById("eMail");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_password(){
				var arr = document.forms["signup"]["passW"].value.match(/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%&*_-]).{6,20})/g);
				if (arr != null) {
					var tagID = document.getElementById("passW");
						tagID.style.backgroundColor='#00FF00';
					return true;
				} else {
					alert("PLEASE, ENTER A PASSWORD WITH AT LEAST 1 CAPITAL LETTER, 1 LOWERCASE LETTER, 1 NUMBER, AND 1 SPECIAL CHARACTER (!@#$%&*_-)!");
					alert("YOUR PASSWORD LENGTH MUST BE BETWEEN 6 AND 20 CHARACTERS!");
					var tagID = document.getElementById("passW");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function verify_password(){
				var pass = document.forms["signup"]["passW"].value;
				var vpass = document.forms["signup"]["vPass"].value;
				if(pass == vpass){
					var tagID = document.getElementById("vPass");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$pw=trim($_POST['passW']);
					?>
					return true;
				} else {
					alert("YOUR PASSWORDS DO NOT MATCH UP! PLEASE, CHECK YOUR 'CAPS LOCK' AND RETYPE YOUR PASSWORD!");
					var tagID = document.getElementById("vPass");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_birth(){
				var arr = document.forms["signup"]["bDay"].value.match(/^\s*((([0])?[1-9])|([1][0-2]))[-\/]((([0-2])?[1-9])|([3][0-1]))[-\/](([1][9][1-9][0-9])|([2][0]{2}[0-9])|([2][0][1][0-4]))\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("bDay");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$bd=trim($_POST['bDay']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID BIRTH DATE!");
					var tagID = document.getElementById("bDay");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_street_number(){
				var arr = document.forms["signup"]["sNum"].value.match(/^\s*[0-9]+\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("sNum");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$snu=trim($_POST['sNum']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID STREET NUMBER!");
					var tagID = document.getElementById("sNum");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_street_name(){
				var arr = document.forms["signup"]["sName"].value.match(/^\s*[A-Za-z0-9]+\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("sName");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$sna=trim($_POST['sName']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID STREET NAME!");
					var tagID = document.getElementById("sName");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_street_type(){
				var arr = document.forms["signup"]["sType"].value.match(/^\s*(st|St|Street|street|dr|Dr|Drive|drive|rd|Rd|Road|road|blvd|Blvd|Boulevard|boulevard|pl|Pl|Place|place|ct|Ct|Court|court|cir|Cir|Circle|circle|hwy|Hwy|Highway|highway|ave|Ave|Avenue|avenue|ln|Ln|Lane|lane)([\.])?\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("sType");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$sty=trim($_POST['sType']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID STREET TYPE (example: St., Ave., Blvd.)!");
					var tagID = document.getElementById("sType");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_apt_POBox(){	//can be empty
				var arr = document.forms["signup"]["aptPOB"].value.match(/^\s*[A-Za-z0-9]*\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("aptPOB");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$apo=trim($_POST['aptPOB']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID APARTMENT NUMBER OR P.O. BOX (NO SPECIAL CHARACTERS)!");
					var tagID = document.getElementById("aptPOB");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_city(){
				var arr = document.forms["signup"]["city"].value.match(/^\s*[A-Za-z\s]+\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("city");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$ci=trim($_POST['city']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID CITY NAME!");
					var tagID = document.getElementById("city");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_zip(){
				var arr = document.forms["signup"]["zip"].value.match(/^\s*\d{5}([-\s]\d{4})?\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("zip");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$zc=trim($_POST['zip']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID ZIP CODE!");
					var tagID = document.getElementById("zip");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_area(){	// 201-989
				var arr = document.forms["signup"]["area"].value.match(/^\s*(([2][0][1-9])|([2][1-9][0-9])|([3-8][0-9][0-9])|([9][0-8][0-9]))\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("area");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$ac=trim($_POST['area']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID AREA CODE!");
					var tagID = document.getElementById("area");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_phone(){	// Do not begin in 0 or 1
				var arr = document.forms["signup"]["phone"].value.match(/^\s*([2-9][0-9]{2})[-\/]?([0-9]{4})\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("phone");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$pn=trim($_POST['phone']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID PHONE NUMBER IN THE FORM OF ####### OR ###-####!");
					var tagID = document.getElementById("phone");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_form(){
				if(!validate_firstname())return false;
				if(!validate_lastname())return false;
				if(!validate_email())return false;
				if(!validate_password())return false;
				if(!verify_password())return false;
				if(!validate_birth())return false;
				if(!validate_street_number())return false;
				if(!validate_street_name())return false;
				if(!validate_street_type())return false;
				if(!validate_apt_POBox())return false;
				if(!validate_city())return false;
				if(!validate_zip())return false;
				if(!validate_area())return false;
				if(!validate_phone())return false;
				return true;
			}
			function setState(){
				var tagID = document.getElementById("state");
					tagID.style.backgroundColor='#00FF00';
				<?php
					$st=trim($_POST['state']);
				?>
			}
		</script>
	</head>
	<body>
		<?php
			//	Connect to the database:
			require('mysqli_connect.php');
			
			//	Create the query:
			$q = "INSERT INTO jl2286716_proj_entity_users(fName,lName,eMail,passW,bDay,sNum,sName,sType,aptPOB,city,state,zip,area,phone,rDate)
				VALUES($fn,$ln,$em,SHA1('$pw'),$bd,$snu,$sna,$sty,$apo,$ci,$st,$zc,$ac,$pn,NOW())";
				
			//	Run the query:
			$r = @mysqli_query($dbc,$q);
			
			//	Print verification:
			if($r){	//	If it ran OK...
				echo '<h1>Thank you!</h1><p>You are now a registered Guardian!</p><br>';
			}else{	//	If it didn't run OK...
				echo '<h1>System Error</h1><p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';
				
				//	Debugging message:
				echo '<p>'.mysqli_error($dbc).'<br><br>Query: '.$q.'</p>';
			}
			
			//	Close the database connection:
			mysqli_close($dbc);
		?>
	
		<center>
			<a href="index.html"><button>HOME</button></a>
			<a href="crew.html"><button>CREW</button></a>
			<a href="oracle.php"><button>THE ORACLE</button></a><!--Contact Us/Sign Up -->
			<a href="merch.html"><button>TOWER GEAR</button></a>
			<a href="login.html"><button>LOGIN</button></a>
		</center>
		<center><h1>THE GUARDIANS' ORACLE</h1></center>
		</br>
		<center><h3>"We're Listening"</h3></center>
		
		<center><form name="signup" id="signup"
			action="oracle.php" onsubmit="return validate_form()" method="post">
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
						<input type="password" name="passW" id="passW" maxlength="20"
							value="<?php if(isset($_POST['passW'])) echo $_POST['passW']; ?>"
							style="background-color:#FF7E00; font-weight:bold"
						/>
					</label><br>
					<label>Verify Password*:<br>
						<input type="password" name="vPass" id="vPass" maxlength="20"
							value="<?php if(isset($_POST['vPass'])) echo $_POST['vPass']; ?>"
							style="background-color:#FF7E00; font-weight:bold"
						/>
					</label><br>
					<label>Birth Date:<br>
						<input type="text" name="bDay" id="bDay" value="01-01-1900" maxlength="10"
							value="<?php if(isset($_POST['bDay'])) echo $_POST['bDay']; ?>"
							style="background-color:#FF7E00; font-weight:bold"
						/>
					</label><br>
				</fieldset>
				<fieldset id="right">
					<legend>Contact Information</legend>
					<label>Street Number*:<br>
						<input type="text" name="sNum" id="sNum" size="5"
							value="<?php if(isset($_POST['sNum'])) echo $_POST['sNum']; ?>"
							style="background-color:#FF7E00; font-weight:bold"
						/>
					</label><br>
					<label>Street Name*:<br>
						<input type="text" name="sName" id="sName"
							value="<?php if(isset($_POST['sName'])) echo $_POST['sName']; ?>"
							style="background-color:#FF7E00; font-weight:bold"
						/>
					</label><br>
					<label>Street Type*:<br>
						<input type="text" name="sType" id="sType" size="7"
							value="<?php if(isset($_POST['sType'])) echo $_POST['sType']; ?>"
							style="background-color:#FF7E00; font-weight:bold"
						/>
					</label><br>
					<label>Apt. # or P.O. Box:<br>
						<input type="text" name="aptPOB" id="aptPOB" maxlength="10"
							value="<?php if(isset($_POST['aptPOB'])) echo $_POST['aptPOB']; ?>"
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
						<input type="text" name="zip" id="zip" maxlength="10" size="7"
							value="<?php if(isset($_POST['zip'])) echo $_POST['zip']; ?>"
							style="background-color:#FF7E00; font-weight:bold"
						/>
					</label><br>
					<label>Area Code*:<br>
						<input type="text" name="area" id="area" maxlength="3" size="3"
							value="<?php if(isset($_POST['area'])) echo $_POST['area']; ?>"
							style="background-color:#FF7E00; font-weight:bold"
						/>
					</label><br>
					<label>Phone Number*:<br>
						<input type="text" name="phone" id="phone" maxlength="8" size="7"
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
	</body>
</html>