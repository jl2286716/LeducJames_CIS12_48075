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
			
			// Calculation variables
			$radioMin = (pow(10,-1));		// Radio >= 10^-1
			$microMin = (pow(10,-3));		// 10^-1 > Microwaves >= 10^-3
			$infraMin = (7*(pow(10,-7)));	// 10^-3 > Infrared >= 7*10^-7
			$visiMin = (4*(pow(10,-7)));	// 7*10^-7 > Visible Light >= 4*10^-7
			$ultraMin = (pow(10,-8));		// 4*10^-7 > Ultraviolet >= 10^-8
			$xrayMin = (pow(10,-11));		// 10^-8 > X-Ray >= 10^-11 > Gamma
			
			// Calculation Labels
			$radioLbl = "Radio Waves are >= 10^-1";
			$microLbl = "10^-1 > Microwaves >= 10^-3";
			$infraLbl = "10^-3 > Infrared >= 7*10^-7";
			$visiLbl = "7*10^-7 > Visible Light >= 4*10^-7";
			$ultraLbl = "4*10^-7 > Ultraviolet >= 10^-8";
			$xrayLbl = "10^-8 > X-Ray >= 10^-11";
			$gammaLbl = "Gamma-Rays are < 10^-11";

			// Start table
			echo "<center><table width='auto' border='1'>";
			
			// Output column headers
			echo "<tr><th>Spectrum</th>";
			echo "<th>Wavelength Range</th></tr>";
			
			// Output rows w/ headers
			echo "<tr><th>Radio</th><td><center>".$radioLbl."</center></td></tr>";
			echo "<tr><th>Microwave</th><td><center>".$microLbl."</center></td></tr>";
			echo "<tr><th>Infrared</th><td><center>".$infraLbl."</center></td></tr>";
			echo "<tr><th>Visible Light</th><td><center>".$visiLbl."</center></td></tr>";
			echo "<tr><th>Ultraviolet</th><td><center>".$ultraLbl."</center></td></tr>";
			echo "<tr><th>X-Ray</th><td><center>".$xrayLbl."</center></td></tr>";
			echo "<tr><th>Gamma-Ray</th><td><center>".$gammaLbl."</center></td></tr>";

			// Close table
			echo "</table></center>";
			
			// Output which spectrum the user's input places them
			echo "<center>";
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
			echo "</center>";
			
			// Output the ElectroMagnetic Spectrum image "eMagSpec.PNG"
			echo "<center><img src='eMagSpec.PNG' alt='eMagSpec'></center>";
		?>
    </body>
</html>