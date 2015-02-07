<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Engineering Governing Council</title>

	<link href="../../egc.css" type="text/css" rel="stylesheet" />
	<link href="../../menu.css" type="text/css" rel="stylesheet" />
	<style>
		#academicBowlSignup .labelBalance {
			margin-left: 20px;
			width: 150px;
		}

		#academicBowlSignup .input {
			float: none;
			margin-left: 170px;
		}

		#academicBowlSignup .input input {
			width: 250px;
		}
	</style>

	<script src="../../divEH.js" language="javascript"></script>
	<script src="../../egc.js" language="javascript"></script>
</head>

<body><center>
<div id="layout">
<?php include("../../header.php"); ?>

	<div id="mainBody">
<?php include("../../menu.php"); ?>
		<div id="body">
			<div id="content"><center>
				<div class="title"><span>EGC Trivia Bowl</span></div>
<?php
	if ($_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center;\">Thank you for signing up!</div>\n";
	else {
		if (isset($_GET["sub"]) && !$_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">There was a problem with your submission. Please try again or contract the webmaster, <a href=\"mailto:sodhiar@eden.rutgers.edu\">Rohit Sodhia</a>.</div>\n";
?>
				<div style="text-align: left; margin-bottom: .8em;">You can sign up individually or in sets up to four (4).</div>
				<form method="post" action="process.php">
					<center><div id="academicBowlSignup" class="fieldset" style="width: 500px;">
						<div class="top"><div class="topR"><div class="title">Sign-Up</div></div></div>
						<div class="middleM"><div class="middleS" style="padding: 1em 25px; padding-bottom: 0px;">
							<div class="tr">
								<div class="td labelBalance">Name 1:</div>
								<div class="td input"><input type="text" name="name1" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Name 2:</div>
								<div class="td input"><input type="text" name="name2" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Name 3:</div>
								<div class="td input"><input type="text" name="name3" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Name 4:</div>
								<div class="td input"><input type="text" name="name4" /></div>
							</div>
							<div style="padding: 1em 0px .7em 0px; margin-left: 120px;">
								<span class="button"><span><input type="reset" name="reset" value="Clear Form" /></span></span>
								<span class="button"><span><input type="submit" name="submit" value="Submit" /></span></span>
							</div>
						</div></div>
						<div class="bottom"><div></div></div>
					</div></center>
				</form>
<?php } ?>
			</center></div>
		</div>
	</div>

<?php include("../../footer.php"); ?>
</div>
</center></body>
</html>