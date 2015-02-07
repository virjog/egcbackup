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

	<script type="text/javascript">
	function Category_other(dropdown) {
		var myindex  = dropdown.selectedIndex;
		var SelValue = dropdown.options[myindex].value;
		if (SelValue =="Other") showdiv("category_other_div");
		else hidediv("category_other_div");
		return true;
	}

	function hidediv(id) {
		//safe function to hide an element with a specified id
		if (document.getElementById) document.getElementById(id).style.display = 'none'; // DOM3 = IE5, NS6
		else {
			if (document.layers) document.id.display = 'none'; // Netscape 4
			else document.all.id.style.display = 'none'; // IE 4
		}
	}

	function showdiv(id) {
		//safe function to show an element with a specified id
			  
		if (document.getElementById) document.getElementById(id).style.display = 'block'; // DOM3 = IE5, NS6
		else {
			if (document.layers) document.id.display = 'block'; // Netscape 4
			else document.all.id.style.display = 'block'; // IE 4
		}
	}

	function Validate() {
		var elem = document.getElementById('form1').elements;
		var pass = true; 
		var string = "Oops you forgot to fill out the following:\n";
		for (var i = 1; i < elem.length; i++) {
			if (elem[i].name=='Problem_Category' && elem[i].value=='Other' && (document.getElementById('Problem_Category_other').value=="")) {
				string = string + "Problem_Category_other\n";
				pass = false;
			} else if (elem[i].value=="") {
				string = string + elem[i].name + "\n";
				pass = false;
				if (elem[i].name=='Problem_Category_other' && document.getElementById('Problem_Category').value!='Other')
					pass = true;
			}
		}
		if (!pass) alert(string);
		else document.form.submit();
	}
	</script>
</head>

<body class="sub"><center>
<table class="title"><tr>
	<td style="width: 263px; padding-right: 8px;">Deferred Maintenance Form</td>
	<td style="padding-right: 5px;"><hr /></td>
</tr></table>

<?php
	if ($_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center;\">Thank you for submitting your thoughts!</div>\n";
	else {
		if (isset($_GET["sub"]) && !$_GET["sub"]) echo "<div style=\"font-weight: bold; font-size: 1.2em; text-align: center; margin-bottom: 1em;\">There was a problem with your submission. Please try again or contract the webmaster, <a href=\"mailto:sodhiar@eden.rutgers.edu\">Rohit Sodhia</a>.</div>\n";
?>
<form method="post" action="process.php" id="form1">
	<fieldset style="width: 500px;">
		<legend style="font-weight: bold;">Personal Info</legend>
		<table style="width: 450px;">
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name" id="Name" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td>Class Year</td>
				<td><input type="text" name="class" id="class" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td><label>NetID</label></td>
				<td><input type="text" name="netid" id="netid" style="width: 300px;" /></td>
			</tr>
			<tr>
				<td valign="top">Residence:</td>
				<td>
					<input type="radio" name="Residence" value="Busch" id="Residence_0" /><label>Busch</label><br />
					<input type="radio" name="Residence" value="CollegeAve" id="Residence_1" /><label>College Ave</label><br />
					<input type="radio" name="Residence" value="Livingston" id="Residence_2" /><label>Livingston</label><br />
					<input type="radio" name="Residence" value="Douglass" id="Residence_3" /><label>Douglass</label><br />
					<input type="radio" name="Residence" value="Cook" id="Residence_4" /><label>Cook</label><br />
					<input type="radio" name="Residence" value="OffCampus" id="Residence_5" /><label>Off Campus</label>
				</td>
			</tr>
		</table>
	</fieldset><br/>
	
	<fieldset style="width: 500px;">
		<legend><strong>Problem Description</strong></legend>
		<table style="width: 450px;">
			<tr>
				<td>Campus:</td>
				<td><select name="Problem_Campus" id="Problem_Campus">
					<option value="College Avenue">College Avenue</option>
					<option value="Busch">Busch</option>
					<option value="Livingston">Livingston</option>
					<option value="Douglass">Douglass</option>
					<option value="Cook">Cook</option>
				</select></td>
			</tr>
			<tr>
				<td>Category:</td>
				<td><select name="Problem_Category" id="Problem_Category" onchange="Category_other(this.form.Problem_Category);">
					<option value="Heating/Ventilation/Cooling">Heating/Ventilation/Cooling</option>
					<option value="Aesthetics">Aesthetics</option>
					<option value="Technology">Technology</option>
					<option value="Sidewalks/Paving/Street Marks/ Crosswalks">Sidewalks/Paving/Street Marks/ Crosswalks</option>
					<option value="Grounds/Landscaping/Signs">Grounds/Landscaping/Signs</option>
					<option value="Structural Issues">Structural Issues</option>
					<option value="Bus Stops">Bus Stops</option>
					<option value="Furniture">Furniture</option>
					<option value="Other">Other</option>
				</select></td>
			</tr>
			<tr>
				<td style="height: 2em;"></td>
				<td><div id="category_other_div" style="display: none;">
					<label></label>
					<label>Other: <input type="text" name="Problem_Category_other" id="Problem_Category_other" style="width: 252px;" /></label>
				</div></td>
			</tr>
			<tr>
				<td><label>Location: </label></td>
				<td><input type="text" name="Problem_Location" id="Problem_Location" style="width: 382px;" /></td>
			</tr>
			<tr>
				<td valign="top"><label>Description: </label></td>
				<td><textarea name="Problem_Description" id="Problem_Description" style="width: 382px; height: 7em;"></textarea></td>
			</tr>
			<tr>
				<td><input type="reset" name="Reset" class="submit" value="Clear Form" /></td>
				<td><input type="submit" name="Submit" class="submit" value="Submit" onclick="Validate(); return false;"/></td>
			</tr>
		</table>
	</fieldset>
</form>
<?php } ?>
</center></body>
</html>