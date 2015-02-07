<?php
	require("http://ruvoter.roguemediapro.com/includes/connect.php");
	require("variables.php");

	session_cache_expire(30);
	session_start();

	if ($_REQUEST["submit"]) {
		$queryCheckUser = "SELECT * FROM voters WHERE netID = '".$_REQUEST["user"]."'";
		$resultCheckUser = mysql_query($queryCheckUser);
		$userInfo = mysql_fetch_array($resultCheckUser, MYSQL_BOTH);
		
		if ($userInfo["vote"] != "") {
			$alreadyVoted = 1;
		} elseif ($_REQUEST["pass"] == $userInfo["pass"]) {
			$_SESSION["loggedIn"] = $_REQUEST["user"];
			header("Location: ballot.php");
		} else {
			$passWrong = 1;
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>RU Voter</title>
	
	<link href="ruvoter.css" rel="stylesheet" type="text/css" />
</head>

<body style="text-align: center; padding-top: 30px;">
<?php if ($passWrong) { ?>
<div style="margin-bottom: 20px; font-weight: bold;">User/Pass wrong or not found/set!</div>
<?php } elseif ($alreadyVoted) { ?>
<div style="margin-bottom: 20px; font-weight: bold;">You have already voted!</div>
<?php } ?>
<form method="post" action="login.php">
	<div style="margin-bottom: 8px;">Please enter your netID: <input type="text" name="user" /></div>
	<div>Please enter the password that was emailed to you: <input type="password" name="pass" /></div>
	<input type="submit" name="submit" value="Login" class="submit" style="margin-top: 10px;" />
</form>
</body>
</html>