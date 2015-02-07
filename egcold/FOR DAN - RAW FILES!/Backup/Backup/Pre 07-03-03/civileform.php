<html>
<head>
<title>Teaching Awards</title>
</head>
<body>
<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$professor = $_POST["professor"];
	 
	if( $name !="" && $email !="")
	{
		$File = "civile.csv";
		$fp = fopen($File, 'a');
		if ( $fp )
		{
			// Write new information to output file$name = $_GET["name"];

			$entry= "\n$name,$email,$professor";
			fwrite($fp, $entry);
			fclose($fp);
			
			$notify = "open@mivadev.com";  ///Enter the email address of the person you want to send this email
			
			// Send notification email
			$message = "I have just registered your vote.\n\n";
			$message = $message. "You can view the updated list at http://coewww.rutgers.edu/egc/civile.csv";
			$success = mail( $notify, "New Vote", $message, "From: \"Teaching Vote\"<$email>\n");

			// Alert the user that their transaction was successful
			echo "<b> Your information has been successfully entered into our database</b><br><br><br>";
		}
		else
		{
			// Send error notification
			$message = "The vote did not register and was not saved.";
			$success = mail( $notify, "Failure in Teaching award form", $message, "From: \"Teaching Award\"<$email>\n");

			// Alert user of the error and status of their information
			if ( $success )
				echo "<b>File could not be opened for edit. Your information was not saved, but the EGC was notified.</b><br><br><br>";
			else
				echo "<b>File could not be opened for edit. Your information was not saved.</b><br><br><br>";
		}
	}
	else {
		echo "<p style='color:red'>You must enter all the values in the form to submit your information.</p>";
	}

?>

<center>
<b>Fill out this form to vote for your professor.</b>
Note: All fields are mandatory.
<br><br><br>

<form method="post" action="<?php $PHP_SELF;?>">

	<!-- USE THIS INPUT TO CHANGE WHO GETS NOTIFIED WHEN NEW NAMES ARE ADDED TO THE FILE -->
	<input type="hidden" name="notify" value="ahack28@eden.rutgers.edu">

	Name: <input type="text" name="name" size=20> <br><br>

	Email: <input type="text" name="email" size=20> <br><br>

	Professor: <select name="professor">
		<option selected>Dr. Najm</option>
		<option>Dr. Nawy</option>
		<option>Dr. Maher</option>
		<option>Dr. Yook Kong Yong </option>
	</select><br><br>

	
	<input type="submit" name="Submit" value="Submit Form">
	<input name="reset" type="reset" value="Reset Form">
</form>
</center>

</body>

</html>