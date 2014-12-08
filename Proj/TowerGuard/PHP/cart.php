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
			<table border = "0" width="90%" cellspacing="3" cellpadding="3" align="center">
			<tr>
				<td align="left" width="60%"><b>Item Name</b></td>
				<td align="right" width="10%"><b>Price</b></td>
				<td align="center" width="10%"><b>Qty</b></td>
				<td align="right" width="10%"><b>Total Price</b></td>
			</tr>
		';
		
		$total = 0;	//	total cost of order
		
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
			$subtotal = $_SESSION['cart'][$row['merch_id']]['quantity']*$_SESSION['cart'][$row['merch_id']]['price']; 
			$total += $subtotal;
			
			echo "\t<tr>
				<td align=\"left\">{$row['item_name']}</td>
				<td align=\"right\">\${$_SESSION['cart'][$row['merch_id']]['price']}</td>
				<td align=\"center\"><input type=\"text\" size=\"3\" name=\"qty[{$row['merch_id']}]\" value=\"{$_SESSION['cart'][$row['merch_id']]['quantity']}\" /></td>
				<td align=\"right\">$" . number_format($subtotal,2) . "</td>
			</tr>\n";
		}
		mysqli_close($dbc);
		
		echo '<tr>
			<td colspan="3" align="right"><b>Total: </b></td>
			<td align="right">$' . number_format($total, 2) . '</td>
		</tr></table>
		<div align="center"><input type="submit" name="submit" value="Update My Cart" /></div>
		</form><p align="center">Enter a quantity of 0 to remove an item.<br><br>
		<a href="checkout.php">Checkout</a></p>';
	}else{
		echo '<p>Your cart is currently empty.</p>';
	}
?>
<?php include_once("../includes/footer.php"); ?>