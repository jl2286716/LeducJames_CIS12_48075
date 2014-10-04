<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<?php
			# Programmer: James Leduc
			# Date Created: 10/02/2014
			# Purpose: Output savings table using functions and 2-D arrays
		?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Savings Table</title>
    </head>
		<?php
			//	Define functions
			function fillArr($year,$range,$save,$depo,$beg){
				$fill=[];
				for($i=0;$i<$year;$i++){
					$fill[$i]=[];
					for($j=0;$j<$range+2;$j++){	//	+2 for year column & to include the $endRate
						if($j===0){
							$fill[$i][0]=$i+1;	//	Fill the first column with year values.
						}else{
							$save+=$save*($beg/100);
							$fill[$i][$j]=$save;
						}
					}
					$beg++;
					$save=$depo;
				}
				return $fill;
			}
			function dispArr($vals){
				$vals = new array();
			}
			
			//	Write code
			$inDep=100;
			$begAmt=$inDep;
			$years=50;
			$begRate=5;
			$endRate=10;
			$rateRange=$endRate-$begRate;
			
			document.write("<h1>Savings Table</h1>");
			document.write("<h2>Initial Deposit: $".$inDep."</h2>");
			document.write("<h2>Interest Rate Range: ".$begRate."% to ".$endRate."%</h2>");
			document.write("<h2>Years: ".$years."</h2>");
			
			//	Begin the table
			document.write("<table>");
			
			//	Output table headers
			document.write("<tr>");
			document.write("<th>Year</th>");
			for($c=$begRate;$c<$rateRange;$c++){
				document.write("<th>".$c."%</th>");
			}
			document.write("</tr>");
			
			//	Call functions
			$filled=fillArr($years,$rateRange,$begAmt,$inDep,$begRate);
			$table=dispArr($filled);
			
			
			
			
			
		?>
        
    <body>
	
	
    </body>
</html>