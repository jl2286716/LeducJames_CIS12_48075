<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <?php
                # James Leduc
                # For Loop examples for Tables
            ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Trig Form</title>
    </head>
        
    <body>
		<?php
			echo "<i>My PHP is working!</i>";
		?>
    	<h1>Trig Table</h1>
        <form action="Tables.php" method="get">
            <input name="angStart" type="text" />Starting Angle<br /> <!-- Get starting angle from user -->
            <input name="angEnd" type="text" />Ending Angle<br /> <!-- Get ending angle from user -->
            <input name="angInc" type="text" />Angle Increment<br /> <!-- Get angle increment from user -->
            <input name="Calculate&Display" type="submit" /> <!-- Submit data to Tables.php-->
        </form>
    </body>
</html>