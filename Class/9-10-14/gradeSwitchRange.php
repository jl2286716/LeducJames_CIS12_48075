<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>If/Else</title>
    </head>
    
    <body>
    	<?php
			// Initialize input & declare variables
			$score=rand(50,100);
			$grade=null;
			// Determine grade - ranges ONLY works like this in PHP
			// But this will run fine without the ranges.
			switch(true){
				case $score>=90:			$grade='A';	break;	
				case $score>=80&&$score<90: $grade='B';	break;
				case $score>=70&&$score<80: $grade='C';	break;
				case $score>=60&&$score<70: $grade='D';	break;
				default: 					$grade='F';
			}
			// Output results
			echo "<h1>A score of $score = $grade</h1>";
		?>
    </body>
</html>