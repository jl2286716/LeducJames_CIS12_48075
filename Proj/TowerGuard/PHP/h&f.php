<!-- header.php -->
<!-- include on main pages on top -->
<?php include_once("includes/header.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="rock, metal, tower, guard, music" />
		<meta name="description" content="" />
		<script src=""></script>	<!-- Line for libraries -->
		<link rel="stylesheet" href="styles.css">	<!-- Include Style Sheets -->
		<title>Tower Guard</title>
		<script>	//	Form Validators
			function validate_firstname(){
				var arr = document.forms["signup"]["fName"].value.match(/^\s*[A-Z][a-z]{1,}([A-Z][a-z]{1,})?(([-\s][A-Z][a-z]{1,})|([A-Z][a-z]{1,}))?\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("fName");
						tagID.style.backgroundColor='#00FF00'; //	color='#00FF00' is a shade of Lime
					<?php
						$fn=trim($_POST['fName']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID FIRST NAME!");
					var tagID = document.getElementById("fName");
						tagID.style.backgroundColor='#FF0000'; //	color='#FF0000' is Red; color='#FF8C69' is a shade of Salmon
					return false;
				}
			}
			function validate_lastname(){
				var arr = document.forms["signup"]["lName"].value.match(/^\s*(([A-Z][a-z]{1,})([-][A-Z][a-z]{1,})?.*(\s+[A-Z][a-z]{1,})?|([A-Z][a-z'][a-zA-Z][a-z]{1,}))\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("lName");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$ln=trim($_POST['lName']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID LAST NAME!");
					var tagID = document.getElementById("lName");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_email(){
				var arr = document.forms["signup"]["eMail"].value.match(/^\s*((.*\d)?(.*[a-z])?.{1,20})[@][a-z]{1,15}[.][a-z]{2,4}([.][a-z]{2,4})?\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("eMail");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$em=trim($_POST['eMail']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID EMAIL ADDRESS!");
					var tagID = document.getElementById("eMail");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_password(){
				var arr = document.forms["signup"]["passW"].value.match(/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%&*_-]).{6,20})/g);
				if (arr != null) {
					var tagID = document.getElementById("passW");
						tagID.style.backgroundColor='#00FF00';
					return true;
				} else {
					alert("PLEASE, ENTER A PASSWORD WITH AT LEAST 1 CAPITAL LETTER, 1 LOWERCASE LETTER, 1 NUMBER, AND 1 SPECIAL CHARACTER (!@#$%&*_-)!");
					alert("YOUR PASSWORD LENGTH MUST BE BETWEEN 6 AND 20 CHARACTERS!");
					var tagID = document.getElementById("passW");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function verify_password(){
				var pass = document.forms["signup"]["passW"].value;
				var vpass = document.forms["signup"]["vPass"].value;
				if(pass == vpass){
					var tagID = document.getElementById("vPass");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$pw=trim($_POST['passW']);
					?>
					return true;
				} else {
					alert("YOUR PASSWORDS DO NOT MATCH UP! PLEASE, CHECK YOUR 'CAPS LOCK' AND RETYPE YOUR PASSWORD!");
					var tagID = document.getElementById("vPass");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_birth(){
				var arr = document.forms["signup"]["bDay"].value.match(/^\s*((([0])?[1-9])|([1][0-2]))[-\/]((([0-2])?[1-9])|([3][0-1]))[-\/](([1][9][1-9][0-9])|([2][0]{2}[0-9])|([2][0][1][0-4]))\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("bDay");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$bd=trim($_POST['bDay']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID BIRTH DATE!");
					var tagID = document.getElementById("bDay");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_street_number(){
				var arr = document.forms["signup"]["sNum"].value.match(/^\s*[0-9]+\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("sNum");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$snu=trim($_POST['sNum']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID STREET NUMBER!");
					var tagID = document.getElementById("sNum");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_street_name(){
				var arr = document.forms["signup"]["sName"].value.match(/^\s*[A-Za-z0-9]+\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("sName");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$sna=trim($_POST['sName']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID STREET NAME!");
					var tagID = document.getElementById("sName");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_street_type(){
				var arr = document.forms["signup"]["sType"].value.match(/^\s*(st|St|Street|street|dr|Dr|Drive|drive|rd|Rd|Road|road|blvd|Blvd|Boulevard|boulevard|pl|Pl|Place|place|ct|Ct|Court|court|cir|Cir|Circle|circle|hwy|Hwy|Highway|highway|ave|Ave|Avenue|avenue|ln|Ln|Lane|lane)([\.])?\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("sType");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$sty=trim($_POST['sType']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID STREET TYPE (example: St., Ave., Blvd.)!");
					var tagID = document.getElementById("sType");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_apt_POBox(){	//can be empty
				var arr = document.forms["signup"]["aptPOB"].value.match(/^\s*[A-Za-z0-9]*\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("aptPOB");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$apo=trim($_POST['aptPOB']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID APARTMENT NUMBER OR P.O. BOX (NO SPECIAL CHARACTERS)!");
					var tagID = document.getElementById("aptPOB");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_city(){
				var arr = document.forms["signup"]["city"].value.match(/^\s*[A-Za-z\s]+\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("city");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$ci=trim($_POST['city']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID CITY NAME!");
					var tagID = document.getElementById("city");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_zip(){
				var arr = document.forms["signup"]["zip"].value.match(/^\s*\d{5}([-\s]\d{4})?\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("zip");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$zc=trim($_POST['zip']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID ZIP CODE!");
					var tagID = document.getElementById("zip");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_area(){	// 201-989
				var arr = document.forms["signup"]["area"].value.match(/^\s*(([2][0][1-9])|([2][1-9][0-9])|([3-8][0-9][0-9])|([9][0-8][0-9]))\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("area");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$ac=trim($_POST['area']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID AREA CODE!");
					var tagID = document.getElementById("area");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_phone(){	// Do not begin in 0 or 1
				var arr = document.forms["signup"]["phone"].value.match(/^\s*([2-9][0-9]{2})[-\/]?([0-9]{4})\s*$/g);
				if (arr != null) {
					var tagID = document.getElementById("phone");
						tagID.style.backgroundColor='#00FF00';
					<?php
						$pn=trim($_POST['phone']);
					?>
					return true;
				} else {
					alert("PLEASE, ENTER A VALID PHONE NUMBER IN THE FORM OF ####### OR ###-####!");
					var tagID = document.getElementById("phone");
						tagID.style.backgroundColor='#FF0000';
					return false;
				}
			}
			function validate_form(){
				if(!validate_firstname())return false;
				if(!validate_lastname())return false;
				if(!validate_email())return false;
				if(!validate_password())return false;
				if(!verify_password())return false;
				if(!validate_birth())return false;
				if(!validate_street_number())return false;
				if(!validate_street_name())return false;
				if(!validate_street_type())return false;
				if(!validate_apt_POBox())return false;
				if(!validate_city())return false;
				if(!validate_zip())return false;
				if(!validate_area())return false;
				if(!validate_phone())return false;
				return true;
			}
			function setState(){
				var tagID = document.getElementById("state");
					tagID.style.backgroundColor='#00FF00';
				<?php
					$st=trim($_POST['state']);
				?>
			}
		</script>
		<script>	//	Other form handling functions:
			//	Get Form Info from URL Query String
			function getFormInfo(url){
				//split info at the "?"
				var info=url.split("?");//creates 'info' array
				//split the name value pairs at the second part of the 'info' array
				var nameValuePairs=info[1].split("&");
				//map info for object
				var obj=new Object();
				for(var i=0;i<nameValuePairs.length-1;i++){
					var map=nameValuePairs[i].split("=");
					name=map[0].replace("_"," ");	// Removes the underscore "_" from the 'name'
					value=map[1];
					obj[name]=value;
				}
				return obj;
			}	
			//	Decode URL-Encoded Data
			function adjustCharacters(field){
				for(var i=0;i<$_GET[field].length;i++){
					$_GET[field]=$_GET[field].replace("+"," ");
					$_GET[field]=$_GET[field].replace("%20"," ");
					$_GET[field]=$_GET[field].replace("%21","!");
					$_GET[field]=$_GET[field].replace("%22","\"");
					$_GET[field]=$_GET[field].replace("%23","#");
					$_GET[field]=$_GET[field].replace("%24","$");
					$_GET[field]=$_GET[field].replace("%25","%");
					$_GET[field]=$_GET[field].replace("%26","&");
					$_GET[field]=$_GET[field].replace("%27","'");
					$_GET[field]=$_GET[field].replace("%28","(");
					$_GET[field]=$_GET[field].replace("%29",")");
					$_GET[field]=$_GET[field].replace("%2A","*");
					$_GET[field]=$_GET[field].replace("%2B","+");
					$_GET[field]=$_GET[field].replace("%2C",",");
					$_GET[field]=$_GET[field].replace("%2D","-");
					$_GET[field]=$_GET[field].replace("%2E",".");
					$_GET[field]=$_GET[field].replace("%2F","/");
					$_GET[field]=$_GET[field].replace("%3A",":");
					$_GET[field]=$_GET[field].replace("%3B",";");
					$_GET[field]=$_GET[field].replace("%3C","<");
					$_GET[field]=$_GET[field].replace("%3D","=");
					$_GET[field]=$_GET[field].replace("%3E",">");
					$_GET[field]=$_GET[field].replace("%3F","?");
					$_GET[field]=$_GET[field].replace("%40","@");
					$_GET[field]=$_GET[field].replace("%5B","[");
					$_GET[field]=$_GET[field].replace("%5C","\\");
					$_GET[field]=$_GET[field].replace("%5D","]");
					$_GET[field]=$_GET[field].replace("%5E","^");
					$_GET[field]=$_GET[field].replace("%5F","_");
					$_GET[field]=$_GET[field].replace("%60","`");
					$_GET[field]=$_GET[field].replace("%7B","{");
					$_GET[field]=$_GET[field].replace("%7C","|");
					$_GET[field]=$_GET[field].replace("%7D","}");
					$_GET[field]=$_GET[field].replace("%7E","~");
				}
			}	
			//	Set Cookie
			function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires="+d.toUTCString();
				document.cookie = cname + "=" + cvalue + "; " + expires;
			}
			//	Get Cookie
			function getCookie(cname) {
				var name = cname + "=";
				var ca = document.cookie.split(';');
				for(var i=0; i<ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0)==' ') c = c.substring(1);
					if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
				}
				return "";
			}
		</script>
	</head>
	<body>
		<center>
			<a href="index.html"><button>HOME</button></a>
			<a href="crew.html"><button>CREW</button></a>
			<a href="oracle.php"><button>THE ORACLE</button></a><!--Contact Us/Sign Up -->
			<a href="merch.html"><button>TOWER GEAR</button></a>
			<a href="login.html"><button>LOGIN</button></a>
		</center>



<!-- footer.php -->
<!-- include on main pages on bottom -->
<?php include_once("includes/footer.php"); ?>
		<address>
			Tower Guard Official &bull; 
			TowerGuard@email.com &bull;
			<a>other.website.com</a> &bull;
			(951) 555-0100
		</address>
	</body>
</html>