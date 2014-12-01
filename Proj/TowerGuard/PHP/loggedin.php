<?php
	if(!isset($_COOKIE['user_id'])){
		require ('../includes/logins.php');	//	include login functions
		redirect();
	}
?>
<?php include_once("../includes/header.php"); ?>
 <?php
	echo "<center><h1>Your are now logged in, {$_COOKIE['fName']}!</h1></center><br><br>";
	echo "<center><a href='logout.php'><button>LOGOUT</button></a></center><br><br>";
?>
<?php include_once("../includes/footer.php"); ?>
