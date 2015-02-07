<?php
	if ($_POST){
		$deferedMaintenanceFile = fopen("deferredMaintenance.csv", "a");
		foreach($_POST as $field) {
			if ($fileInsert == "") $fileInsert = $field;
			elseif ($field != "Submit") $fileInsert .= ",$field";
		}
		$string .= ";\r\n";
		fwrite($deferedMaintenanceFile, $fileInsert);
		fclose($deferedMaintenanceFile);
		header("Location: deferredMaintenance.php?sub=1");
	} else header("Location: deferredMaintenance.php?sub=0");
?>