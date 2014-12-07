<?php
	if(!isset($_COOKIE['admin_id'])){
		require ('../includes/logins.php');	//	include login functions
		redirect();
	}
?>
<?php include_once("../includes/adminHead.php"); ?>

<center><h1>Edit Merchandise</h1></center>

<?php include_once("../includes/dashMenu.php"); ?>
<div style="padding-left:20px">
	<a href="addType.php"><button>ADD TYPE</button></a> - Add a new merchandise category.<br>
</div>
<div style="padding-left:20px">
	<a href="addMerch.php"><button>ADD MERCH</button></a> - Add new merchandise.<br>
</div>

<?php include_once("../includes/footer.php"); ?>
