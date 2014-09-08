<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ternary Grade</title>
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
			$perGrade = rand(50,100); // Grade percentage.
			$letGrade; // Letter grade.
			
			//echo "<p>Please, enter a grade percentage: ";
			
			// Determine grade
			$letGrade = ($perGrade >= 90)?'A':(
						($perGrade >= 80)?'B':(
						($perGrade >= 70)?'C':(
						($perGrade >= 60)?'D':'F')));
			
			echo "<p>A score of $perGrade = $letGrade.</p>";
		?>
    </body>
</html>