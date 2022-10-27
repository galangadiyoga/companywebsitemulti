<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'galang890ay@gmail.com';

$email_subject = 'New Form Submission';

$email_body = 
"User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Subject: $subject.\n".
"User Massage: $message.\n";

$to = 'hokagepertama080@gmail.com';

$headers = "from: $email_form \r\n";

$headers = "Replay-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: stmlcontact.html");

?>