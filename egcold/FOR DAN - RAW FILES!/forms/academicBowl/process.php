<?php
	if ($_POST["submit"]) {
		$academicBowlFile = fopen("academicBowl.txt", "a");
		foreach($_POST as $field) if ($field != "Submit") $fileInsert .= "$field,";
		$fileInsert .= "\r\n";
		fwrite($academicBowlFile, $fileInsert);
		fclose($academicBowlFile);
		header("Location: index.php?sub=1");
	} else { header("Location: index.php?sub=0"); }
?>