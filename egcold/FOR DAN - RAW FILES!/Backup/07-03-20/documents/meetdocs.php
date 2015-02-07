<?php
	if (!isset($_GET["semester"]) && date("n") < 7) { $semester = "S"; }
	elseif (!isset($_GET["semester"])) { $semester = "F"; }
	else { $semester = $_GET["semester"]; }

	$year = date("Y");
	if (isset($_GET["year"])) { $year = $_GET["year"]; }
	
	$folder = $year.$semester;
	
	$rootFolder = "ambr/{$folder}";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="../egc.css" type="text/css" rel="stylesheet">
	<style><!--
	--></style>
</head>

<body class="sub">
<table class="title"><tr>
	<td style="width: 197px; padding-right: 8px;">Meeting Documents</td>
	<td style="padding-right: 5px;"><hr /></td>
</tr></table>

<table class="subtitle"><tr>
	<td><hr align="right" /></td>
	<td style="width: 64px;">Agendas</td>
	<td><hr align="left"/></td>
</tr></table>
<?php
	$handle = opendir("{$rootFolder}/agendas");
	
	$allSub = array();
	while (false !== ($value = readdir($handle))) { array_push($allSub, $value); }

	closedir($handle);
	
	sort($allSub);
	foreach ($allSub as $value) {
		if ($value[0] != "." && $value[0] != "_") { echo "\t\t\t\t\t<div><a href=\"{$rootFolder}/agendas/{$value}\">".date("F j, Y", mktime(0, 0, 0, substr($value, 4, 2), substr($value, 6, 2), substr($value, 0, 4)))."</a></div>\n"; }
	}
?>
<br />

<table class="subtitle"><tr>
	<td><hr align="right" /></td>
	<td style="width: 56px;">Minutes</td>
	<td><hr align="left" /></td>
</tr></table>
<?php
	$handle = opendir("{$rootFolder}/minutes");
	
	$allSub = array();
	while (false !== ($value = readdir($handle))) { array_push($allSub, $value); }

	closedir($handle);
	
	sort($allSub);
	foreach ($allSub as $value) {
		if ($value[0] != "." && $value[0] != "_") { echo "\t\t\t\t\t<div><a href=\"{$rootFolder}/minutes/{$value}\">".date("F j, Y", mktime(0, 0, 0, substr($value, 4, 2), substr($value, 6, 2), substr($value, 0, 4)))."</a></div>\n"; }
	}
?>
<br />

<table class="subtitle"><tr>
	<td><hr align="right" /></td>
	<td style="width: 117px;">Bills/Resolutions</td>
	<td><hr align="left" /></td>
</tr></table>
<?php
	$titleFile = fopen("{$rootFolder}/brs/titles.txt", "r");
	while (!feof($titleFile)) {
		$titleInfo = fgets($titleFile);
		$titleParts = explode("~", $titleInfo);
		$fileParts = explode(".", $titleParts[0]);
		if ($titleInfo != "") { echo "\t\t\t\t\t<div><a href=\"{$rootFolder}/brs/{$fileParts[0]}.{$fileParts[1]}\">EGC{$fileParts[0]} - {$titleParts[1]}</a></div>\n"; }
	}
	fclose($titleFile);
?>

<br />
<br />
For documents from previous semesters, please select the appropriate archieve:<br />
<?php
	$handle = opendir("ambr");
	
	$allSub = array();
	while (false !== ($value = readdir($handle))) { array_push($allSub, $value); }
	sort($allSub);
	
	$allFolders = array();
	for ($count = 0; $count < sizeof($allSub); $count++) {
		if ($allSub[$count][0] != "." && $allSub[$count][0] != "_" && is_dir("ambr/".$allSub[$count])) {
			if (($count + 1) < sizeof($allSub) && $allSub[$count][4] == "F" && $allSub[$count + 1][4] == "S" && substr($allSub[$count], 0, 4) == substr($allSub[$count + 1], 0, 4)) {
				array_push($allFolders, $allSub[$count + 1]);
				array_push($allFolders, $allSub[$count]);
				$count++;
			} else { array_push($allFolders, $allSub[$count]); }
		}
	}

	foreach ($allFolders as $name) {
		if ($name[4] == "F") { $title = substr($name, 0, 4)." - Fall"; }
		else { $title = substr($name, 0, 4)." - Spring"; }
		echo "\t\t\t\t\t<div><a href=\"?year=".substr($name, 0, 4)."&semester={$name[4]}\">{$title}</a></div>\n";
	}

	closedir($handle);
?>
</body>
</html>