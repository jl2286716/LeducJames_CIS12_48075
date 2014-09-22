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
			
			$degree = array();
			$radians = array();
			$sine = array();
			$cosine = array();
			$tangent = array();
			
			// Calculate
			for($angle=$angStart;$angle<=$angEnd;$angle+=$angInc){
				$degree[$angle]=$angle;
				$radians[$angle]=number_format($angle*atan(1)/45,4);
				$sine[$angle]=number_format(sin($radians[$angle]),4);
				$cosine[$angle]=number_format(cos($radians[$angle]),4);
				$tangent[$angle]=number_format(tan($radians[$angle]),4);
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
			for($angle=$angStart;$angle<=$angEnd;$angle+=$angInc){
				echo "<tr><td>".$degree[$angle]."</td>
					<td>".$radians[$angle]."</td>
					<td>".$sine[$angle]."</td>
					<td>".$cosine[$angle]."</td>
					<td>".$tangent[$angle]."</td></tr>";
			}
		?>
		</table>
    </body>
</html>