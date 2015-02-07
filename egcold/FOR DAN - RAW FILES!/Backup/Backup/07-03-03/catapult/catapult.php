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
	<td style="width: 300px; padding-right: 8px;">EGC Catapult Competition</td>
	<td style="padding-right: 5px;"><hr /></td>
</tr></table>

<?php
	if ($_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center;\">Thank you for signing up!</div>\n";
	else {
		if (isset($_GET["incomplete"]) && $_GET["incomplete"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">You MUST submit a primary contact name, phone number, and email address.</div>\n";
		elseif (isset($_GET["sub"]) && !$_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">There was a problem with your submission. Please try again or contract the webmaster, <a href=\"mailto:sodhiar@eden.rutgers.edu\">Rohit Sodhia</a>.</div>\n";
?>
<div style="text-align: left; margin-bottom: .8em;">You can sign up in teams of three (3) to six (6). Please review the rules <a href="rules.pdf" target="_blank">here</a>.</div>
<form method="post" action="process.php">
	<fieldset style="width: 500px;">
		<legend style="font-weight: bold;">Sign-Up</legend>
		<table style="width: 500px;">
			<tr>
				<td style="width: 150px;">Team name:</td>
				<td><input type="text" name="team" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td style="width: 150px;">Name 1:</td>
				<td><input type="text" name="name1" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Email 1:</td>
				<td><input type="text" name="email1" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td style="width: 150px;">Name 2:</td>
				<td><input type="text" name="name2" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Email 2:</td>
				<td><input type="text" name="email2" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td style="width: 150px;">Name 3:</td>
				<td><input type="text" name="name3" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Email 3:</td>
				<td><input type="text" name="email3" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td style="width: 150px;">Name 4:</td>
				<td><input type="text" name="name4" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Email 4:</td>
				<td><input type="text" name="email4" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td style="width: 150px;">Name 5:</td>
				<td><input type="text" name="name5" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Email 5:</td>
				<td><input type="text" name="email5" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td style="width: 150px;">Name 6:</td>
				<td><input type="text" name="name6" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Email 6:</td>
				<td><input type="text" name="email6" style="width: 300px;" /></td>
			</tr>
			<tr><td colspan="2">
				<span style="font-weight: bold;">PLEASE NOTE:</span> Notwithstanding the risks, I, for myself and my heirs do waive, release and discharge the Engineering Governing  Council, and Rutgers, The State University of New Jersey, its governors, trustees, officers, employees and agents from and against all claims for bodily injuries, death, or property damage, arising in any manner out of my presence or activities in connection with this event: The EGC Catapult Competition. Furthermore, on clicking the Submit button, the undersigned student acknowledges that the risks outlined above are not intended to be all-inclusive and voluntarily accepts all risks known or unknown.
			</td></tr>
			<tr>
				<td style="text-align: right;"><input type="reset" name="reset" class="submit" value="Clear Form" /></td>
				<td><input type="submit" name="submit" class="submit" value="Submit"/></td>
			</tr>
		</table>
	</fieldset>
</form>
<?php } ?>
</center></body>
</html>