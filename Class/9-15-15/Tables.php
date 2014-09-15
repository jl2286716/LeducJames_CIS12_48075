<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <?php
                # James Leduc
                # For Loop examples for Tables
            ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Trig-Table</title>
    </head>
        
    <body>
    	<h1>Trig Table</h1>
        <?php
			echo "<table width='200' border='1'>";
			echo "	<tr>
						<th>Radians;</th>
						<th>Degrees;</th>
						<th>Sine;</th>
						<th>Cosine;</th>
						<th>Tangent;</th>
					</tr>";
			// $_GET input data from InputTables.php form - name/value pairs
			$angStart=$_GET['angStart'];
			$angEnd=$_GET['angEnd'];
			$angInc=$_GET['andInc'];
			
			// For Loop
			for($angle=$angStart;$angle<=$angEnd;$angle+=$angInc){
				echo "<tr><td>$angle</td>";
					// Calculate
					$rad=number_format($angle*atan(1)/45,4);
					$sine=number_format(sin($rad),4);
					$cosine=number_format(cos($rad),4);
					$tangent=number_format(tan($rad),4);
				echo "<td>$rad</td>
						<td>$sine</td>
						<td>$cosine</td>
						<td>$tangent</td></tr>";
			  }
/*			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  */
			echo "</table>"
		?>
    </body>
</html>