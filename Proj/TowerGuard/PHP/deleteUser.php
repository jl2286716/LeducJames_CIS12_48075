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
		$id = $_GET['id'];
	}elseif((isset($_POST['id'])) && (is_numeric($_POST['id']))){
		$id = $_POST['id'];
	}else{
		echo '<center><p style="color:red"><b>This page has been accessed in error.</b></p></center>';
		include('../includes/footer.php');
		exit();
	}

	require_once('../PHP/mysqli_connect.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if($_POST['sure'] == 'Yes'){
			$q = "DELETE FROM jl2286716_proj_entity_users WHERE user_id=$id LIMIT 1";
			$r = @mysqli_query($dbc,$q);
			
			if(mysqli_affected_rows($dbc) == 1){
				echo '<center><p style="color:red"><b>The user has been deleted.</b></p></center>';
			}else{
				echo '<center><p style="color:red"><b>The user could not be deleted due to a system error.</b></p></center>';
				echo '<p>'.mysqli_error($dbc).'<br>Query:'.$q.'</p>';
			}
		}else{
			echo '<center><p style="color:red"><b>The user has NOT been deleted.</b></p></center>';
		}
	}else{
		$q = "SELECT CONCAT(lName, ', ', fName) FROM jl2286716_proj_entity_users WHERE user_id=$id";
		$r = @mysqli_query($dbc, $q);
		
		if(mysqli_num_rows($r) == 1){
			$row = mysqli_fetch_array($r, MYSQLI_NUM);
			
			echo "<h3>Name: $row[0]</h3>Are you sure you want to delete this user?";
			
			echo '<form action="deleteUser.php" method="post">
					<input type="radio" name="sure" value="Yes" /> Yes
					<input type="radio" name="sure" value="No" checked="checked" /> No
					<input type="submit" name="submit" value="Submit" />
					<input type="hidden" name="id" value="'.$id.'" />
				</form>';
		}else{
			echo '<center><p style="color:red"><b>This has been accessed in error.</b></p></center>';
		}
	}
	
	mysqli_close($dbc);
?>

<?php include('../includes/footer.php'); ?>
