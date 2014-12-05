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
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){	//	check form submission
		$errors = array();
		
		if(empty($_POST['fName'])){	//	check for first name
			$errors[] = 'You forgot to enter your first name.';
		}else{
			$fn = mysqli_real_escape_string($dbc, trim($_POST['fName']));
		}
		
		if(empty($_POST['lName'])){	//	check for last name
			$errors[] = 'You forgot to enter your last name.';
		}else{
			$fn = mysqli_real_escape_string($dbc, trim($_POST['lName']));
		}
		
		if(empty($_POST['eMail'])){	//	check for email
			$errors[] = 'You forgot to enter your email.';
		}else{
			$fn = mysqli_real_escape_string($dbc, trim($_POST['eMail']));
		}
		
		if(empty($errors)){	//	if everything worked okay
			
			//	Test for unique email address:
			$q = "SELECT user_id FROM jl2286716_proj_entity_users WHERE eMail='$e' AND user_id != $id";
			$r = @mysqli_query($dbc, $q);
			if(mysqli_num_rows($r) == 0){
				$q = "UPDATE jl2286716_proj_entity_users SET fName='$fn', lName='$ln', eMail='$e' WHERE user_id=$id LIMIT 1";
				$r = @mysqli_query($dbc, $q);
				if(mysqli_affected_rows($dbc) == 1){
					echo '<center><h2 style="color:red"><b>The user has been edited.</b></h2></center>';
				}else{
					echo '<center><h2 style="color:red"><b>The user could not be deleted due to a system error.</b></h2></center>';
					echo '<p>'.mysqli_error($dbc).'<br>Query:'.$q.'</p>';
				}
			}else{
				echo '<center><h2 style="color:red"><b>This email address has already been registered.</b></h2></center>';
			}
		}else{
			echo '<center><h2 style="color:red">The following error(s) occurred:</h2></center>';
			echo '<center><p style="color:red">';
			foreach($errors as $msg){
				echo " - $msg<br>\n";
			}
			echo '</p><p>Please try again.</p>';
		}
	}
	
	$q = "SELECT fName, lName, eMail FROM jl2286716_proj_entity_users WHERE user_id=$id";
	$r = @mysqli_query($dbc, $q);
	
	if(mysqli_num_rows($r) == 1){
		$row = mysqli_fetch_array($r, MYSQLI_NUM);
		
		echo '<form action="editUser.php" method="post">
				First Name:<br>
				<input type="text" name="fName" value="'.$row[0].'" /><br>
				Last Name:<br>
				<input type="text" name="lName" value="'.$row[1].'" /><br>
				Email Address:<br>
				<input type="text" name="eMail" value="'.$row[1].'" /><br>
				<input type="submit" name="submit" value="Submit" />
				<input type="hidden" name="id" value="'.$id.'" />
			</form>';
	}else{
		echo '<center><p style="color:red"><b>This page has been accessed in error.</b></p></center>';
	}
	
	mysqli_close($dbc);
?>

<?php include('../includes/footer.php'); ?>
