<?php
	if ($_POST["submit"]){
		$deferedMaintenanceFile = fopen("academicBowl.txt", "a");
		foreach($_POST as $field) if ($field != "Submit") $fileInsert .= "$field\n";
		fwrite($deferedMaintenanceFile, $fileInsert);
		fclose($deferedMaintenanceFile);
		header("Location: academicBowl.php?sub=1");
	} else header("Location: academicBowl.php?sub=0");
?>