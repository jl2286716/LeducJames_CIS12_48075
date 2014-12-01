<?php include_once("../includes/header.php"); ?>

<center><h2>We are <i>your</i>...</h2></center>
<center><h1>TOWER GUARD</h1></center>
</br>
<center><h2>Guardians, Login!</h2></center>
<br><br>



<center><form name="uLog" id="uLog" action="" method="get" >
	<legend><fieldset>
		<fieldset>
			<legend>GUARDIAN LOGIN</legend><br>
			EMAIL:<br>
			<input type="text" name="logMail" id="logMail" value="<?php if(isset($_GET['logMail'])) echo $_GET['logMail']; ?>" /><br>
			PASSWORD:<br>
			<input type="password" name="logPass" id="logPass" value="<?php if(isset($_GET['logPass'])) echo $_GET['logPass']; ?>" /><br><br>
			<input type="submit" value="LOGIN" /><br>
		</fieldset>
	</fieldset></legend>
</form></center>

<center><form name="aLog" id="aLog" action="dash.php" method="get" >
	<legend><fieldset>
		<fieldset>
			<legend>ADMIN LOGIN</legend><br>
			USER:<br>
			<input type="text" name="admMail" id="admMail" value="<?php if(isset($_GET['admMail'])) echo $_GET['admMail']; ?>" /><br>
			PASSWORD:<br>
			<input type="password" name="admPass" id="admPass" value="<?php if(isset($_GET['admPass'])) echo $_GET['admPass']; ?>" /><br><br>
			<input type="submit" value="LOGIN" /><br>
		</fieldset>
	</fieldset></legend>
</form></center>

<br><br>

<?php include_once("../includes/footer.php"); ?>
