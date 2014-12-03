<?php
	if (!isset($_COOKIE['admin_id'])){
		require('../includes/logins.php');
		redirect();
	}else{
		setcookie('admin_id','',time()-3600);
		setcookie('fName','',time()-3600);
	}
	
	include('../includes/adminHead.php');
	
	echo "<h1>Logged out!</h1><h2>You are now logged out, {$_COOKIE['fName']}!</h2>";
	
	include('../includes/footer.php');
	
?>