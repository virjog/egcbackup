<?php
	if ($_POST["submit"] && $_POST["name1"] != "" && $_POST["email"] != "" && $_POST["phone"] != ""){
		$deferedMaintenanceFile = fopen("football.txt", "a");
		foreach($_POST as $field) { if ($field != "Submit") $fileInsert .= "$field,"; }
		$fileInsert .= "\r\n";
		fwrite($deferedMaintenanceFile, $fileInsert);
		fclose($deferedMaintenanceFile);
		header("Location: football.php?sub=1");
	} elseif ($_POST["submit"] && ($_POST["name1"] == "" || $_POST["email"] == "" || $_POST["phone"] == "")) header("Location: football.php?incomplete=1");
	else header("Location: football.php?sub=0");
?>