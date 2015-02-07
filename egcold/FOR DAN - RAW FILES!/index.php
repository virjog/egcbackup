<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Engineering Governing Council</title>

	<link href="egc.css" type="text/css" rel="stylesheet" />
	<link href="menu.css" type="text/css" rel="stylesheet" />
	<style>
		.nextMeeting {
			font-size: 12px;
			text-align: right;
			margin: 20px 0px 10px 0px;
		}
		
		.datestamp {
			text-align: right;
			padding: 10px 0px;
			color: #DD4444;
			font-weight: bold;
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
	
	<script src="divEH.js" language="javascript"></script>
	<script src="egc.js" language="javascript"></script>
</head>

<body><center>
<div id="layout">
<?php include("header.php"); ?>

	<div id="mainBody">
<?php include("menu.php"); ?>
		<div id="body">
			<div id="content">
				<div style="text-indent: 20px;">The Engineering Governing Council (EGC) is the governing body of the Rutgers University School of Engineering on the New Brunswick/Piscataway Campus. The EGC:</div>
				<ul style="color: #FF8822;">
					<li>Acts as the liasion between faculty, administration, alumni, and the students.</li>
					<li>Distributes funds to Engineering societies and organizations.</li>
					<li>Represents the interests of all Engineering students with a unified voice in the University Community.</li>
				</ul>
					
				<div style="text-align: center;">
					<img src="home.jpg" align="center" /><br />
					<b>Leadership. Friendship. Service.</b><br />
					<br />
					Join the oldest, largest, and most active student government. Get involved today!
				</div>
				
				<div class="nextMeeting">
<?php
	$dateFile = fopen("meetingDates.csv", "r");
	while (!feof($dateFile)) {
		$dateInfo = fgetcsv($dateFile, 200);
		$dateParts = explode("-", $dateInfo[0]);
		if (intval(date("n")) <= intval($dateParts[1]) && intval(date("j")) <= intval($dateParts[2])) {
			echo "\t\t\t\t\t<a href=\"egc_info.html\" class=\"link\">Next meeting</a>: ".date("F j, Y", mktime(0, 0, 0, $dateParts[1], $dateParts[2], $dateParts[0]))." <span class=\"".strtolower($dateInfo[1])."\">{$dateInfo[1]} Meeting</span><br />";
			break;
		}
	}
	fclose($dateFile);
?>
					(8:10 PM @ BCC 116)
				</div>
				
<!--				<div style="font-size: 2em; color: #DD0000; border: 3px solid #DD0000; padding: 10px; text-align: center; font-weight: bold; margin: 20px 0px;">
					<a href="http://www.bitballot.com/login.php?clientID=102" target="_blank">Click here to vote in the EGC Spring Elections!</a>
				</div>-->
				
				<div class="title"><span>News</span></div>
				
<?php
	$handle = opendir("news");
	
	$allNews = array();
	while (false !== ($value = readdir($handle))) { if ($value[0] != "." && sizeof(explode(".", $value)) >= 2) { array_push($allNews, $value); } }
	rsort($allNews);
	
	foreach ($allNews as $newsFileName) {
		$newsFile = fopen("news/{$newsFileName}", "r");
		$dateInfo = "";
		while (!feof($newsFile)) {
			$dateInfo .= fgets($newsFile, 200);
		}
		
		$newsFileNameParts = explode(".", $newsFileName);
		$dateParts = explode(" ", $newsFileNameParts[0]);
		$date = explode("-", $dateParts[0]);
		$time = $dateParts[1];
		
		echo "\t\t\t\t<div>\n";
		echo $dateInfo;
		echo "\t\t\t\t\t<div class=\"datestamp\">[Posted: ".date("n.d.Y g:i A", mktime(substr($time, 0, 2), substr($time, 2, 2), 0, $date[1], $date[2], $date[0]))."]</div>\n";
		if (array_search($newsFileName, $allNews) != (sizeof($allNews) - 1)) { echo "\t\t\t\t\t<hr class=\"newsHR\" />\n"; }
		echo "\t\t\t\t</div>\n\n";
		
		fclose($newsFile);
	}

	closedir($handle);
?>
			</div>
		</div>
	</div>

<?php include("footer.php"); ?>
</div>
</center></body>
</html>