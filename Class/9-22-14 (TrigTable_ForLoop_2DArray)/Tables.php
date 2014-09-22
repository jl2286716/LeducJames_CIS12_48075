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
			echo "<i>My PHP is working!</i>";
		?>
        <?php
					
			// $_GET input data from InputTables.php form - name/value pairs
			$angStart=$_GET['angStart'];
			$angEnd=$_GET['angEnd'];
			$angInc=$_GET['angInc'];
			
			$trigTab = array();
			
			for ($col=1;$col<=5;$col++){
				$trigTab[$col]=array();
			}
			
			// Calculate
			for(($angle=$angStart);($angle<=$angEnd);($angle+=$angInc)){
				$TrigTab[1][$angle]=$angle;
				$TrigTab[2][$angle]=number_format($angle*atan(1)/45,4);
				$TrigTab[3][$angle]=number_format(sin($TrigTab[2][$angle]),4);
				$TrigTab[4][$angle]=number_format(cos($TrigTab[2][$angle]),4);
				$TrigTab[5][$angle]=number_format(tan($TrigTab[2][$angle]),4);
			}
		?>
		<table width='auto' border='1'>
			<tr>
				<th>Radians</th>
				<th>Degrees</th>
				<th>Sine</th>
				<th>Cosine</th>
				<th>Tangent</th>
			</tr>
			<?php	
			// Print values
			for(($angle=$angStart);($angle<=$angEnd);($angle+=$angInc)){
				echo "<tr>";
				for($cols=1;$cols<=5;$cols++){
					"<td>".$TrigTab[$cols][$angle]."</td>";
				}
			echo "</tr>";
			}
		?>
		</table>
    </body>
</html>