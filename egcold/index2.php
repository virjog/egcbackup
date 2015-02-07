<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Engineering Governing Council</title>

	<link href="egc.css" type="text/css" rel="stylesheet" />
	<link href="menu.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="contentslider.css" />

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
    .style2 {
	font-size: 18px;
	font-family: Algerian;
}
    .style3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}
    .style4 {font-family: Georgia, "Times New Roman", Times, serif}
    </style>
	
	<script src="divEH.js" language="javascript"></script>
	<script src="egc.js" language="javascript"></script>
	<script type="text/javascript" src="contentslider.js"></script>

	
</head>

<body><center>
<div id="layout">
<?php include("header.php"); ?>

	<div id="mainBody">
<?php include("menu.php"); ?>
		<div id="body">
		<center><a href="https://cas.rutgers.edu/login?service=http://www.bitballot.com/process/login/rutgers"><img src="/images/EGCvote.jpg"> </a></center>
		           


		
		
			<div id="content">
				<div style="text-indent: 20px;"><em><strong> <span class="style2">The Engineering Governing Council (EGC)</span> <span class="style4">is the governing body of the Rutgers University School of Engineering on the New Brunswick/Piscataway Campus. The EGC:</span></strong></em></div> 
<ul class="style4">
					<li><em>Acts as the liaision between faculty, administration, alumni, and the students.</em></li>
			<li><em>Distributes funds to Engineering societies and organizations.</em></li>
					<li><em>Represents the interests of all Engineering students with a unified voice in the University Community.</em></li>
				</ul>
					
				<div style="text-align: center;"> 
				  <div align="left"></div>
				  <div id="slider1" class="sliderwrapper" align="center">
                
                <div class="contentdiv" align="center">
                		<img src="sliderImg/img1.jpg" height="300" width="325" />                	</div>
                    
	                <div class="contentdiv">
                		<img src="sliderImg/img3.jpg" height="300" width="325" />                	</div>
					<div class="contentdiv">
                		<img src="sliderImg/img2.jpg" height="300" width="325" />                	</div>
					<div class="contentdiv">
                		<img src="sliderImg/img5.jpg" height="300" width="325" />                	</div>
					<div class="contentdiv">
                		<img src="sliderImg/img4.jpg" height="300" width="325" />                	</div>
					<div class="contentdiv">
                		<img src="sliderImg/img6.JPG" height="300" width="325" />                	</div>
                </div>
                
                <div id="paginate-slider1" class="pagination"></div>
                
                <script type="text/javascript">
                
                featuredcontentslider.init({
                    id: "slider1",  //id of main slider DIV
                    contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
                    toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
                    nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide.
                    revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
                    enablefade: [true, 0.08],  //[true/false, fadedegree]
                    autorotate: [true, 5000],  //[true/false, pausetime]
                    onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
                        //previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
                        //curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
                    }
                })
                
                </script>
					<br />
					<b>Leadership. Friendship. Service.</b><br />
					<span class="style3"><br />
				Join the oldest, largest, and most active student government. Get involved today!			    </span></div>
				
			  <div class="nextMeeting">
<?php
	$dateFile = fopen("meetingDates.csv", "r");
	while (!feof($dateFile)) {
		$dateInfo = fgetcsv($dateFile, 200);
		$dateParts = explode("-", $dateInfo[0]);
		if (intval(date("n")) <= intval($dateParts[1]) && intval(date("j")) <= intval($dateParts[2])) {
			echo "\t\t\t\t\t<a href=\"egcInfo.php\" class=\"link\">Next meeting</a>: ".date("F j, Y", mktime(0, 0, 0, $dateParts[1], $dateParts[2], $dateParts[0]))." <span class=\"".strtolower($dateInfo[1])."\">{$dateInfo[1]} Meeting</span><br />";
			break;
		}
	}
	fclose($dateFile);
?>



<div id="countbox"></div>

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