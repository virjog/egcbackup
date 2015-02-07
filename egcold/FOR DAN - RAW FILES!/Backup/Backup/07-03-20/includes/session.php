<?php
	$_SESSION['active'] = TRUE;
	$_SESSION['logged_in'] = FALSE;
	$_SESSION['login_flag'] = "none";
	$_SESSION['pin'] = "";
	$_SESSION['admin'] = FALSE;
	
	if (date('n') < 2) $_SESSION['title'] = "Fall ".date('Y');
	else $_SESSION['title'] = "Spring ".(date('Y') + 1)
?>