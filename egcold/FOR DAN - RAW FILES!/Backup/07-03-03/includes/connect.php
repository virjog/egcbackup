<?php
	$dbHostname = "localhost";
	$dbUsername = "egc";
	$dbPassword = "web246q";
	$dbName     = "egc";
	
	$dblink = mysql_connect($dbHostname, $dbUsername, $dbPassword) or die("Please contact the administrator and report error 101."); 
	
	mysql_select_db($dbName) or die( "Unable to select database ".$dbName);
?>