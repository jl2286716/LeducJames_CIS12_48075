<?php include_once("../includes/header.php"); ?>

<center><h2>We are <i>your</i>...</h2></center>
<center><h1>TOWER GUARD</h1></center>
</br>
<center><h2>Guardians, Login!</h2></center>
<br><br>

<center><form name="uLog" id="uLog" action="" method="" >
	<legend><fieldset>
		<fieldset>
			<legend>GUARDIAN LOGIN</legend><br>
			EMAIL:<br>
			<input type="text" name="logMail" id="logMail" value="" /><br>
			PASSWORD:<br>
			<input type="password" name="logPass" id="logPass" value="" /><br><br>
			<input type="submit" value="LOGIN" /><br>
		</fieldset>
	</fieldset></legend>
</form></center>

<center><form name="aLog" id="aLog" action="dash.php" method="" >
	<legend><fieldset>
		<fieldset>
			<legend>ADMIN LOGIN</legend><br>
			USER:<br>
			<input type="text" name="admMail" id="admMail" value="" /><br>
			PASSWORD:<br>
			<input type="password" name="admPass" id="admPass" value="" /><br><br>
			<input type="submit" value="LOGIN" /><br>
		</fieldset>
	</fieldset></legend>
</form></center>

<br><br>

<?php include_once("../includes/footer.php"); ?>
