<?php
	$dbHostname = "mysql.roguemediapro.com";
	$dbUsername = "ruvoter";
	$dbPassword = "DamnAdmins";
	$dbName     = "ruvoter";
	
	$dblink = mysql_connect($dbHostname, $dbUsername, $dbPassword) or die("Please contact the administrator and report error 101."); 
	
	mysql_select_db($dbName) or die( "Unable to select database ".$dbName);
?>