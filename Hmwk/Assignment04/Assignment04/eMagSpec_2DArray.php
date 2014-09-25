<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <?php
                # Programmer: James Leduc
                # Date Created: 9/23/2014
				# Purpose: Output electromagnetic spectrum using a 2-D array
            ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>E-Mag Spec</title>
    </head>
        
    <body>
    	<h1><center>ElectroMagnetic Spectrum</center></h1>
		<h2><center>Using 2D Array</center></h2>
  
        <?php
			// Calculation variables
			$radioMax 	= (10e4);		// Radio <= 10^4
			$radioMin 	= (10e-1);		// Radio >= 10^-1
			$microMin 	= (10e-3);		// 10^-1 > Microwaves >= 10^-3
			$infraMin 	= (7*(10e-7));	// 10^-3 > Infrared >= 7*10^-7
			$visiMin 	= (4*(10e-7));	// 7*10^-7 > Visible Light >= 4*10^-7
			$ultraMin 	= (10e-8);		// 4*10^-7 > Ultraviolet >= 10^-8
			$xrayMin 	= (10e-11);		// 10^-8 > X-Ray >= 10^-11
			$gammaMin 	= (10e-13);		// 10^-11 > Gamma >= 3^-13
			
			// Fill Wavelength array
			$waveArr = array();
			for($j=-12;$j<=5;$j++){
				$waveArr[$j+12] = pow(10,$j);
			}
			
			// Fill Table array
			$tableArr = array();
			for($i=0;$i<18;$i++){
				$tableArr[$i][0] = $i+1;
				$tableArr[$i][1] = "10^".($i-13)."";
				if($waveArr[$i] <= $radioMax && $waveArr[$i] >= $radioMin){		// Radio Wavelength
					$tableArr[$i][2] = "Radio";
				}elseif($waveArr[$i] < $radioMin && $waveArr[$i] >= $microMin){	// Microwave Wavelength
					$tableArr[$i][2] = "Microwave";
				}elseif($waveArr[$i] < $microMin && $waveArr[$i] >= $infraMin){	// Infrared Wavelength
					$tableArr[$i][2] = "Infrared";
				}elseif($waveArr[$i] < $infraMin && $waveArr[$i] >= $visiMin){	// Visible Light Wavelength
					$tableArr[$i][2] = "Visible Light>";
				}elseif($waveArr[$i] < $visiMin && $waveArr[$i] >= $ultraMin){	// Ultraviolet Wavelength
					$tableArr[$i][2] = "Ultraviolet";
				}elseif($waveArr[$i] < $ultraMin && $waveArr[$i] >= $xrayMin){	// X-Ray Wavelength
					$tableArr[$i][2] = "X-ray";
				}elseif($waveArr[$i] < $xrayMin && $waveArr[$i] >= $gammaMin){	// Gamma-Ray Wavelength
					$tableArr[$i][2] = "Gamma-Ray";
				}
			}
			
			// Start table
			echo "<center><table width='auto' border='1'>";
			
			// Output column headers
			echo "<tr><th><u>Row #</u></th>";
			echo "<th><u>Wavelength</u></th>";
			echo "<th><u>Band</u></th></tr>";
			
			// Fill the table with arrays
			for($r=0;$r<18;$r++){
				echo "<tr>";
				echo "<td align='right'>".($tableArr[$r][0])."</td>";
				echo "<td>".($tableArr[$r][1])."</td>";
				echo "<th>".($tableArr[$r][2])."</th>";
				echo "</tr>";
			}
			
			
			// Close table
			echo "</table></center>";
						
			// Output the ElectroMagnetic Spectrum image "eMagSpec.PNG"
			echo "<center><img src='eMagSpec.PNG' alt='eMagSpec'></center>";
		?>
    </body>
</html>