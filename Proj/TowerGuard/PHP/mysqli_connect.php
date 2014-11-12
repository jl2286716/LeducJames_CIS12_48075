<?php
	//	Set the database access info as constants:
	DEFINE ('DB_USER','48075');
	DEFINE ('DB_PASSWORD','48075cis12');
	DEFINE ('DB_HOST','209.129.8.5'); 
	DEFINE ('DB_SCHEMA','48075');

	//	Make the connection:
	$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_SCHEMA) or die('Could not connect to MySQL: '.mysqli_connect_error());
	
	//	Set the encoding...
	mysqli_set_charset($dbc,'utf8');
?>