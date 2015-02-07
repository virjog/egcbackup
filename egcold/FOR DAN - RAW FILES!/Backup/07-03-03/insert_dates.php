<?php
	include_once("includes/connect.php");

	session_cache_expire(60);
	session_start();
	
	$inserted = "none";
	
	if ($_REQUEST["submit"]) {
		$title = $_REQUEST["title"];
		$desc = $_REQUEST["desc"];
		$loc = $_REQUEST["loc"];
		$date = $_REQUEST["date"];
		$start = $_REQUEST["start"];
		if ($_REQUEST["end"] != "") $end_set = 1;
		else $end_set = 0;
		$end = $_REQUEST["end"];
		
		if ($title == "General Body Meeting") {
			$loc = "BCC 117";
			$start = "20:10:00";
		}
		
		$sqlInsert = "INSERT INTO calendar (`title`, `desc`, `location`, `date`, `start_time`, `end_set`, `end_time`) VALUES ('$title', '$desc', '$loc', ' $date', '$start', '$end_set', '$end')";
		$result = mysql_query($sqlInsert);
		
		if ($result) $inserted = "block";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Rutgers University Student Assembly</title>

	<link href="egc.css" type="text/css" rel="stylesheet" />	
	<style><!--
		input, textarea {
			font-size: 11px Arial;
			padding: 2px 2px;
		}
		
		#submit {
			border: 1px solid #444444;
			background: #FFDDDD;
		}
	--></style>
</head>

<body class="sub">
<center>
	<div style="display: <?php echo $inserted; ?>; text-align: center; font-weight: bold; margin-bottom: 1em;">Date Successfully Inserted</div>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	<table style="width: 100%;">
		<tr>
			<td style="width: 80px; vertical-align: top; padding-bottom: 3em;">Password</td>
			<td style="vertical-align: top;"><input type="text" name="title" style="width: 20%;" /></td>
		</tr>
		<tr>
			<td style="width: 80px; vertical-align: top;">Title</td>
			<td><input type="text" name="title" style="width: 90%;" /></td>
		</tr>
		<tr>
			<td style="width: 80px; vertical-align: top;">Description</td>
			<td><textarea name="desc" style="width: 90%; height: 5em;"></textarea></td>
		</tr>
		<tr>
			<td style="width: 80px; vertical-align: top;">Location</td>
			<td><input type="text" name="loc" style="width: 90%;" /></td>
		</tr>
		<tr>
			<td style="width: 80px; vertical-align: top;">Date</td>
			<td><input type="text" name="date" style="width: 30%;" /></td>
		</tr>
		<tr>
			<td style="width: 80px; vertical-align: top;">Start Time</td>
			<td><input type="text" name="start" style="width: 30%;" /></td>
		</tr>
		<tr>
			<td style="width: 80px; vertical-align: top;">End Time</td>
			<td><input type="text" name="end" style="width: 30%;" /></td>
		</tr>
		<tr><td colspan="2" style="text-align: center;"><input type="submit" name="submit" value="Submit" id="submit" /></td></tr>
	</table>
	</form>
</center>
</body>
</html>
