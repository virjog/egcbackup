<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="../egc.css" type="text/css" rel="stylesheet" />
	<style><!--
		table, tr, td {
			border: none;
			border-collapse: collapse;
		}
		
		td {
			padding: 5px;
		}
	--></style>
</head>

<body class="sub"><center>
<table class="title"><tr>
	<td style="width: 154px; padding-right: 8px;">EGC Trivia Bowl</td>
	<td style="padding-right: 5px;"><hr /></td>
</tr></table>

<?php
	if ($_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center;\">Thank you for signing up!</div>\n";
	else {
		if (isset($_GET["sub"]) && !$_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">There was a problem with your submission. Please try again or contract the webmaster, <a href=\"mailto:sodhiar@eden.rutgers.edu\">Rohit Sodhia</a>.</div>\n";
?>
<div style="text-align: left; margin-bottom: .8em;">You can sign up individually or in sets up to four (4).</div>
<form method="post" action="process.php">
	<fieldset style="width: 400px;">
		<legend style="font-weight: bold;">Sign-Up</legend>
		<table style="width: 450px;">
			<tr>
				<td>Name 1:</td>
				<td><input type="text" name="name1" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Name 2:</td>
				<td><input type="text" name="name2" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Name 3:</td>
				<td><input type="text" name="name3" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Name 4:</td>
				<td><input type="text" name="name4" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" class="submit" value="Clear Form" /></td>
				<td><input type="submit" name="submit" class="submit" value="Submit"/></td>
			</tr>
		</table>
	</fieldset>
</form>
<?php } ?>
</center></body>
</html>