<?php
	require("http://ruvoter.roguemediapro.com/includes/connect.php");
	require("variables.php");
	require("http://ruvoter.roguemediapro.com/functions.php");

	session_cache_expire(30);
	session_start();

	$queryListCandidates = "SELECT * FROM candidates";
	$resultListCandidates = mysql_query($queryListCandidates);
	
	while ($info = mysql_fetch_array($resultListCandidates)) {
		$voteString .= (($_SESSION[strtolower(titlize($info["name"]))])?$info["name"]:"").";";
	}
	
	$queryUpdateVote = "UPDATE voters SET vote = '$voteString' WHERE netID = '".$_SESSION["loggedIn"]."'";
	$resultUpdateVote = mysql_query($queryUpdateVote);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>RU Voter</title>
	
	<link href="ruvoter.css" rel="stylesheet" type="text/css" />
</head>

<body style="text-align: center; padding-top: 30px;">
Thanks for voting!
</body>
</html>