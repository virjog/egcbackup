<?php
	require("http://ruvoter.roguemediapro.com/includes/connect.php");
	require("variables.php");
	require("http://ruvoter.roguemediapro.com/functions.php");

	session_cache_expire(30);
	session_start();
	
	$queryListCandidates = "SELECT * FROM candidates";
	$resultListCandidates = mysql_query($queryListCandidates);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>RU Voter</title>
	
	<link href="ruvoter.css" rel="stylesheet" type="text/css" />
	<style><!--
		table tr td {
			border: 1px solid #000000;
		}
	--></style>
</head>

<body style="text-align: center; padding-top: 30px;">
You have selected the following candidates:
<div style="margin: 10px 0px; text-align: center;">
<?php
	$resultListCandidates = mysql_query($queryListCandidates);

	while ($info = mysql_fetch_array($resultListCandidates, MYSQL_BOTH)) {
		if ($_SESSION[strtolower(titlize($info["name"]))]) echo $info["name"]."<br>\n";
	}
?>

	<div style="margin-top: 20px;">
		<a href="final.php" style="margin-right: 20px;">Confirm</a>
		<a href="ballot.php">Revote</a>
	</div>
</div>
</body>
</html>
