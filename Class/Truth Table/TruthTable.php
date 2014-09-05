<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<?php
			/*
				Programmer: 	James Leduc
				Date Created: 	Sep 03, 2014
				Date Modified:	Sep 04, 2014
				Purpose: 		Create Truth Table
			*/
		?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Truth Table</title>
    </head>
    
    <body>
    	<?php // Echo out a page heading.
			echo "<center><h1>Truth Table</h1></center>";
		?>
		<?php // Echo out the open table tag and table headers.
			echo "<center><table width=auto border='1'>";
			
			echo "<tr><th rowspan='2'>X</th><th rowspan='2'>Y</th>";
			echo "<th colspan='2'><center>NOT</center></th>";
			echo "<th><center>AND</center></th><th><center>OR</center></th>";
			echo "<th colspan='3'><center>Exclusively OR</center></th>";
			echo "<th colspan='4'><center>Augustus De Morgan's Laws</center></th></tr>";
			
			echo "<tr><th>!X</th><th>!Y</th><th>X&&Y</th><th>X||Y</th>";
			echo "<th>X^Y</th><th>X^Y^Y</th><th>X^Y^X</th>";
			echo "<th>!(X&&Y)</th><th>!X||!Y</th><th>!(X||Y)</th><th>!X&&!Y</th></tr>";
		?>
	  	<?php // Echo out the T,T row.
			$x=true;
			$y=true;
			
			// Ternary Operator (If/Then/Else Statement) Syntax:
				// ('IF_condition'?'THEN_value_if_TRUE':'ELSE_value_if_FALSE')
			echo "<tr><td><center>".($x?"T":"F")."</center></td>";
			echo "<td><center>".($y?"T":"F")."</center></td>";
			echo "<td><center>".(!$x?"T":"F")."</center></td>";
			echo "<td><center>".(!$y?"T":"F")."</center></td>";
			echo "<td><center>".($x&&$y?"T":"F")."</center></td>";
			echo "<td><center>".($x||$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y^$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y^$x?"T":"F")."</center></td>";
			echo "<td><center>".(!($x&&$y)?"T":"F")."</center></td>";
			echo "<td><center>".(!$x||!$y?"T":"F")."</center></td>";
			echo "<td><center>".(!($x||$y)?"T":"F")."</center></td>";
			echo "<td><center>".(!$x&&!$y?"T":"F")."</center></td></tr>";
		?>
	  	<?php // Echo out the T,F row.
		 // $x is still true from former initialization.
			$y=false;
			
			echo "<tr><td><center>".($x?"T":"F")."</center></td>";
			echo "<td><center>".($y?"T":"F")."</center></td>";
			echo "<td><center>".(!$x?"T":"F")."</center></td>";
			echo "<td><center>".(!$y?"T":"F")."</center></td>";
			echo "<td><center>".($x&&$y?"T":"F")."</center></td>";
			echo "<td><center>".($x||$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y^$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y^$x?"T":"F")."</center></td>";
			echo "<td><center>".(!($x&&$y)?"T":"F")."</center></td>";
			echo "<td><center>".(!$x||!$y?"T":"F")."</center></td>";
			echo "<td><center>".(!($x||$y)?"T":"F")."</center></td>";
			echo "<td><center>".(!$x&&!$y?"T":"F")."</center></td></tr>";
		?>
	  	<?php // Echo out the F,T row.
			$x=false;
			$y=true;
			
			echo "<tr><td><center>".($x?"T":"F")."</center></td>";
			echo "<td><center>".($y?"T":"F")."</center></td>";
			echo "<td><center>".(!$x?"T":"F")."</center></td>";
			echo "<td><center>".(!$y?"T":"F")."</center></td>";
			echo "<td><center>".($x&&$y?"T":"F")."</center></td>";
			echo "<td><center>".($x||$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y^$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y^$x?"T":"F")."</center></td>";
			echo "<td><center>".(!($x&&$y)?"T":"F")."</center></td>";
			echo "<td><center>".(!$x||!$y?"T":"F")."</center></td>";
			echo "<td><center>".(!($x||$y)?"T":"F")."</center></td>";
			echo "<td><center>".(!$x&&!$y?"T":"F")."</center></td></tr>";
		?>
	  	<?php // Echo out the F,F row.
		 // $x is still false from former initialization.
			$y=false;
			
			echo "<tr><td><center>".($x?"T":"F")."</center></td>";
			echo "<td><center>".($y?"T":"F")."</center></td>";
			echo "<td><center>".(!$x?"T":"F")."</center></td>";
			echo "<td><center>".(!$y?"T":"F")."</center></td>";
			echo "<td><center>".($x&&$y?"T":"F")."</center></td>";
			echo "<td><center>".($x||$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y^$y?"T":"F")."</center></td>";
			echo "<td><center>".($x^$y^$x?"T":"F")."</center></td>";
			echo "<td><center>".(!($x&&$y)?"T":"F")."</center></td>";
			echo "<td><center>".(!$x||!$y?"T":"F")."</center></td>";
			echo "<td><center>".(!($x||$y)?"T":"F")."</center></td>";
			echo "<td><center>".(!$x&&!$y?"T":"F")."</center></td></tr>";
			
			// Close the table.
			echo "</table></center>";
		?>
		<?php // Echo out notes.
			// Exclusively OR notes.
			echo "<center><p><i>Notes:</p><p><b>Exclusively OR: </b></p>";
			echo "<p><b>X^Y</b> >> <b>true</b> if different, <b>false</b> if same</p>";
			echo "<p><b>X^Y^Y</b> >> the '<b>Y</b>'s cancel out</p>";
			echo "<p><b>X^Y^X</b> >> the '<b>X</b>'s cancel out</i></p></center>";
			
			// De Morgan's Laws notes.
			echo "<center><p><i><b>De Morgan's Laws: </b></p>";
			echo "<p><b>!(X&&Y)</b> >> distribute the <b>!</b>, changing <b>&&</b> to <b>||</b> >> <b>!X||!Y</b></p>";
			echo "<p><b>!(X||Y)</b> >> distribute the <b>!</b>, changing <b>||</b> to <b>&&</b> >> <b>!X&&!Y</b></i></p>";

		?>
    </body>
</html>