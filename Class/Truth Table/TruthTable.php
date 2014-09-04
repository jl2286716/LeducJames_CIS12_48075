<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<?php
			/*
				James Leduc
				9/3/14
				Purpose: Duplicate Truth Table
			*/
		?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Boolean Truth Table</title>
    </head>
    
    <body>
    	<?php // Echo out a page heading.
			echo "<center><h1>Boolean Truth Table</h1></center>";
		?>
		<?php // Echo out the open table tag and table headers.
			echo "<center><table width='200' border='1'>";
			
			echo "<tr><th colspan='2'>Boolean</th><th colspan='2'><center>NOT</center></th>";
			echo "<th><center>AND</center></th><th><center>OR</center></th>";
			echo "<th colspan='3'><center>Exclusively OR</center></th>";
			echo "<th colspan='4'><center>De Morgan's Laws</center></th></tr>";
			
			echo "<tr><th>X</th><th>Y</th><th>!X</th><th>!Y</th><th>X&&Y</th><th>X||Y</th>";
			echo "<th>X^Y</th><th>X^Y^Y</th><th>X^Y^X</th>";
			echo "<th>!(X&&Y)</th><th>!X||!Y</th><th>!(X||Y)</th><th>!X&&!Y</th></tr>";
		?>
	  	<?php // Echo out row 1: T,T
			$x=true;
			$y=true;
			// If/Then/Else Statement Syntax:
				// ('condition'?'value if true':'value if false')
			echo "<tr><td>".($x?"T":"F")."</td>";
			echo "<td>".($y?"T":"F")."</td>";
			echo "<td>".(!$x?"T":"F")."</td>";
			echo "<td>".(!$y?"T":"F")."</td>";
			echo "<td>".($x&&$y?"T":"F")."</td>";
			echo "<td>".($x||$y?"T":"F")."</td>";
			echo "<td>".($x^$y?"T":"F")."</td>";
			echo "<td>".($x^$y^$y?"T":"F")."</td>";
			echo "<td>".($x^$y^$x?"T":"F")."</td>";
			echo "<td>".(!($x&&$y)?"T":"F")."</td>";
			echo "<td>".(!$x||!$y?"T":"F")."</td>";
			echo "<td>".(!($x||$y)?"T":"F")."</td>";
			echo "<td>".(!$x&&!$y?"T":"F")."</td></tr>";
		?>
	  	<?php // Echo out row 2: T,F
			$y=false;
			echo "<tr><td>".($x?"T":"F")."</td>";
			echo "<td>".($y?"T":"F")."</td>";
			echo "<td>".(!$x?"T":"F")."</td>";
			echo "<td>".(!$y?"T":"F")."</td>";
			echo "<td>".($x&&$y?"T":"F")."</td>";
			echo "<td>".($x||$y?"T":"F")."</td>";
			echo "<td>".($x^$y?"T":"F")."</td>";
			echo "<td>".($x^$y^$y?"T":"F")."</td>";
			echo "<td>".($x^$y^$x?"T":"F")."</td>";
			echo "<td>".(!($x&&$y)?"T":"F")."</td>";
			echo "<td>".(!$x||!$y?"T":"F")."</td>";
			echo "<td>".(!($x||$y)?"T":"F")."</td>";
			echo "<td>".(!$x&&!$y?"T":"F")."</td></tr>";
		?>
	  	<?php // Echo out row 3: F,T
			$x=false;
			$y=true;
			echo "<tr><td>".($x?"T":"F")."</td>";
			echo "<td>".($y?"T":"F")."</td>";
			echo "<td>".(!$x?"T":"F")."</td>";
			echo "<td>".(!$y?"T":"F")."</td>";
			echo "<td>".($x&&$y?"T":"F")."</td>";
			echo "<td>".($x||$y?"T":"F")."</td>";
			echo "<td>".($x^$y?"T":"F")."</td>";
			echo "<td>".($x^$y^$y?"T":"F")."</td>";
			echo "<td>".($x^$y^$x?"T":"F")."</td>";
			echo "<td>".(!($x&&$y)?"T":"F")."</td>";
			echo "<td>".(!$x||!$y?"T":"F")."</td>";
			echo "<td>".(!($x||$y)?"T":"F")."</td>";
			echo "<td>".(!$x&&!$y?"T":"F")."</td></tr>";
		?>
	  	<?php // Echo out row 4: F,F
			$y=false;
			echo "<tr><td>".($x?"T":"F")."</td>";
			echo "<td>".($y?"T":"F")."</td>";
			echo "<td>".(!$x?"T":"F")."</td>";
			echo "<td>".(!$y?"T":"F")."</td>";
			echo "<td>".($x&&$y?"T":"F")."</td>";
			echo "<td>".($x||$y?"T":"F")."</td>";
			echo "<td>".($x^$y?"T":"F")."</td>";
			echo "<td>".($x^$y^$y?"T":"F")."</td>";
			echo "<td>".($x^$y^$x?"T":"F")."</td>";
			echo "<td>".(!($x&&$y)?"T":"F")."</td>";
			echo "<td>".(!$x||!$y?"T":"F")."</td>";
			echo "<td>".(!($x||$y)?"T":"F")."</td>";
			echo "<td>".(!$x&&!$y?"T":"F")."</td></tr>";
			
			// Close the table.
			echo "</table></center>";
		?>
		<?php // Echo out notes.
			// Exclusively OR
			echo "<enter><p><i>Note: <b>Exclusively OR</b></i></p></center>";
			echo "<enter><p><i>X^Y = true if different, false if same.</i></p></center>";
			echo "<enter><p><i>X^Y^Y = the 'Y's cancel each other out.</i></p></center>";
			echo "<enter><p><i>X^Y^X = the 'X's cancel each other out.</i></p></center></i></p>";
		?>
    </body>
</html>