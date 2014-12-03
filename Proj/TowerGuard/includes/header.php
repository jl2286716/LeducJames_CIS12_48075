<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="tower, guard, music, rock, metal, death, viking" />
		<meta name="description" content="" />
		<script src=""></script>	<!-- Line for libraries -->
		<link rel="stylesheet" href="../CSS/styles.css">	<!-- Include Style Sheets -->
		<title>Tower Guard</title>
		<script>	//	Cookie Handling Functions:
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
	<body id="backG">
		<br><br><br>
		<center>
			<a href="index.php"><button>HOME</button></a>
			<a href="crew.php"><button>CREW</button></a>
			<a href="oracle.php"><button>THE ORACLE</button></a><!--Contact Us/Sign Up -->
			<a href="merch.php"><button>TOWER GEAR</button></a>
			<?php
				if((isset($_COOKIE['user_id'])) && (basename($_SERVER['PHP_SELF']) != 'logout.php')){
					echo '<a href="logout.php"><button>LOGOUT</button></a>';
				}else{
					echo '<a href="login.php"><button>LOGIN</button></a>';
				}
			?>
		</center>