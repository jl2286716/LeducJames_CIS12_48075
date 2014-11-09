<?php include_once("../includes/header.php"); ?>
<?php
	//	Connect to the database:
	//require('mysqli_connect.php');
	
	//	Create the query:
	//$q = "INSERT INTO jl2286716_proj_entity_users(fName,lName,eMail,passW,bDay,sNum,sName,sType,aptPOB,city,state,zip,area,phone,rDate)
	//	VALUES($fn,$ln,$em,SHA1('$pw'),$bd,$snu,$sna,$sty,$apo,$ci,$st,$zc,$ac,$pn,NOW())";
		
	//	Run the query:
	//$r = @mysqli_query($dbc,$q);
	
	//	Print verification:
	//if($r){	//	If it ran OK...
		//echo '<h1>Thank you!</h1><p>You are now a registered Guardian!</p><br>';
	//}else{	//	If it didn't run OK...
		//echo '<h1>System Error</h1><p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';
		
		//	Debugging message:
	//	echo '<p>'.mysqli_error($dbc).'<br><br>Query: '.$q.'</p>';
	//}
	
	//	Close the database connection:
	//mysqli_close($dbc);
?>
	
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
<?php include_once("../includes/footer.php"); ?>