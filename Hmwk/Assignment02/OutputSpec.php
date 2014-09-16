<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <?php
                # Programmer: James Leduc
                # Date Created: 9/15/2014
				# Purpose: Output electromagnetic spectrum based upon user input from "InputWave.html"
            ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>E-Mag Spec</title>
    </head>
        
    <body>
    	<h1>ElectroMagnetic Spectrum</h1>
		<?php
			echo "<i>My PHP is working!</i>";
		?>
        <?php
			$meters=$_GET['meters'];	// $_GET input data from "InputWave.html" form
			
			$radioMin = pow(10,-1);		// Radio >= 10^-1
			$microMin = pow(10,-3));	// 10^-1 > Microwaves >= 10^-3
			$infraMin = 7*(pow(10,-7));	// 10^-3 > Infrared >= 7*10^-7
			$visiMin = 4*(pow(10,-7));	// 7*10^-7 > Visible Light >= 4*10^-7
			$ultraMin = pow(10,-8);		// 4*10^-7 > Ultraviolet >= 10^-8
			$xrayMin = pow(10,-11);		// 10^-8 > X-Ray >= 10^-11 > Gamma

			// Start table
			echo "<table width='200' border='1'>";
			
			// Output column headers
			echo "<tr><th>Spectrum</th>";
			echo "<th colspan='2'>Wavelength Range</th></tr>";
			
			// Output rows w/ headers
			echo "<tr><th>Radio<th><td colspan='2'>\<".$radioMin."</td></tr>";
			echo "<tr><th>Microwave<th><td>".$radioMin."</td><td>".$microMin."</td></tr>";
			echo "<tr><th>Infrared<th><td>".$microMin."</td><td>".$infraMin."</td></tr>";
			echo "<tr><th>Visible<th><td>".$infraMin."</td><td>".$visiMin."</td></tr>";
			echo "<tr><th>Ultraviolet<th><td>".$visiMin."</td><td>".$ultraMin."</td></tr>";
			echo "<tr><th>X-Ray<th><td>".$ultraMin."</td><td>".$xrayMin."</td></tr>";
			echo "<tr><th>Gamma-Ray<th><td colspan='2'>\>".$xrayMin."</td><td>".$."</td></tr>";

			// Close table
			echo "</table>";
			
			// Output which spectrum the user's input places them
			if($meters >= $radioMin){								// Radio Wavelength
				echo "<p>A ".$meters." meter wavelength places you in the <b>Radio Spectrum</b>.</p>";
			}elseif($meters < $radioMin && $meters >= $microMin){	// Microwave Wavelength
				echo "<p>A ".$meters." meter wavelength places you in the <b>Microwave Spectrum</b>.</p>";
			}elseif($meters < $microMin && $meters >= $infraMin){	// Infrared Wavelength
				echo "<p>A ".$meters." meter wavelength places you in the <b>Infrared Spectrum</b>.</p>";
			}elseif($meters < $infraMin && $meters >= $visiMin){	// Visible Light Wavelength
				echo "<p>A ".$meters." meter wavelength places you in the <b>Visible Light Spectrum</b>.</p>";
			}elseif($meters < $visiMin && $meters >= $ultraMin){	// Ultraviolet Wavelength
				echo "<p>A ".$meters." meter wavelength places you in the <b>Ultraviolet Spectrum</b>.</p>";
			}elseif($meters < $ultraMin && $meters >= $xrayMin){	// X-Ray Wavelength
				echo "<p>A ".$meters." meter wavelength places you in the <b>X-Ray Spectrum</b>.</p>";
			}elseif($meters < $xrayMin){							// Gamma-Ray Wavelength
				echo "<p>A ".$meters." meter wavelength places you in the <b>Gamma-Ray Spectrum</b>.</p>";
			}
			
			// Output the ElectroMagnetic Spectrum image "eMagSpec.PNG"
			echo "<center><img src='eMagSpec.PNG' alt='eMagSpec'></center>";
		?>
    </body>
</html>