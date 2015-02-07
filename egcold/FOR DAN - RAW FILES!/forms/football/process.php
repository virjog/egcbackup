<?php
	if ($_POST["submit"] && $_POST["name1"] != "" && $_POST["email"] != "" && $_POST["phone"] != "") {
		$footballFile = fopen("football.txt", "a");
		foreach($_POST as $field) { if ($field != "Submit") $fileInsert .= "$field,"; }
		$fileInsert .= "\r\n";
		fwrite($footballFile, $fileInsert);
		fclose($footballFile);
		header("Location: index.php?sub=1");
	} elseif ($_POST["submit"] && ($_POST["name1"] == "" || $_POST["email"] == "" || $_POST["phone"] == "")) {
		header("Location: football.php?incomplete=1");
	} else { header("Location: index.php?sub=0"); }
?>