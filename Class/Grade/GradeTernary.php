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
			// Generates a random grade percentage.
			$perGrade = rand(50,100);
			// Determine grade
			$letGrade = ($perGrade >= 90)?'A':(
						($perGrade >= 80)?'B':(
						($perGrade >= 70)?'C':(
						($perGrade >= 60)?'D':'F')));
			
			echo "<h1>A score of $perGrade = $letGrade.</h1>";
		?>
    </body>
</html>