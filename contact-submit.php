<?php

$EmailFrom = Trim(stripslashes($_POST['Email']));
$EmailTo = "hello@mattandabby.us"; // <- Please add your email
$Subject = "Message from your WebSite contact form";
$Title = Trim(stripslashes($_POST['Name'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-error.php\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-thanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-error.php\">";
}
?>