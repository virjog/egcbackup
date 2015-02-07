<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Engineering Governing Council</title>

	<link href="egc.css" type="text/css" rel="stylesheet" />
	<link href="menu.css" type="text/css" rel="stylesheet" />
	
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
				<div class="title"><span>EGC Info</span></div>
				
				<div style="text-indent: 30px;">
					The Engineering Governing Council is the representative body for the students of the Rutgers University School of Engineering. Working in conjunction with the faculty and administration of the School of Engineering, the EGC strives to represent and further the needs and best interests of its constituency. Additionally, the EGC works in parallel with University administration and other student <a href="http://nbpweb.rutgers.edu/menus/studgov.shtml" target="_blank">Governing Associations</a> to help give students at Rutgers University a stronger voice as a whole.
				</div>
				
				<div>
					Some of our recent work has resulted in the following:
					<ul style="margin-top: 5px; list-style: outside disc; color: #FF8822;">
						<li>Helping author and pass the structure of the Rutgers University Student Assembly (RUSA)</li>
						<li>Fighting for Engineers to receive more of their student fee money back in the form of Engineering Society funding</li>
						<li>Fighting for Engineers to receive preferential house on Busch campus</li>
						<li>Establishing quiet study rooms in ARC for engineers to use after 10:00 PM</li>
						<li>Bringing back the Engineering Cup</li>
						<li>Bringing in speakers like President McCormick, Vice President Blimling, and the Directors of Housing and Transportation</li>
						<li>Planning and execution of the School of Engineering Open House in the Spring</li>
						<li>Freshman outreach</li>
					</ul>
				</div>
				
				<div style="text-align: center; padding-bottom: 15px;">
					<b>Spring 2008 Council/Committee Meeting Schedule</b><br />
					<br />
<?php
	$dateFile = fopen("meetingDates.csv", "r");
	while (!feof($dateFile)) {
		$dateInfo = fgetcsv($dateFile, 200);
		$dateParts = explode("-", $dateInfo[0]);
		echo "\t\t\t\t\t".date("n/j/y", mktime(0, 0, 0, $dateParts[1], $dateParts[2], $dateParts[0]))."<br />";
	}
	fclose($dateFile);
?>
				</div>
				
				<i>Please join us for all Council and Committee meetings at 8:10 PM in Room 116 of the Busch Campus Center.</i>
				<div style="padding: .8em 0px;">
					The EGC Council is comprised of
					<ul style="margin: 5px auto; list-style: outside disc; color: #0000CC;">
						<li>(1) President [Executive Board]</li>
						<li>(1) Internal Vice President [Executive Board]</li>
						<li>(1) External Vice President [Executive Board]</li>
						<li>(1) Secretary [Executive Board]</li>
						<li>(1) Treasurer [Executive Board]</li>
						<li>(3) University Senator [Executive Board]</li>
					</ul>
					<ul style="margin-bottom: 1em; margin-top: 14px; list-style: outside disc; color: #0000CC;">
						<li>(5) Class Representatives from each class year (20 total)</li>
						<li>(1) Society Representative from each recognized society (25 total)</li>
					</ul>
					Non-voting members consist of:<br />
					<ul style="margin: 5px auto; list-style: outside disc; color: #0000CC;">
						<li>Parliamentarian</li>
						<li>Busch Campus Council Representatives</li>
						<li>Envoys from other governing associations or media groups</li>
						<li>Ex-officio members of the council</li>
						<li>Faculty advisors of the council</li>
						<li>Members-at-large</li>
					</ul>
					<br />
					<b style="display: block; text-align: center; font-size: 1.2em;">All Council and Committee meetings are open to the public and we welcome all guests at our meetings.</b>
				</div>
				<div style="text-align: center; padding-top: 10px;"><a href="members.php">Members</a> | <a href="committees.php">Committees</a></div>
			</div>
		</div>
	</div>

<?php include("footer.php"); ?>
</div>
</center></body>
</html>