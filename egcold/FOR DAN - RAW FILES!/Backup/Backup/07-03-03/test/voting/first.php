<?php
	require("http://ruvoter.roguemediapro.com/includes/connect.php");
	require("http://ruvoter.roguemediapro.com/functions.php");
	require("variables.php");

	session_cache_expire(30);
	session_start();

	if ($_REQUEST["submit"]) {
		$possible = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		for ($count = 0; $count < 12; $count++) $pass .= $possible[rand(0, strlen($possible))];
		$queryCheckUser = "SELECT * FROM voters WHERE netID = '".$_REQUEST["user"]."'";
		$resultCheckUser = mysql_query($queryCheckUser);
		$userInfo = mysql_fetch_array($resultCheckUser, MYSQL_BOTH);
		if ($userInfo["pass"] == "") {
			$queryUpdateUser = "UPDATE voters SET pass = '$pass' WHERE netID = '".$_REQUEST["user"]."'";
			$resultUpdateUser = mysql_query($queryUpdateUser);
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
<?php
	if ($_REQUEST["submit"] && ($resultUpdateUser || $resultCheckUser)) {
		send_email($_REQUEST["user"], $pass);
		echo "<div style=\"margin-bottom: 20px;\">An email has been sent to ".$_REQUEST["user"]."@eden.rutgers.edu with the voting password.</div>\n\n";
	} elseif ($_REQUEST["submit"]) {
		echo "<div style=\"margin-bottom: 20px;\">The netID you submitted was not found or a technical error occured.<br />\nEmail sodhiar@eden.rutgers.edu if this problem presists.</div>\n\n";
	}
?>
<form method="post" action="first.php" style="margin-bottom: 20px;">
	Please enter your EDEN user name: <input type="text" name="user" /><br />
	<input type="submit" name="submit" value="Submit" class="submit" style="margin-top: 10px;" />
</form>

Click <a href="login.php">here</a> to go to the login page.
</body>
</html>
