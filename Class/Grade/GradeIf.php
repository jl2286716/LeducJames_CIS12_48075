<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        <?php
			/*
				James Leduc
				Sep 8, 2014
				Purpose: Illustrate branching constructs.
			*/
		?>
    </head>
    
    <body>
    	<?php
			// Initialize variables.
			$perGrade = 95; // Grade percentage.
			$letGrade; // Letter grade.
			
			//echo "<p>Please, enter a grade percentage: ";
			
			// Determine grade
			if($perGrade>=90)$letGrade='A';
			if($perGrade>=80&&$perGrade<90)$letGrade='B';
			if($perGrade>=70&&$perGrade<80)$letGrade='C';
			if($perGrade>=60&&$perGrade<70)$letGrade='D';
			if($perGrade<60)$letGrade='F';
			
			echo "<p>A scroe of " . $perGrade . "% = " . $letGrade . "."</p>;
		?>
    </body>
</html>