<?php include_once("../includes/header.php"); ?>
<center><h1 id="shadow" >TOWER GEAR ~ THE MERCHANTS OF DEATH</h1></center>
</br>
<center><a href="cart.php"><button>CART</button></a></center>
<pre></pre>


<center><table width='auto' border='1'>
	<tr>
		<td><a href="https://soundcloud.com/towerguard">
			<img src="../images/Cover_Image.png" height="250" width="250">
		</a></td>
		<td><a href="#">
			<img src="../images/placeholder.jpg" height="250" width="250">
		</a></td>
		<td><a href="patches.php">
			<img src="../images/placeholder.jpg" height="250" width="250">
		</a></td>
	</tr>
	<tr>
		<td><h3><a href="https://soundcloud.com/towerguard">MUSIC</a></h3></td>
		<td><h3><a href="#">POSTERS</a></h3></td>
		<td><h3><a href="patches.php">PATCHES</a></h3></td>
	</tr>
	<tr>
		<td><a href="tshirts.php">
			<img src="../images/placeholder.jpg" height="250" width="250">
		</a></td>
		<td><a href="#">
			<img src="../images/placeholder.jpg" height="250" width="250">
		</a></td>
		<td><a href="#">
			<img src="../images/placeholder.jpg" height="250" width="250">
		</a></td>
	</tr>
	<tr>
		<td><h3><a href="tshirts.php">T-SHIRTS</a></h3></td>
		<td><h3><a href="#">HOODIES</a></h3></td>
		<td><h3><a href="#">BEANIES</a></h3></td>
	</tr>
</table></center>

<?php
	require ('mysqli_connect.php');
	
	$q = "SELECT jl2286716_proj_enum_type.type_id, type_name, item_name, price, desc, merch_id FROM jl2286716_proj_enum_type, jl2286716_proj_entity_merch WHERE jl2286716_proj_enum_type.type_id=jl2286716_proj_entity_merch.type_id ORDER BY jl2286716_proj_enum_type.type_name ASC";
	
	if(isset($_GET['aid']) && filter_var($_GET['aid'], FILTER_VALIDATE_INT, array('min_range' => 1))){
		$q = "SELECT jl2286716_proj_enum_type.type_id, type_name, item_name, price, desc, merch_id FROM jl2286716_proj_enum_type, jl2286716_proj_entity_merch WHERE jl2286716_proj_enum_type.type_id=jl2286716_proj_entity_merch.type_id AND jl2286716_proj_entity_merch.type_id={$_GET['aid']} ORDER BY jl2286716_proj_entity_merch.item_name";
	}

	echo '<table border="0" width="90%" cellspacing="3" cellpadding="3" align="center">
		<tr>
			<td align="left" width="20%"><b>Item Type</b></td>
			<td align="left" width="20%"><b>Item Name</b></td>
			<td align="left" width="40%"><b>Description</b></td>
			<td align="right" width="20%"><b>Price</b></td>
		</tr>';
		
	$r = mysqli_query($dbc, $q);
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
		echo "\t<tr>
			<td align=\"left\"><a href=\"merch.php?aid={$row['type_id']}\">{$row['type_name']}</a></td>
			<td align=\"left\"><a href=\"viewMerch.php?pid={$row['merch_id']}\">{$row['item_name']}</td>
			<td align=\"left\">{$row['desc']}</td>
			<td align=\"right\">\${$row['price']}</td>
		</tr>\n";
	}
	echo '</table>';
	mysqli_close($dbc);
?>
			
<?php include_once("../includes/footer.php"); ?>