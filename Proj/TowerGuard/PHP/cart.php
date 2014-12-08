<?php include_once("../includes/header.php"); ?>
<center><h1 id="shadow">MERCHANTS OF DEATH</h1></center>
</br>
<center><h3 id="shadow">"View your gear!"</h3></center>
<a href="checkout.php"><button>CHECKOUT</button></a>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		foreach($_POST['qty'] as $k => $v){
			$mid = (int) $k;
			$qty = (int) $v;
			
			if($qty == 0){
				unset($_SESSION['cart'][$mid]);
			}elseif($qty > 0){
				$_SESSION['cart'][$mid]['quantity'] = $qty;
			}
		}
	}
	
	if(!empty($_SESSION['cart'])){
		require ('mysqli_connect.php');
		
		$q = "SELECT merch_id, type_name, item_name FROM jl2286716_proj_enum_type, jl2286716_proj_entity_merch WHERE jl2286716_proj_enum_type.type_id=jl2286716_proj_entity_merch.type_id AND jl2286716_proj_entity_merch.merch_id IN (";
		foreach($_SESSION['cart'] as $mid => $value){
			$q .= $mid . ',';
		}
		$q = substr($q, 0, -1) . ') ORDER BY jl2286716_proj_enum_type.type_name ASC';
		$r = mysqli_query($dbc, $q);
		
		echo '<form action="cart.php" method="post">
			
	}
?>
<?php include_once("../includes/footer.php"); ?>