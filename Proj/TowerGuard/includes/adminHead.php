<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="tower, guard, music, rock, metal, death, viking" />
		<meta name="description" content="" />
		<script src=""></script>	<!-- Line for libraries -->
		<link rel="stylesheet" href="../CSS/styles.css">	<!-- Include Style Sheets -->
		<title>Tower Guard</title>
		<?php
			//	Display the Errors:
			function showErrors($errors){
				echo ('<script>var tagID = document.getElementById("tLine");');
				echo ('tagID.style.display="block";');
				echo ('tagID = document.getElementById("bLine");');
				echo ('tagID.style.display="block";');
				echo ('tagID = document.getElementById("errors");');
				echo ('tagID.innerHTML = "<h2 style=\"color:red\">ERRORS!</h2><p><b>The following errors occurred:</b></p><p>');
				foreach($errors as $msg){
					echo '<b> * '.$msg.' * </b><br>\n';
				}
				echo ('</p><p>Please, try again!</p>"</script>');
			}
		?>
	</head>
	<body>
		<br><br><br>
		<center>
			<a href="home.php"><button>HOME</button></a>&nbsp&nbsp
			<a href="crew.php"><button>CREW</button></a>&nbsp&nbsp
			<a href="merch.php"><button>GEAR</button></a>&nbsp&nbsp
			<?php
				if((isset($_COOKIE['admin_id'])) && (basename($_SERVER['PHP_SELF']) != 'adminOut.php')){
					echo '<a href="adminOut.php"><button>LOGOUT</button></a>';
				}else{
					echo '<a href="login.php"><button>LOGIN</button></a>';
				}
			?>
		</center>
