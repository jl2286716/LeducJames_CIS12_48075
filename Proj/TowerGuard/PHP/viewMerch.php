<?php
	$row = FALSE;
	
	if(isset($_GET['mid']) && filter_var($_GET['mid'], FILTER_VALIDATE_INT, array('min_range' =>1))){
		$mid = $_GET['mid'];
		
		require ('mysqli_connect.php');
		
		$q = "SELECT type_name, item_name, price, size, color, desc, image_name FROM jl2286716_proj_enum_type, jl2286716_proj_entity_merch WHERE jl2286716_proj_enum_type.type_id=jl2286716_proj_entity_merch.type_id AND jl2286716_proj_entity_merch.merch_id=$mid";
		$r = mysqli_query($dbc, $q);
		
		if(mysqli_num_rows($r) == 1){
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			
			include_once("../includes/header.php");
			echo "<div align=\"center\">
				<center><h1 id=\"shadow\" >TOWER GEAR ~ THE MERCHANTS OF DEATH</h1></center><br>
				<center><h2 id=\"shadow\" >".$row['item_name']."</h2></center><br>
				<center><a href=\"cart.php\"><button>CART</button></a></center>
				<pre></pre>
			";
			
			echo(is_null($row['size'])) ? '(No size information available.)' : $row['size'];
			
			echo(is_null($row['color'])) ? '(No color information available.)' : $row['color'];
			
			echo "<br>\${$row['price']}
				<a href=\"addCart.php?mid=$mid\">Add to Cart</a>
				</div><br>";
				
			if($image = @getimagesize("../uplaods/$mid")){
				echo "<div align=\"center\"><img src=\"showImage.php?image=$mid&name=".urlcode($row['image_name'])."\" $image[3] alt=\"{$row['item_name']}\" /></div>\n";
			}else{
				echo "<div align=\"center\">No image available.</div>\n";
			}
			
			echo '<p align="center">'.((is_null($row['desc'])) ? '(No description available.)' : $row['desc']).'</p>';
		}
		mysqli_close($dbc);
	}

	if(!$row){
		include_once("../includes/header.php");
		echo '<div align="center">This page was accessed in error!</div>';
	}
?>

<?php include_once("../includes/footer.php"); ?>