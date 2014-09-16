<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <?php
                # Programmer: James Leduc
                # Date Created: 9/15/2014
				# Purpose: Output electromagnetic spectrum based upon user input from "InputWave.html"
            ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>E-Mag Spec</title>
    </head>
        
    <body>
    	<h1>Electro Magnetic Spectrum</h1>
		<?php
			echo "<i>My PHP is working!</i>";
		?>
        <?php
			// $_GET input data from "InputWave.html" form - name/value pair
			$meters=$_GET['meters'];

			// Start table
			echo "<table width='200' border='1'>";
			
			// Output headers
			echo "<tr><th>Spectrum</th>";
			echo "<th>Beginning Range</th>";
			echo "<th>Ending Range</th></tr>";
					
			echo "</table>";
		?>
    </body>
</html>