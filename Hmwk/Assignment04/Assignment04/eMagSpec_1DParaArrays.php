<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <?php
                # Programmer: James Leduc
                # Date Created: 9/23/2014
				# Purpose: Output electromagnetic spectrum using 1-D parallel arrays
            ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>E-Mag Spec</title>
    </head>
        
    <body>
    	<h1><center>ElectroMagnetic Spectrum</center></h1>
		<h2><center>Using 1D Parallel Arrays</center></h2>
  
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
			
			// Fill Row Label array
			$rowArr = array();
			for($r=1;$r<=18;$r++){
				$rowArr[$r-1] = $r;
			}
			
			// Fill Wavelength Label array
			$wvLblArr = array();
			for($m=0;$m<18;$m++){
				$wvLblArr[$m] = "10^".($m-13)."";
			}
			
			// Fill Wavelength array
			$waveArr = array();
			for($i=-12;$i<=5;$i++){
				$waveArr[$i+12] = pow(10,$i);
			}
			
			// Fill Band array
			for($j=0;$j<18;$j++){				
				if($waveArr[$j] <= $radioMax && $waveArr[$j] >= $radioMin){		// Radio Wavelength
					$bandArr[$j] = "Radio";
				}elseif($waveArr[$j] < $radioMin && $waveArr[$j] >= $microMin){	// Microwave Wavelength
					$bandArr[$j] = "Microwave";
				}elseif($waveArr[$j] < $microMin && $waveArr[$j] >= $infraMin){	// Infrared Wavelength
					$bandArr[$j] = "Infrared";
				}elseif($waveArr[$j] < $infraMin && $waveArr[$j] >= $visiMin){	// Visible Light Wavelength
					$bandArr[$j] = "Visible Light>";
				}elseif($waveArr[$j] < $visiMin && $waveArr[$j] >= $ultraMin){	// Ultraviolet Wavelength
					$bandArr[$j] = "Ultraviolet";
				}elseif($waveArr[$j] < $ultraMin && $waveArr[$j] >= $xrayMin){	// X-Ray Wavelength
					$bandArr[$j] = "X-ray";
				}elseif($waveArr[$j] < $xrayMin && $waveArr[$j] >= $gammaMin){	// Gamma-Ray Wavelength
					$bandArr[$j] = "Gamma-Ray";
				}
			}

			// Start table
			echo "<center><table width='auto' border='1'>";
			
			// Output column headers
			echo "<tr><th><u>Row #</u></th>";
			echo "<th><u>Wavelength</u></th>";
			echo "<th><u>Band</u></th></tr>";
			
			// Fill the table with arrays
			for($t=0;$t<18;$t++){
				echo "<tr>";
				echo "<td align='right'>".($rowArr[$t])."</td>";
				echo "<td>".($wvLblArr[$t])."</td>";
				echo "<th>".($bandArr[$t])."</th>";
				echo "</tr>";
			}
			
			
			// Close table
			echo "</table></center>";
						
			// Output the ElectroMagnetic Spectrum image "eMagSpec.PNG"
			echo "<center><img src='eMagSpec.PNG' alt='eMagSpec'></center>";
		?>
    </body>
</html>