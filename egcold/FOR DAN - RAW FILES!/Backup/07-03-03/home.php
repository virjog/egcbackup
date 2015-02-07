<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="egc.css" type="text/css" rel="stylesheet">	
	<style><!--
		body {
			text-align: justify;
		}
		
		#vote a {
			display: block;
			padding: 5px;
			text-align: center;
			border: 2px solid #CC0000;
			color: #CC0000;
			font-weight: bold;
			font-size: 16px;
		}
		
		#vote a:hover {
			border-color: #FF4444;
			text-decoration: none;
			font-weight: normal;
		}
	--></style>

	<script src="functions.js" type="text/javascript"></script>
</head>

<body class="sub">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Engineering Governing Council (EGC) is the governing body of the Rutgers University School of Engineering on the New Brunswick/Piscataway Campus. The EGC:</p>
<ul style="color: #FF8822;">
	<li>Acts as the liasion between faculty, administration, alumni, and the students.</li>
	<li>Distributes funds to Engineering societies and organizations.</li>
	<li>Represents the interests of all Engineering students with a unified voice in the University Community.</li>
</ul>
	
<center>
	<img src="home.jpg" align="center" /><br />
	<b>Leadership. Friendship. Service.</b><br />
	<br />
	Join the oldest, largest, and most active student government. Get involved today!
</center>

<p style="font-size: 12px; font-family: Arial; text-align: right;">
<?php
	$dateFile = fopen("meetingDates.csv", "r");
	while (!feof($dateFile)) {
		$dateInfo = fgetcsv($dateFile, 200);
		$dateParts = explode("-", $dateInfo[0]);
		if (intval(date("n")) <= intval($dateParts[1]) && intval(date("j")) <= intval($dateParts[2])) {
			echo "<a href=\"egc_info.html\" class=\"link\">Next meeting</a>: ".date("F j, Y", mktime(0, 0, 0, $dateParts[1], $dateParts[2], $dateParts[0]))." <span class=\"".strtolower($dateInfo[1])."\">{$dateInfo[1]} Meeting</span><br />";
			break;
		}
	}
	fclose($dateFile);
?>
	(8:10 PM @ BCC 116)<br />
</p>

<table class="title"><tr>
	<td style="width: 51px; padding-right: 8px;">News</td>
	<td style="padding-right: 5px;"><hr style="color: #FF8822; background-color: #FF8822; border: none; height: 2px; width: 100%;" /></td>
</tr></table>  

<div>
	Approximately a week ago, the EGC was honored to have Ms. Elizabeth O’Connell-Ganges come and speak about her new role as Executive Director of Student Centers and Programs. In addition to relating the challenges inherent in unifying a previously decentralized system with varying policies and procedures, she also spoke to the wisdom of creating a new coordinated Student Center Department. In particular, she offered promising glimpses into the new efficiencies which have, and will continue, to spring out of the newly synchronized system.<br />
	<br />
	The EGC has also been quite busy internally, passing several resolutions and bills, among them, a resolution which recognized our first new society this year – Materials Advantage. Our congratulations and best wishes go out to this newly formed student organization. In addition to the paper work, we have been busy in the community as well:<br />
	<ul>
		<li>Spearheading and coordinating departmental tours for interested freshman</li>
		<li>Establishing a Quiet-Study room in ARC for late-night studyers</li>
		<li>Conducting the first School of Engineering T-shirt design competition</li>
		<li>Creating an online option to register comments about deferred maintenance</li>
		<li>Putting together an Academic Bowl (Engineering Jeopardy) event</li>
		<li>Organizing a Society Presidents meeting</li>
	</ul>
	Finally, please keep your eyes and ears open throughout the month of November as the EGC, in conjunction with all the other student governing bodies at Rutgers, New Brunswick Campus, will be holding the first ever “What’s on your mind month?”. It is our goal to reach as many students as possible and elicit comments and suggestions towards the improvement of our university. Please feel free to approach us at any time, and don’t feel shy to tell us what’s on your mind!<br />
	<br />
	<p align="right">[Posted: 10.31.07 1:28 AM]</p>  
</div>

<div>
	EGC Class of 2011 Representative elections are over! Congradulations to the winners, and we hope that those who didn't win a position will still choose to be active in the EGC. The winners were:<br />
	<br />
	<center>
		Albert Buclary<br />
		Wael Kanj<br />
		Christine Mau<br />
		David Sejin Park<br />
		Nat Schaffner<br />
	</center>
	<br />
	<p align="right">[Posted: 9.27.07 2:50 PM]</p>  
</div>

<div>
	Welcome Back! September has been an exciting month here at the School of Engineering. In addition to planning, creating, and printing nearly 700 copies of freshman handbooks and putting on two freshman-oriented community events, the EGC has been hard at work in several other areas of the community. In particular, the EGC co-hosted the Engineering Convocation with the School of Engineering Dean’s Office last Friday (September 14th). Nearly 400 freshman students came out to the event and had the opportunity to meet 21 of our active societies, win great prizes, and get their hands on lots of free School of Engineering merchandise.<br />
	<br />
	In addition to student programming, the EGC has begun its representative and legislative work as the council has had its first general and committee meetings. Dean of Busch Campus, Jeffrey Rankin, honored us by coming to speak at our first council meeting on September 10th regarding his additional administrative role. Additionally, the freshman representative election process is now under way. Petitions were handed out at the Convocation and due last Friday at the candidates meeting. Because we hope to have a record high voting turnout, the Publicity Committee is hard at work on advertising the election. In particular, freshman should expect a BAMM outdoor barbeque this Tuesday (25th).<br />
<br />
	Finally, the EGC retreat will be held this month from September 28th to September 30th at Camp Birnie. During the retreat, accommodations, food, and fun activities will be provided free of charge for all members. All council members are required to attend.<br />
	<br />
	<p align="right">[Posted: 9.24.07 12:03 AM]</p>  
</div>

<div>
	<img src="soccer.jpg" style="float: right; margin: 0px 0px 10px 10px;" />
	The EGC has had several meetings over the last month in preparation for September's abundance of events. Particularly, we have been working hard to plan for the Freshman Convocation (September 14th), the Rutgers University Involvement Fair (September 9th), and our Fall Retreat (September 28th-30th). However, perhaps most exciting have been our new Freshman Outreach initiatives spearheaded by First Year Events Chair, David Chin. In addition to holding a competition night (September 6th) and Meet and Greet (September 13th), both in Barr Hall, we are also working feverishly to construct a student-created Student Handbook, which will be inserted as a move-in material for engineers living in the Barr Hall Dormitory. As a side note, an electronic version will also be available for freshman engineers not living in Barr Hall and all Barr Hall events will be open to the entire freshman engineering class. We greatly anticipate a stronger connection with our new constituency, and look forward to serving all students to the best of our abilities.<br />
	<br />
	Please check out our <a href="sept_cal.html" class="link">September calendar</a> to stay up-to-date with Engineering-related events.<br />
	<br /><br />
	<p align="right">[Posted: 8.6.07 12:44 AM]</p>  
</div>

<div>
	<a href="#" onClick="openFile('news/trenton1.jpg','image',900,600)"><img src="news/trenton1s.jpg" style="float: left; margin: 0px 10px 10px 0px;"></a>
	Greetings! Despite this brief respite from endless class work and testing, we at the EGC have been quite busy throughout the last month. In particular, a small group of EGC members attended the Rutgers Day in Trenton (May 14th) to lobby on behalf of the Outstanding Scholars Recruitment Program (See <a href="documents/archieve/amb_06-07/Bill_ES07_13.doc" target="_blank">Resolution ES07-13</a>). Special thanks go out to Representative Stephanie Loh, Senator Wajdi Kanj, and RCGA Representative Joe Wolf for having worked so hard to follow-up on this important issue!<br />
	<br />
	<a href="#" onClick="openFile('news/trenton2.jpg','image',890,600)"><img src="news/trenton2s.jpg" style="float: right; margin: 0px 0px 0px 10px;"></a>
	In addition to creating and presenting a large display and pamphlets, the OSRP delegation met with several state assemblymen and senators. Furthermore, many students even took the opportunity to sit in on a meeting of the Budget and Appropriations Committee. We at the EGC applaud their efforts and look forward to further lobbying efforts in our capital in the upcoming year.<br />
	<br /><br />
	<p align="right">[Posted: 6.11.07 10:02 PM]</p>  
</div>

<div>
	Welcome to the 2007-2008 Engineering Governing Council website! Our transition has been seamless and we are ready to hit the ground running come September. However, as to not turn a blind eye to our most recent accomplishments and activities let's take a look back at the last (and busiest) month of the 2006-2007 year!<br />
	<ul style="margin: 1em auto; list-style-type: disc;">
		<li>Fall 2007 Allocations were approved by the Council.</li>
		<li>The Leadership Conference was planned and run by the EGC at the University Inn on April 29th. Congratulations to all Teaching Award winners and a special thank you to Professor Yicheng Yu for having given an inspirational keynote speech!</li>
		<li>Congratulations to Senator Wajdi Kanj for having been elected as Student Representative to the Board of Trustees.</li>
		<li>Congratulations to Rohit Sodhia, Yigiter Izgordu, Andrew Miller, and Eleanor Okubor for having been elected as EGC Representatives to the Rutgers University Student Assembly (RUSA).</li>
		<li>Congratulations to Meghan Huber, Dave Chin, Curran Vars, Werner Born, and Ayaka Koshibe for having been elected as EGC Representatives to the Busch Campus Council.</li>
		<li>Congratulations to the Biomedical Engineering Department for having won the 2006-2007 Engineering Cup. We expect even more heated competition next fall!</li>
	</ul>
	
	Finally, here are just a few of the events to look forward to come September/October:<br />
	<ul style="margin: 1em auto; list-style-type: disc;">
		<li>Engineering Convocation (For freshman and societies)</li>
		<li>Freshman (2011) Class Representative elections</li>
		<li>EGC Weekend Retreat</li>
		<li>Engineering Cup</li>
	</ul>
	Have a great summer and look forward to a productive and prosperous year with the Engineering Governing Council!<br />
	<p align="right">[Posted: 5.19.07 3:11 PM]</p>  
</div>

<div>
	<img src="news/yay.jpg" style="float: left; margin-right: 10px;"><br />
	The results for the Spring 2007 elections are now available <a href="elections.html" class="link">here.</a> Congratulations to the newly elected Engineering Governing Council!<br />
	<br />
	<br />
	<p align="right">[Posted: 4.19.07 11:00 PM]</p>  
</div>
</body>
</html>