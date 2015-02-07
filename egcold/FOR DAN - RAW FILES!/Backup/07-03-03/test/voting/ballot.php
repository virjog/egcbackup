<?php
	require("http://ruvoter.roguemediapro.com/includes/connect.php");
	require("variables.php");
	require("http://ruvoter.roguemediapro.com/functions.php");

	session_cache_expire(30);
	session_start();

	$queryListCandidates = "SELECT * FROM candidates";
	$resultListCandidates = mysql_query($queryListCandidates);

	if ($_REQUEST["submit"]) {
		$totalVotes = 0;
		while ($info = mysql_fetch_array($resultListCandidates, MYSQL_BOTH)) $totalVotes += (($_REQUEST[strtolower(titlize($info["name"]))])?1:0);
		
		if ($totalVotes > 5) $tooManyVotes = 1;
		else {
			$resultListCandidates = mysql_query($queryListCandidates);
		
			while ($info = mysql_fetch_array($resultListCandidates, MYSQL_BOTH)) {
				unset($_SESSION[strtolower(titlize($info["name"]))]);
				$_SESSION[strtolower(titlize($info["name"]))] = $_REQUEST[strtolower(titlize($info["name"]))];
			}
			
			header("Location: confirm.php");
		}
	}
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
<div style="border: 1px solid #FF8822; padding: 3px;">
	You may vote for <b>up to 5</b> candidates.<br />
<?php if ($tooManyVotes) echo "\t<span style=\"color: #DD0000; font-weight: bold;\">You voted for too many candidates</span>\n"; ?>
</div>
<form method="post" action="ballot.php"><table style="width: 600px; margin-top: 20px;">
<?php
	$resultListCandidates = mysql_query($queryListCandidates);
	
	for ($count = 1; $info = mysql_fetch_array($resultListCandidates, MYSQL_BOTH); $count++) {
		if ($count % 2) echo "<tr>\n";
		echo "\t<td style=\"width: 20px;\"><input type=\"checkbox\" name=\"".strtolower(titlize($info["name"]))."\" ".(($_REQUEST[strtolower(titlize($info["name"]))])?" checked=\"checked\"":"")." /></td>\n";
		echo "\t<td><img src=\"pics/".strtolower(titlize($info["name"])).".jpg\" /></td>\n";
		echo "\t<td style=\"padding: 5px; vertical-align: middle; text-align: left; padding-left: 10px; width: 170px; height: 110px;\">\n";
		echo "\t\t<div style=\"margin-bottom: 8px;\"><b>Name:</b> ".$info["name"]."</div>\n";
		echo "\t\t<div><b>Slogan:</b> ".$info["slogan"]."</div>\n";
		echo "\t</td>\n";
		if (!($count % 2)) echo "</tr>\n";
	}
?>
	<tr><td colspan="6" style="border: none; padding: 5px;"><input type="submit" name="submit" value="Submit" class="submit" /></td></tr>
</table></form>
</body>
</html>
