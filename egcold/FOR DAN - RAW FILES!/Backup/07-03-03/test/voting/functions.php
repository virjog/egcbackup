<?php
	function titlize($string) {
		$stringParts = explode(" ", $string);
		
		return $stringParts[0];
	}
	
	function send_email($user, $pass) {
		mail($user."@eden.rutgers.edu", "First Year Elections Password", "$pass\n\nPlease visit http://egc.rutgers.edu to vote!", "From: egc_exec@email.rutgers.edu\nReply-To: egc_exec@email.rutgers.edu\nX-Mailer: PHP/".phpversion());
	}
?>