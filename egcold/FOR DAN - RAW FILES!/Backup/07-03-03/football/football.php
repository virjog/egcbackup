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
	<td style="width: 300px; padding-right: 8px;">Engineering versus Pharmacy Football Game 2008</td>
	<td style="padding-right: 5px;"><hr /></td>
</tr></table>

<?php
	if ($_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center;\">Thank you for signing up!</div>\n";
	else {
		if (isset($_GET["incomplete"]) && $_GET["incomplete"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">You MUST submit a primary contact name, phone number, and email address.</div>\n";
		elseif (isset($_GET["sub"]) && !$_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">There was a problem with your submission. Please try again or contract the webmaster, <a href=\"mailto:sodhiar@eden.rutgers.edu\">Rohit Sodhia</a>.</div>\n";
?>
<div style="text-align: left; margin-bottom: .8em;">You can sign up in teams of seven (7) to eleven (11). Individuals may sign up as well. If you sign up individually or less than seven, your team will be formed as students sign up.  We will inform you of your teammates after signups close on March 24th, 2008.</div>
<form method="post" action="process.php">
	<fieldset style="width: 500px;">
		<legend style="font-weight: bold;">Sign-Up</legend>
		<table style="width: 500px;">
			<tr>
				<td style="width: 150px;">Name 1:</td>
				<td><input type="text" name="name1" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Contact Email:</td>
				<td><input type="text" name="email" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Contact Phone Number:</td>
				<td><input type="text" name="phone" style="width: 300px;" /></td>
			</tr>
			<tr style="margin-top: 1em;">
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
				<td>Name 5:</td>
				<td><input type="text" name="name5" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Name 6:</td>
				<td><input type="text" name="name6" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Name 7:</td>
				<td><input type="text" name="name7" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Name 8:</td>
				<td><input type="text" name="name8" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Name 9:</td>
				<td><input type="text" name="name9" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Name 10:</td>
				<td><input type="text" name="name10" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Name 11:</td>
				<td><input type="text" name="name11" style="width: 300px;" /></td>
			</tr>
			<tr><td colspan="2">
				<span style="font-weight: bold;">PLEASE NOTE:</span> Notwithstanding the risks, I, for myself and my heirs do waive, release and discharge the Engineering Governing Council, and Rutgers, The State University of New Jersey, its governors, trustees, officers, employees and agents from and against all claims for bodily injuries, death, or property damage, arising in any manner out of my presence or activities in connection with this event: The Engineering Versus Pharmacy Football Game. Furthermore, on clicking the Submit button, the undersigned student acknowledges that the risks outlined above are not intended to be all-inclusive and voluntarily accepts all risks known or unknown.
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