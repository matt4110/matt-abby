<?php

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$to = 'hello@mattandabby.us';
$subject = 'Contact Form Submission';

$body = "From: $Name\n Email: $Email\n Message: $Message";


if ($_POST['submit']){

	if(mail ($to, $subject, $body, $Email)){
		print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-thanks.php\">";
	} else {
		print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-error.php\">";
	}

}

?>