<?php
	/*
		Programmer: James Leduc
		Date: Aug 27, 2014
		Purpose: comments/variables/strings
		Version: 1.0
	*/
?>

<!-- html comment -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Strings and Variables</title>
</head>

	<body>
    	<?php
			//inline comments
			
			/*
				block comments
			*/
			
			//declare variable
			$hours=40;//Worked 40 hours
			$payRate=9;//$ per hour
			
			//calculate pycheck
			$grossPay=$hours*$payRate;
			
			//output result
			echo "<p>Hours Worked = $hours (hrs)</p>";
			echo '<p>Pay Rate = $$payRate</p>';
			echo "<p>Pay Check = $".$grossPay.'</p>';
		?>
	</body>
</html>