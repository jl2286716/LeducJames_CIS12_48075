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
			/*		Define functions		*/
			//	Fill Array with Calculated Values
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
			//	Read from the filled array and display into a table.
			function dispArr($vals,$yr,$rates){
				for($idx=0;$idx<$yr;$idx++){
					echo("<tr>");
					for($jdx=0;$jdx<$rates+2;$jdx++){
						if($jdx===0){
							echo("<td align='right'>".$vals[$idx][$jdx]."</td>");
						}else{
							echo("<td align='right'>$".(number_format($vals[$idx][$jdx],2))."</td>");
						}
					}
					echo("</tr>");
				}
			}
			
			//	Write code
			$inDep=100;
			$begAmt=$inDep;
			$years=50;
			$begRate=5;
			$endRate=10;
			$rateRange=$endRate-$begRate;
			
			echo("<h1>Savings Table</h1>");
			echo("<h2>Initial Deposit: $".$inDep."</h2>");
			echo("<h2>Interest Rate Range: ".$begRate."% to ".$endRate."%</h2>");
			echo("<h2>Years: ".$years."</h2>");
			
			//	Begin the table
			echo("<table width='auto' border='1'>");
			
			//	Output table headers
			echo("<tr>");
			echo("<th>Year</th>");
			for($c=$begRate;$c<($rateRange+6);$c++){
				echo("<th>".$c."%</th>");
			}
			echo("</tr>");
			
			//	Call functions
			$filled=fillArr($years,$rateRange,$begAmt,$inDep,$begRate);
			dispArr($filled,$years,$rateRange);
			
			//	Close the table
			echo("</table>");
			
			
			
			
		?>
        
    <body>
	
	
    </body>
</html>