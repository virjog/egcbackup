<?php
	if ($_POST["submit"]) {
		$catapultFile = fopen("catapult.txt", "a");
		foreach($_POST as $field) { if ($field != "Submit") { $fileInsert .= "$field,"; } }
		$fileInsert .= "\r\n";
		fwrite($catapultFile, $fileInsert);
		fclose($catapultFile);
		header("Location: index.php?sub=1");
	} else { header("Location: index.php?sub=0"); }
?>