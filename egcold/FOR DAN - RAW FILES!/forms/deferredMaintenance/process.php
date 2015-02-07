<?php
	if ($_POST["submit"]){
		$deferedMaintenanceFile = fopen("deferredMaintenance.txt", "a");
		$fileInsert = "{$_POST['name']} ({$_POST['netID']}), {$_POST['class']}\r\n";
		$fileInsert .= "Residence: {$_POST['residence']}\r\n";
		$fileInsert .= "{$_POST['problemCampus']}: {$_POST['problemCategory']}".(($_POST["problemCategory"] == "Other")?("-{$_POST['otherCategory']}"):(""))."\r\n";
		$fileInsert .= "{$_POST['problemLocation']}\r\n";
		$fileInsert .= "{$_POST['problemDescription']}\r\n";
		$fileInsert .= "\r\n-----\r\n\r\n";
		fwrite($deferedMaintenanceFile, $fileInsert);
		
		fclose($deferedMaintenanceFile);
		header("Location: index.php?sub=1");
	} else header("Location: index.php?sub=0");
?>