<?php
	if (!isset($_GET["semester"]) && date("n") < 7) { $semester = "S"; }
	elseif (!isset($_GET["semester"])) { $semester = "F"; }
	else { $semester = $_GET["semester"]; }

	$year = date("Y");
	if (isset($_GET["year"])) { $year = $_GET["year"]; }
	
	$folder = $year.$semester;
	
	$rootFolder = "ambr/{$folder}";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Engineering Governing Council</title>

	<link href="../egc.css" type="text/css" rel="stylesheet" />
	<link href="../menu.css" type="text/css" rel="stylesheet" />
	<style>
		.nextMeeting {
			font-size: 12px;
			text-align: right;
			margin: 20px 0px 10px 0px;
		}
		
		.datestamp {
			text-align: right;
			padding-top: 10px;
		}
		
		.newsHR {
			width: 250px;
			border: none;
			background: #0000FF;
			color: #0000FF;
			height: 1px;
			margin-bottom: 15px;
		}
	</style>
	
	<script src="../divEH.js" language="javascript"></script>
	<script src="../egc.js" language="javascript"></script>
</head>

<body><center>
<div id="layout">
<?php include("../header.php"); ?>

	<div id="mainBody">
<?php include("../menu.php"); ?>
		<div id="body">
			<div id="content">
				<div class="title"><span>Meeting Documents</span></div>
				
				<center><div class="subtitle"><span>Agendas</span></div></center>
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
				
				<center><div class="subtitle"><span>Minutes</span></div></center>
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
				
				<center><div class="subtitle"><span>Bills/Resolutions</span></div></center>
<?php
	$titleFile = fopen("{$rootFolder}/brs/titles.txt", "r");
	while (!feof($titleFile)) {
		$titleInfo = fgets($titleFile);
		$titleParts = explode("~", $titleInfo);
		$fileParts = explode(".", $titleParts[0]);
		if ($titleInfo != "") { echo "\t\t\t\t\t<div><a href=\"{$rootFolder}/brs/{$fileParts[0]}.{$fileParts[1]}\">\n\t\t\t\t\t\tEGC{$fileParts[0]} - {$titleParts[1]}\n\t\t\t\t\t</a></div>\n"; }
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
		echo "\t\t\t\t<div><a href=\"?year=".substr($name, 0, 4)."&semester={$name[4]}\">{$title}</a></div>\n";
	}

	closedir($handle);
?>
			</div>
		</div>
	</div>

<?php include("../footer.php"); ?>
</div>
</center></body>
</html>