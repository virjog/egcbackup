<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Engineering Governing Council</title>

	<link href="egc.css" type="text/css" rel="stylesheet" />
	<link href="menu.css" type="text/css" rel="stylesheet" />
	<style>
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
				<div class="title"><span>News</span></div>
				
<?php
	$handle = opendir("newsArchieve");
	
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