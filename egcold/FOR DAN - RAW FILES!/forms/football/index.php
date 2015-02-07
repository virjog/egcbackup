<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Engineering Governing Council</title>

	<link href="../../egc.css" type="text/css" rel="stylesheet" />
	<link href="../../menu.css" type="text/css" rel="stylesheet" />
	<style>
		#EvPFG .labelBalance {
			margin-left: 20px;
			width: 150px;
		}

		#EvPFG .input {
			float: none;
			margin-left: 170px;
		}

		#EvPFG .input input {
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
				<div class="title"><span>Engineering versus Pharmacy Football Game 2008</span></div>
<?php
	if ($_GET["sub"]) echo "\t\t\t\t<div style=\"font-weight: bold; font-size: 1.2em; text-align: center;\">Thank you for signing up!</div>\n";
	else {
		if (isset($_GET["incomplete"]) && $_GET["incomplete"]) echo "\t\t\t\t<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">You MUST submit a primary contact name, phone number, and email address.</div>\n";
		elseif (isset($_GET["sub"]) && !$_GET["sub"]) echo "\t\t\t\t<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">There was a problem with your submission. Please try again or contract the webmaster, <a href=\"mailto:sodhiar@eden.rutgers.edu\">Rohit Sodhia</a>.</div>\n";
?>
				<div style="text-align: left; margin-bottom: .8em;">You can sign up in teams of seven (7) to eleven (11). Individuals may sign up as well. If you sign up individually or less than seven, your team will be formed as students sign up.  We will inform you of your teammates after signups close on March 24th, 2008.</div>
				<form method="post" action="process.php">
					<center><div id="EvPFG" class="fieldset" style="width: 500px;">
						<div class="top"><div class="topR"><div class="title">Sign-Up</div></div></div>
						<div class="middleM"><div class="middleS" style="padding: 1em 25px; padding-bottom: 0px;">
							<div class="tr">
								<div class="td labelBalance">Name 1:</div>
								<div class="td input"><input type="text" name="name1" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Contact Email:</div>
								<div class="td input"><input type="text" name="email" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Contact Phone Number:</div>
								<div class="td input"><input type="text" name="phone" /></div>
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
							<div class="tr">
								<div class="td labelBalance">Name 5:</div>
								<div class="td input"><input type="text" name="name5" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Name 6:</div>
								<div class="td input"><input type="text" name="name6" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Name 7:</div>
								<div class="td input"><input type="text" name="name7" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Name 8:</div>
								<div class="td input"><input type="text" name="name8" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Name 9:</div>
								<div class="td input"><input type="text" name="name9" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Name 10:</div>
								<div class="td input"><input type="text" name="name10" /></div>
							</div>
							<div class="tr">
								<div class="td labelBalance">Name 11:</div>
								<div class="td input"><input type="text" name="name11" /></div>
							</div>
							
							<div style="margin-top: 1.5em; margin-bottom: 1em;"><span style="font-weight: bold;">PLEASE NOTE:</span> Notwithstanding the risks, I, for myself and my heirs do waive, release and discharge the Engineering Governing Council, and Rutgers, The State University of New Jersey, its governors, trustees, officers, employees and agents from and against all claims for bodily injuries, death, or property damage, arising in any manner out of my presence or activities in connection with this event: The Engineering Versus Pharmacy Football Game. Furthermore, on clicking the Submit button, the undersigned student acknowledges that the risks outlined above are not intended to be all-inclusive and voluntarily accepts all risks known or unknown.</div>
							<div style="padding-bottom: .7em; margin-left: 120px;">
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