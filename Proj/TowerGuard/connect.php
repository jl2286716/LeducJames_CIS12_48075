<?php
	session_start();
	$username = "48075";
	$password = "48075cis12";
	$hostname = "209.129.8.5"; 
	$db = "jl2286716_proj_entity_users";

	$link = mysqli_connect($hostname,$username,$password,$db) or die("Error " . mysqli_error($link)); 
?>