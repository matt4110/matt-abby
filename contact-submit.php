<?php

$EmailFrom = Trim(stripslashes($_POST['Email']));
$Name = $_POST['Name'];
$EmailTo = "matthew.johnson4110@gmail.com"; // <- Please add your email
$Subject = "Matt + Abby Photography have received a new message!";
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
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: hello@mattandabby.us");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-thanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-error.php\">";
}
?>