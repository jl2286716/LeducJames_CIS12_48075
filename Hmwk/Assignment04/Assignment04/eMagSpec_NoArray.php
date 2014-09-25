<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <?php
                # Programmer: James Leduc
                # Date Created: 9/22/2014
				# Purpose: Output electromagnetic spectrum
            ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>E-Mag Spec</title>
    </head>
        
    <body>
    	<h1><center>ElectroMagnetic Spectrum</center></h1>
  
        <?php
			// Calculation variables
			$radioMax	= (10e4);		// Radio <= 10^4
			$radioMin 	= (10e-1);		// Radio >= 10^-1
			$microMin 	= (10e-3);		// 10^-1 > Microwaves >= 10^-3
			$infraMin 	= (7*(10e-7));	// 10^-3 > Infrared >= 7*10^-7
			$visiMin 	= (4*(10e-7));	// 7*10^-7 > Visible Light >= 4*10^-7
			$ultraMin 	= (10e-8);		// 4*10^-7 > Ultraviolet >= 10^-8
			$xrayMin 	= (10e-11);		// 10^-8 > X-Ray >= 10^-11
			$gammaMin 	= (10e-13);		// 10^-11 > Gamma >= 3^-13
			
			// Start table
			echo "<center><table width='auto' border='1'>";
			
			// Output column headers
			echo "<tr><th><u>Row #</u></th>";
			echo "<th><u>Wavelength</u></th>";
			echo "<th><u>Band</u></th></tr>";
			
			// Fill the table
			for($j=1;$j<=18;$j++){
				echo "<tr>";
				echo "<td align='right'>".$j."</td>";
				echo "<td>10^".($j-14)."</td>";
				
				if(pow(10,$j-13) <= $radioMax && pow(10,$j-13) >= $radioMin){		// Radio Wavelength
					echo "<th>Radio</th>";
				}elseif(pow(10,$j-13) < $radioMin && pow(10,$j-13) >= $microMin){	// Microwave Wavelength
					echo "<th>Microwave</th>";
				}elseif(pow(10,$j-13) < $microMin && pow(10,$j-13) >= $infraMin){	// Infrared Wavelength
					echo "<th>Infrared</th>";
				}elseif(pow(10,$j-13) < $infraMin && pow(10,$j-13) >= $visiMin){	// Visible Light Wavelength
					echo "<th>Visible Light</th>";
				}elseif(pow(10,$j-13) < $visiMin && pow(10,$j-13) >= $ultraMin){	// Ultraviolet Wavelength
					echo "<th>Ultraviolet</th>";
				}elseif(pow(10,$j-13) < $ultraMin && pow(10,$j-13) >= $xrayMin){	// X-Ray Wavelength
					echo "<th>X-ray</th>";
				}elseif(pow(10,$j-13) < $xrayMin && pow(10,$j-13) >= $gammaMin){	// Gamma-Ray Wavelength
					echo "<th>Gamma-Ray</th>";
				}

				echo "</tr>";
			}
			
			
			// Close table
			echo "</table></center>";
						
			// Output the ElectroMagnetic Spectrum image "eMagSpec.PNG"
			echo "<center><img src='eMagSpec.PNG' alt='eMagSpec'></center>";
		?>
    </body>
</html>