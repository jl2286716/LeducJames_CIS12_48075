<?php
	if(!isset($_COOKIE['admin_id'])){
		require ('../includes/logins.php');	//	include login functions
		redirect();
	}
?>
<?php include_once("../includes/adminHead.php"); ?>

<?php include_once("../includes/dashMenu.php"); ?>

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['type_name'])){
			$tn = trim($_POST['type_name']);
			
			require ('mysqli_connect.php');
			
			//	add type to the database
			$q = 'INSERT INTO jl2286716_proj_enum_type (type_name) VALUES (?)';
			$stmt = mysqli_prepare($dbc, $q);
			mysqli_stmt_bind_param($stmt, 's', $tn);
			mysqli_stmt_execute($stmt);
			
			//	check results:
			if(mysqli_stmt_affected_rows($stmt) == 1){
				echo '<p>The type has been added.</p>';
				$_POST = array();
			}else{
				$error = 'The new gear type could not be added to the database!';
			}
			
			mysqli_stmt_close($stmt);	//	close the statement
			mysqli_close($dbc);			//	close the connection
		}else{
			$error = 'Please enter a new type name; e.g. patch, hoodie, t-shirt.';
		}
	}
	
	//	check and print errors:
	if(isset($error)){
		echo '<h1>Error!</h1>
		<p style="font-weight:bold;color:#C00">'.$error.'Please try again.</p>';
	}
?>
<!--	show form:	-->
<h1>Add a New Type</h1>

<form action="addType.php" method="post">
	<fieldset>
		<legend>
			<p>Add a new merchandise type:</p>
			<p>Example: poster, ball cap, or hoodie.</p>
		</legend>
		
		<b>New Type:</b><br>
		<input type="text" name="type_name" value="<?php if(isset($_POST['type_name'])) echo $_POST['type_name']; ?>" /><br>
	</fieldset>
	
	<div align="center"><input type="submit" name="submit" value="Submit" /></div>
</form>

<?php include_once("../includes/footer.php"); ?>
