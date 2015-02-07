<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Engineering Governing Council</title>

	<link href="../../egc.css" type="text/css" rel="stylesheet" />
	<link href="../../menu.css" type="text/css" rel="stylesheet" />

	<script src="../../divEH.js" language="javascript"></script>
	<script src="../../egc.js" language="javascript"></script>
	<script type="text/javascript">
		window.onload = initFuncs;
		
		function initFuncs() {
			setupMenus();
			
			document.getElementById("problemCategory").onchange = function () {
				if (this.options[this.selectedIndex].value == "Other") { document.getElementById("otherDiv").style.display = "block"; }
				else { document.getElementById("otherDiv").style.display = "none"; }
			}
		}
	</script>
</head>

<body><center>
<div id="layout">
<?php include("../../header.php"); ?>

	<div id="mainBody">
<?php include("../../menu.php"); ?>
		<div id="body">
			<div id="content"><center>
				<div class="title"><span>Deferred Maintenance Form</span></div>
<?php
	if ($_GET["sub"]) echo "\t\t\t\t<div style=\"font-weight: bold; font-size: 1.2em; text-align: center;\">Thank you for submitting your thoughts!</div>\n";
	else {
		if (isset($_GET["sub"]) && !$_GET["sub"]) echo "\t\t\t\t<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">There was a problem with your submission. Please try again or contract the webmaster, <a href=\"mailto:sodhiar@eden.rutgers.edu\">Rohit Sodhia</a>.</div>\n";
?>
				<form method="post" action="process.php">
					<center><div class="fieldset" style="width: 500px; margin-bottom: 2.5em;">
						<div class="top"><div class="topR"><div class="title">Personal Info</div></div></div>
						<div class="middleM"><div class="middleS" style="padding: 1em 25px; padding-bottom: 0px;">
							<div class="tr">
								<div class="td" style="padding-top: 4px; width: 100px;">Name</div>
								<div class="td" style="float: none;"><input type="text" name="name" id="name" style="width: 325px;" /></div>
							</div>
							<div class="tr">
								<div class="td" style="padding-top: 4px; width: 100px;">Class Year</div>
								<div class="td" style="float: none;"><input type="text" name="class" id="class" style="width: 325px;" /></div>
							</div>
							<div class="tr">
								<div class="td" style="padding-top: 4px; width: 100px;">NetID</div>
								<div class="td" style="float: none;"><input type="text" name="netID" id="netID" style="width: 325px;" /></div>
							</div>
							<div class="tr">
								<div class="td" style="4px; width: 100px;">Residence</div>
								<div class="td" style="float: none; margin-left: 100px;">
									<input type="radio" name="residence" id="residence_busch" value="Busch" /><label for="residence_busch">Busch</label><br />
									<input type="radio" name="residence" id="residence_collegeAve" value="College Avenue" /><label for="residence_collegeAve">College Ave</label><br />
									<input type="radio" name="residence" id="residence_livingston" value="Livingston" /><label for="residence_livingston">Livingston</label><br />
									<input type="radio" name="residence" id="residence_douglass" value="Douglass" /><label for="residence_douglass">Douglass</label><br />
									<input type="radio" name="residence" id="residence_cook" value="Cook" /><label for="residence_cook">Cook</label><br />
									<input type="radio" name="residence" id="residence_offCampus" value="Off Campus" /><label for="residence_offCampus">Off Campus</label>
								</div>
							</div>
						</div></div>
						<div class="bottom"><div></div></div>
					</div></center>
					
					<center><div class="fieldset" style="width: 500px;">
						<div class="top"><div class="topR"><div class="title">Problem Description</div></div></div>
						<div class="middleM"><div class="middleS" style="padding: 1em 25px; padding-bottom: 0px;">
							<div class="tr">
								<div class="td" style="padding-top: 4px; width: 100px;">Campus</div>
								<div class="td" style="float: none;"><select name="problemCampus" id="problemCampus">
									<option value="College Avenue">College Avenue</option>
									<option value="Busch">Busch</option>
									<option value="Livingston">Livingston</option>
									<option value="Douglass">Douglass</option>
									<option value="Cook">Cook</option>
								</select></div>
							</div>
							<div class="tr">
								<div class="td" style="padding-top: 4px; width: 100px;">Category</div>
								<div class="td" style="float: none;"><select name="problemCategory" id="problemCategory">
									<option value="Heating/Ventilation/Cooling">Heating/Ventilation/Cooling</option>
									<option value="Aesthetics">Aesthetics</option>
									<option value="Technology">Technology</option>
									<option value="Sidewalks/Paving/Street Marks/Crosswalks">Sidewalks/Paving/Street Marks/Crosswalks</option>
									<option value="Grounds/Landscaping/Signs">Grounds/Landscaping/Signs</option>
									<option value="Structural Issues">Structural Issues</option>
									<option value="Bus Stops">Bus Stops</option>
									<option value="Furniture">Furniture</option>
									<option value="Other">Other</option>
								</select></div>
							</div>
							<div class="tr" id="otherDiv" style="display: none;">
								<div class="td" style="padding-top: 4px; width: 80px; padding-left: 20px;">- Other</div>
								<div class="td" style="float: none;"><input type="text" name="otherCatagory" id="otherCatagory" style="width: 325px;" /></div>
							</div>
							<div class="tr">
								<div class="td" style="padding-top: 4px; width: 100px;">Location</div>
								<div class="td" style="float: none;"><input type="text" name="problemLocation" id="problemLocation" style="width: 325px;" /></div>
							</div>
							<div class="tr">
								<div class="td" style="padding-top: 4px; width: 100px;">Description</div>
								<div class="td" style="float: none;"><textarea name="problemDescription" id="problemDescription" style="width: 325px; height: 7em;"></textarea></div>
							</div>
							<div class="tr"><div class="td" style="float: none; padding-left: 100px;">
								<span class="button"><span><input type="reset" name="reset" value="Clear Form" /></span></span>
								<span class="button"><span><input type="submit" name="submit" value="Submit" /></span></span>
							</div></div>
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