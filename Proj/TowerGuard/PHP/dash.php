<?php
	if(!isset($_COOKIE['admin_id'])){
		require ('../includes/logins.php');	//	include login functions
		redirect();
	}
?>
<?php include_once("../includes/header.php"); ?>

<?php include_once("../includes/dashMenu.php"); ?>

<?php include_once("../includes/footer.php"); ?>
