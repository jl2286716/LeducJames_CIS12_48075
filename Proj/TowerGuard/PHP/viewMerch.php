<?php include_once("../includes/header.php"); ?>
<center><h1 id="shadow" >TOWER GEAR ~ THE MERCHANTS OF DEATH</h1></center>
</br>
<center><a href="cart.php"><button>CART</button></a></center>
<pre></pre>

<?php
	$row = FALSE;
	
	if(isset($_GET['mid']) && filter_var($_GET['mid'], FILTER_VALIDATE_INT, array('min_range' =>1))){
		$mid = $_GET['mid'];
		require ('mysqli_connect.php');
		$q = "SELECT type_name, item_name, price, size, color, desc, image_name FROM jl2286716_proj_enum_type, jl2286716_proj_entity_merch WHERE jl2286716_proj_enum_type.type_id=jl2286716_proj_entity_merch.type_id AND jl2286716_proj_entity_merch.merch_id=$mid';

	}


?>

<?php include_once("../includes/footer.php"); ?>