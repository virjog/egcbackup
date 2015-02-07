<?php
	if ($_POST["submit"] && $_POST["name1"] != "" && $_POST["email"] != "" && $_POST["phone"] != "" && $_POST["name2"] != "" && $_POST["name3"] != "") {
		$footballFile = fopen("ecup.txt", "a");
		foreach($_POST as $field) { if ($field != "Submit") $fileInsert .= "$field,"; }
		$fileInsert .= "\r\n";
		fwrite($footballFile, $fileInsert);
		fclose($footballFile);
		header("Location: index.php?sub=1");
	} elseif ($_POST["submit"] && ($_POST["name1"] == "" || $_POST["email"] == "" || $_POST["phone"] == "" || $_POST["name2"] == "" || $_POST["name3"] == "")) {
		header("Location: index.php?incomplete=1");
	} else { header("Location: index.php?sub=0"); }
?>