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
	
	//	Begin pagination:
	$display = 10;	//	number of records shown per page
	
	//	Determine number of pages:
	if(isset($_GET['p']) && is_numeric($_GET['p'])){	//	already determined
		$pages = $_GET['p'];
	}else{	//	need to determine
		//	Count records:
		$q = "SELECT COUNT(user_id) FROM jl2286716_proj_entity_users";
		$r = @mysqli_query($dbc, $q);
		$row = @mysqli_fetch_array($r, MYSQLI_NUM);
		$records = $row[0];
		
		//	Calculate number of pages:
		if($records > $display){	//	more than 1 page
			$pages = ceil($records/$display);
		}else{
			$pages = 1;
		}
	}
	
	//	Determine where in the database to start returning results:
	if(isset($_GET['s']) && is_numeric($_GET['s'])){
		$start = $_GET['s'];
	}else{
		$start = 0;
	}
	
	//	Determine the sort:
	$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'dr';	//	default sort is date registered 'dr'
	switch ($sort){	//	determine the sorting order
		case 'ln':	$order_by = 'lName ASC';
			break;
		case 'fn':	$order_by = 'fName ASC';
			break;
		case 'em':	$order_by = 'eMail ASC';
			break;
		case 'dr':	$order_by = 'rDate ASC';
			break;
		default:	$order_by = 'rDate ASC';
			$sort = 'dr';
			break;
	}
	
	// Define the query:
	$q = "SELECT lName, fName, eMail, rDate, user_id FROM jl2286716_proj_entity_users ORDER BY $order_by LIMIT $start, $display";
	$r = @mysqli_query($dbc, $q);
	
	$num = mysqli_num_rows($r);
	
	if($num > 0){
	
		echo "<center><p><b>There are currently $num registered users.</b></p></center>\n";
		
		echo '<table align="center" cellspacing="3" cellpadding="3" width="75%" id="uTable">
			<tr>
				<td align="left"><b>Edit</b></td>
				<td align="left"><b>Delete</b></td>
				<td align="left"><b><a href="viewUser.php?sort=ln">Last Name</a></b></td>
				<td align="left"><b><a href="viewUser.php?sort=fn">First Name</a></b></td>
				<td align="left"><b><a href="viewUser.php?sort=em">Email Address</a></b></td>
				<td align="left"><b><a href="viewUser.php?sort=dr">Date Registered</a></b></td>
			</tr>
		';
		
		//	fetch all the records:
		$bg = '#eeeeee';	//	set initial background color for banded rows
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
			$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');	//	created banded rows
			echo '<tr bgColor="'.$bg.'">
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
		
		//	Create other page links if necessary:
		if($pages > 1){
			echo '<br><p>';
			
			//	determine current page:
			$cPage = ($start/$display)+1;
			
			if($cPage != 1){	//	if not first page, create previous link
				echo '<a href="viewUser.php?s='.($start - $display).'&p='.$pages.'&sort='.$sort.'">Previous</a> ';
			}
			
			for($i=1;$i<=$pages;$i++){	//	make all numbered pages
				if($i != $cPage){
					echo '<a href="viewUser.php?s='.(($display*($i-1))).'&p='.$pages.'&sort='.$sort.'">'.$i.'</a> ';
				}else{
					echo $i.' ';
				}
			}
			
			if($cPage != $pages){	// if not last page, create next link
				echo '<a href="viewUser.php?s='.($start + $display).'&p='.$pages.'&sort='.$sort.'">Next</a>';
			}
		}
	}else{
		echo '<p style="color:red"><b>There are currently no registered users.</b></p>';
	}
	
	mysqli_close($dbc);
?>

<?php include('../includes/footer.php'); ?>