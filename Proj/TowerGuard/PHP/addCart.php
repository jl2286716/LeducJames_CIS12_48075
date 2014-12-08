<?php include_once("../includes/header.php"); ?>

<?php
	if(isset($_GET['mid']) && filter_var($_GET['mid'], FILTER_VALIDATE_INT, array('min_range' => 1))){
		$mid = $_GET['mid'];
		
		if(isset($_SESSION['cart'][$mid])){
			$_SESSION['cart'][$mid]['qty']++;
		}else{
			require ('mysqli_connect.php');
			
			$q = "SELECT price FROM jl2286716_proj_entity_merch WHERE merch_id=$mid";
			$r = mysqli_query($dbc, $q);
			if(mysqli_num_rows($r) == 1){
				list($price) = mysqli_fetch_array($r, MYSQLI_NUM);
				
				$_SESSION['cart'][$mid] = array('qty' => 1, 'price' => $price);
			}else{
				echo '<center>ERROR!</center>';
			}
			mysqli_close($dbc);
		}
	}else{
		echo '<center>ERROR!</center>';
	}
?>

<?php include_once("../includes/footer.php"); ?>