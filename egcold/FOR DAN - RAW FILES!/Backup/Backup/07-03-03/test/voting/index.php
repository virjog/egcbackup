<?php
	require("variables.php");

	session_cache_expire(30);
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>RU Voter</title>
	
	<link href="ruvoter.css" rel="stylesheet" type="text/css" />
</head>

<body style="text-align: center; padding-top: 30px;">
	If this is your first time visiting this site, please <a href="first.php">click here</a>.<br />
	If you have receieved your password via email, please <a href="login.php">click here</a>.
</body>
</html>
