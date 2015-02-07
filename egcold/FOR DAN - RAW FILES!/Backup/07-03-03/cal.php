<?php
	if (!isset($_REQUEST['current']) && isset($_REQUEST['month']) && isset($_REQUEST['year']) && ($_REQUEST['month'] != date('m') || $_REQUEST['year'] != date('Y') || isset($_REQUEST['day']))) {
		$month = $_REQUEST['month'];
		$_SESSION['month'] = $month;
		if (isset($_REQUEST['day'])) $day = $_REQUEST['day'];
		else $day = 1;
		$_SESSION['day'] = $day;
		$year = $_REQUEST['year'];
		$_SESSION['year'] = $year;
		if ($_REQUEST['day']) {
			$_SESSION['e_month'] = $month;
			$_SESSION['e_day'] = $day;
			$_SESSION['e_year'] = $year;
		}
		if ($month > 12) {
			$year++;
			$month -= 12;
		}
		elseif ($month < 1) {
			$year--;
			$month += 12;
		}
		$day_num = date('N', mktime(0, 0, 0, $month, 1, $year)) + 1;
		if ($day_num == 8) $day_num = 1;
		$day_word = date('l', mktime(0, 0, 0, $month, 1, $year));
	}
	else if (!isset($_REQUEST['current']) && (isset($_SESSION['month']) || isset($_SESSION['day']) || isset($_SESSION['year'])) && ($_REQUEST['month'] != date('m') || $_REQUEST['year'] != date('Y'))) {
		$month = $_SESSION['month'];
		$day = $_SESSION['day'];
		$year = $_SESSION['year'];
		$day_num = date('N', mktime(0, 0, 0, $month, 1, $year)) + 1;
		if ($day_num == 8) $day_num = 1;
		$day_word = date('l', mktime(0, 0, 0, $month, 1, $year));
	}
	else {
		$month = date('m');
		$_SESSION['month'] = $month;
		$day = date('j');
		$_SESSION['day'] = $day;
		$year = date('Y');
		$_SESSION['year'] = $year;
		$day_num = date('N') + 1;
		if ($day_num == 8) $day_num = 1;
		$day_word = date('l');
	}
	
	if ($_REQUEST['current'] || !(isset($_SESSION['e_month']) && $_SESSION['e_day'] && $_SESSION['e_year'])) {
		$_SESSION['e_month'] = $month;
		$_SESSION['e_day'] = $day;
		$_SESSION['e_year'] = $year;	
	}
	
	if (date('w', mktime(0, 0, 0, $month, 1, $year)) == 0) $start_date = 0;
	else if (date('w', mktime(0, 0, 0, $month, 1, $year)) == 1) $start_date = -1;
	else if (date('w', mktime(0, 0, 0, $month, 1, $year)) == 2) $start_date = -2;
	else if (date('w', mktime(0, 0, 0, $month, 1, $year)) == 3) $start_date = -3;
	else if (date('w', mktime(0, 0, 0, $month, 1, $year)) == 4) $start_date = -4;
	else if (date('w', mktime(0, 0, 0, $month, 1, $year)) == 5) $start_date = -5;
	else $start_date = -6;
?>
<div id="month"><?php echo date('F, Y', mktime(0, 0, 0, $month, 1, $year)); ?></div>
<table id="cal_table">
<?php
	if ((date('t', mktime(0, 0, 0, $month, 1, $year)) == 30 && date('w', mktime(0, 0, 0, $month, 1, $year)) == 6) || (date('t', mktime(0, 0, 0, $month, 1, $year)) == 31 && date('w', mktime(0, 0, 0, $month, 1, $year)) >= 5)) $num_weeks = 6;
	else $num_weeks = 5;
	for ($week_count = 1; $week_count <= $num_weeks; $week_count++) {
		echo "\t<tr style=\"width: 100%;\">\n";
		for ($day_count = 1; $day_count <= 7; $day_count++) {
			$cal_date = $start_date + $day_count + ($week_count - 1) * 7;
			if ($month == date('m', mktime(0, 0, 0, $month, 1, $year)) && $cal_date > 0 && $cal_date <= date('t', mktime(0, 0, 0, $month, 1, $year))) {
				if ($month == date('m') && $cal_date == date('j') && $year == date('Y')) $class = "cur_date";
			else $class = "cur_month";

			$sqlReadQuery = "SELECT * FROM calendar WHERE date = '".date('Y-m-d', mktime(0, 0, 0, $month, $cal_date, $year))."'";
			$result = mysql_query($sqlReadQuery);
			echo "\t\t<td class=\"$class\"";
			if (mysql_num_rows($result) && $class != "cur_date") echo " style=\"background: #DDFFFF;\"";
			echo ">";
			if (mysql_num_rows($result)) {
				echo "\n\t\t\t<a href=\"".$_SERVER["PHP_SELF"]."?month=$month&year=$year&day=$cal_date\" style=\"padding-bottom: .3em; display: block;\">".date('j', mktime(0, 0, 0, $month, $cal_date, $year))."</a>\n";
				for ($count = 0; $count < mysql_num_rows($result) && $count < 2; $count++) {
					$infoE = mysql_fetch_array($result, MYSQL_BOTH);
					echo "\t\t\t<div class=\"titleText\">".$infoE["title"]."</div>\n\t\t";
				}
				if (mysql_num_rows($result) > 2) echo "\t\t\t<div class=\"titleText\" style=\"font-size: .8em\">More</div>";
			}
			else echo date('j', mktime(0, 0, 0, $month, $cal_date, $year));
			echo "</td>\n";
			}			
			else {
				$class = "other_month";
				echo "\t\t<td class=\"$class\">&nbsp;</td>\n";
			}
		}
		echo "\t</tr>\n";

	}
?>
</table>
<center id="control">
	<a href="<?php echo $_SERVER["PHP_SELF"]."?month=".($month-1)."&year=$year"; ?>">Back</a> | <a href="<?php echo $_SERVER["PHP_SELF"]."?month=".($month+1)."&year=$year"; ?>">Next</a><br />
	<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?current=1">Today</a>
</center>

<hr style="height: 1px; width: 560px; margin-bottom: 10px; border: none; background: #000000; color: #000000;" />
<div id="events">
<?php
	$sqlReadQuery = "SELECT * FROM calendar WHERE date = '".date('Y-m-j', mktime(0, 0, 0, $_SESSION['e_month'], $_SESSION['e_day'], $_SESSION['e_year']))."'";
	$result = mysql_query($sqlReadQuery);
	echo "\t<div style=\"font-weight: bold; text-align: center; margin-bottom: 10px;\">".date('l, F j, Y', mktime(0, 0, 0, $_SESSION['e_month'], $_SESSION['e_day'], $_SESSION['e_year']))."</div>\n\n";
	if (mysql_num_rows($result)) {
		$count = 0;
		while ($info = mysql_fetch_array($result, MYSQL_BOTH)) {
			echo "\t<div style=\"margin: 1.5em 0px 10px 0px; width: 560px;\">\n";
			echo "\t\t<div style=\"text-decoration: underline;\">".$info['title']."</div>\n";
			if ($info["end_set"]) echo "\t\t".date('g:i A', strtotime($info['start_time']))." - ".date('g:i A', strtotime($info['end_time']));
			else echo "\t\t".date('g:i A', strtotime($info['start_time']));
			if ($info["location"] != "") echo ", ".$info["location"]."\n";
			else echo "\n";
			if ($info["desc"]) echo "\t\t<div style=\"text-indent: 15px; text-align: justify; margin-top: .3em;\">".$info['desc']."</div>\n";
			echo "\t</div>\n";
			$count++;
		}
	}
	else echo "Nothing scheduled for today";
?>
</div>