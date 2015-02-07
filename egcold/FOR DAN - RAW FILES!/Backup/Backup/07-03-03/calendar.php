<?php
	require("includes/connect.php");
	
	session_cache_expire(60);
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>

	<link href="http://egc.rutgers.edu/egc.css" type="text/css" rel="stylesheet">	
	<link href="cal.css" type="text/css" rel="stylesheet">	
</head>

<body class="sub"><div id="calendar">
<?php require("cal.php"); ?>
</div></body>
</html>
