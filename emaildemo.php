<?php
require_once "class.phpmailer.php";
$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug = 1;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port = 465;                   // set the SMTP port for the GMAIL server
$mail->Username = "subhratocoder@gmail.com";  // GMAIL username
$mail->Password = "1996subhrato";            // GMAIL password

$mail->SetFrom('subhratocoder@gmail.com', 'Metropolitan Guide');

$mail->AddReplyTo("subhratocoder@gmail.com", "Metropolitan Guide");

$mail->Subject = "New Enquiry From Metropolitan Guide";

$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->Subject = "Password Reset Metropolitan Guide";

$body = "Your new password is  please change after login";

$mail->MsgHTML($body);

$address = "danishbhola10@gmail.com";
$mail->AddAddress($address, "Metropolitan Guide");


if (!$mail->Send()) {
    return "false";
} else {
    return "true";
}

