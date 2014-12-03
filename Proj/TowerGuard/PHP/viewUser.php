<?php
	if(!isset($_COOKIE['admin_id'])){
		require ('../includes/logins.php');	//	include login functions
		redirect();
	}
?>
<?php include_once("../includes/adminHead.php"); ?>

<?php include_once("../includes/dashMenu.php"); ?>

<?php

	echo '<center><h1>Registered Users</h1></center>';
	
	require ('../PHP/mysqli_connect.php');		//	include database connection
	
	$q = "SELECT lName, fName, eMail, rDate, user_id FROM jl2286716_proj_entity_users ORDER BY rDate ASC";
	$r = @mysqli_query($dbc, $q);
	
	$num = mysqli_num_rows($r);
	
	if($num > 0){
	
		echo "<center><p><b>There are currently $num registered users.</b></p></center>\n";
		
		echo '<table align="center" cellspacing="3" cellpadding="3" width="75%" id="uTable">
			<tr>
				<td align="left"><b>Edit</b></td>
				<td align="left"><b>Delete</b></td>
				<td align="left"><b>Last Name</b></td>
				<td align="left"><b>First Name</b></td>
				<td align="left"><b>Email Address</b></td>
				<td align="left"><b>Date Registered</b></td>
			</tr>
		';
		
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
			echo '<tr>
					<td align="left"><a href="editUser.php?id='.$row['user_id'].'">Edit</a></td>
					<td align="left"><a href="deleteUser.php?id='.$row['user_id'].'">Delete</a></td>
					<td align="left">'.$row['lName'].'</td>
					<td align="left">'.$row['fName'].'</td>
					<td align="left">'.$row['eMail'].'</td>
					<td align="left">'.$row['rDate'].'</td>
				</tr>
			';
		}
		
		echo '</table>';
		mysqli_free_result($r);
	}else{
		echo '<p style="color:red"><b>There are currently no registered users.</b></p>';
	}
	
	mysqli_close($dbc);


?>

<?php include('../includes/footer.php'); ?>
