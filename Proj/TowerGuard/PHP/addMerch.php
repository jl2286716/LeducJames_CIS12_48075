<?php
	if(!isset($_COOKIE['admin_id'])){
		require ('../includes/logins.php');	//	include login functions
		redirect();
	}
?>
<?php include_once("../includes/adminHead.php"); ?>

<?php include_once("../includes/dashMenu.php"); ?>

<?php

	require ('mysqli_connect.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
		//	check for errors:
		$errors = array();
		
		//	validate the type:
		if(isset($_POST['type']) && filter_var($_POST['type'], FILTER_VALIDATE_INT, array('min_range' +> 1))){
			$t = $_POST['type'];
		}else{
			$errors[] = 'Please select the item\'s type!';
		}
		
		//	check item name:
		if(!empty($_POST['item_name'])){
			$in = trim($_POST['item_name']);
		}else{
			$errors[] = 'Please enter the item\'s name!';
		}
		
		//	check for price:
		if(is_numeric($_POST['price']) && ($_POST['price'] > 0)){
			$p = (float)$_POST['price'];
		}else{
			$errors[] = 'Please enter the item\'s price!';
		}
		
		//	check for size:
		$s = (!empty($_POST['size'])) ? trim($_POST['size'] : NULL;
		
		//	check for color:
		$c = (!empty($_POST['color'])) ? trim($_POST['color'] : NULL;
		
		//	check for description:
		$d = (!empty($_POST['desc'])) ? trim($_POST['desc'] : NULL;
		
		//	check for image:
		if(is_uploaded_file($_FILES['image']['tmp_name'])){
			$temp = '../uploads/'.md5($_FILES['image']['name']);	//	create temp file name
			
			//	move the file:
			if(move_uploaded_file($_FILES['image']['tmp_name'], $temp)){
				echo '<p>The file has been uploaded!</p>';
				$i = $_FILES['image']['name'];
			}else{
				$errors[] = 'The file could not be moved.';
				$temp = $_FILES['image']['tmp_name'];
			}
		}else{
			$errors[] = 'No file was uploaded.';
			$temp = NULL;
		}
		
		if(empty($errors)){	//	IF all is well
			$q = 'INSERT INTO jl2286716_proj_entity_merch (type_id, item_name, price, size, color, desc, image_name) VALUES (?,?,?,?,?,?,?)';
			$stmt = mysqli_prepare($dbc, $q);
			mysqli_stmt_bind_param($stmt, 'isdssss', $t, $in, $p, $s, $c, $d, $i);
			mysqli_stmt_execute($stmt);
			
			//	check results:
			if(mysqli_stmt_affected_rows($stmt) == 1){
				echo '<p>The item has been added!</p>';
				
				//	rename image:
				$id = mysqli_stmt_insert_id($stmt);	//	get item id
				rename($temp, "../uploads/$id");
				
				$_POST = array();	//	clear $_POST
			}else{	//	Error
				echo '<p style="font-weight:bold;color:#C00">Your submission could not be processed due to a system error.</p>';
			}
			
			mysqli_stmt_close($stmt);
		}
		
		//	delete temp file upload:
		if(isset($temp) && file_exists($temp) && is_file($temp)){
			unlink($temp);
		}
	}
	
	//	check for and print errors:
	if(!empty($errors) && is_array($errors)){
		echo '<h1>Error!</h1>
			<p style="font-weight:bold;color:#C00">The following error(s) occurred:<br>';
		foreach($errors as $msg){
			echo " - $msg<br>\n";
		}
		echo 'Please reselect the item image and try again.</p>';
	}
?>

<h1>Add an Item</h1>

<form enctype="multipart/form-data" action="addMerch.php" method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="524288" />
	<fieldset>
		<legend>Add a new item to the catalog:</legend>
		
		<b>Item Name:</b><br>
		<input type="text" name="item_name" size="30" maxlength="60" value="<?php if(isset($_POST['item_name'])) echo htmlspecialchars($_POST['item_name']); ?>" /><br>
		
		<b>Image:</b><br>
		<input type="file" name="image" /><br>
		
		<b>Type:</b><br>
		<select name="type"><option>Select One</option>
			<?php
				$q = "SELECT type_id, type_name FROM jl2286716_proj_enum_type ORDER BY type_name ASC";
				$r = mysqli_query($dbc, $q);
				if(mysqli_num_rows($r) > 0){
					while($row = mysqli_fetch_array($r, MYSQLI_NUM)){
						echo "<option value=\"$row[0]\"";
						if(isset($_POST['type']) && ($_POST['type'] == $row[0])) echo ' selected="selected"';
						echo ">$row[1]</option>\n";
					}
				}else{
					echo '<option>Please add a new item type first.</option>';
				}
				mysqli_close($dbc);
			?>
		</select><br>
		
		<b>Price:</b><br>
		<input type="text" name="price" size="10" maxlength="10" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>" /> <small>Do not include dollar sign or commas.</small><br>
		
		<b>Size:</b><br>
		<input type="text" name="size" size="30" maxlength="60" value="<?php if(isset($_POST['size'])) echo htmlspecialchars($_POST['size']); ?>" /> (optional)<br>
		
		<b>Color:</b><br>
		<input type="text" name="color" size="30" maxlength="60" value="<?php if(isset($_POST['color'])) echo htmlspecialchars($_POST['color']); ?>" /> (optional)<br>
		
		<b>Description:</b><br>
		<textarea name="desc" cols="40" rows="5"><?php if(isset($_POST['desc'])) echo $_POST['desc']; ?></textarea> (optional)<br>
		
	</fieldset>
	
	<div align="center"><input type="submit" name="submit" value="Submit" /></div>
</form>

<?php include_once("../includes/footer.php"); ?>
