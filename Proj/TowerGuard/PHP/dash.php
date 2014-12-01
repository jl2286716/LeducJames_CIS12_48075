<?php
	if(!isset($_COOKIE['admin_id'])){
		require ('../includes/logins.php');	//	include login functions
		redirect();
	}
?>
<?php include_once("../includes/header.php"); ?>
<center><h1>TOWER GUARD ADMINISTRATION</h1></center><br>
<center><h2>Welcome, Administrator  <?php echo "{$_COOKIE['fName']}"; ?>!</h2></center><br><br>
<center><h2>Dashboard</h2></center><br>
<div id="dash"><br>
	<center><a href="#"><button>VIEW/EDIT USERS</button></a></center><br>
	<center><a href="#"><button>VIEW/EDIT ORDERS</button></a></center><br>
	<center><a href="#"><button>VIEW/EDIT MERCH</button></a></center><br>
	<center><a href="#"><button>VIEW/EDIT PHOTOS</button></a></center><br>
	<center><a href="#"><button>VIEW/EDIT VIDEOS</button></a></center><br>
	<center><a href="#"><button>ADD/REMOVE ADMIN</button></a></center><br>
</div>
<br><br>

<?php include_once("../includes/footer.php"); ?>
