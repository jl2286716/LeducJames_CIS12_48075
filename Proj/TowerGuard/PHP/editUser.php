<?php
	if(!isset($_COOKIE['admin_id'])){
		require ('../includes/logins.php');	//	include login functions
		redirect();
	}
?>
<?php include_once("../includes/adminHead.php"); ?>

<?php include_once("../includes/dashMenu.php"); ?>

<?php
	if((isset($_GET['id'])) && (is_numeric($_GET['id']))){
	
	}elseif(){
	
	}else{
	
	}
?>

<?php include('../includes/footer.php'); ?>
