<?php

$to = 'jacwynnjr@gmail.com';
$subject = 'Encore Contact Form';

$name           = $_POST['name'];
$dateOfEvent    = $_POST['date-of-event'];
$typeOfEvent    = $_POST['type-of-event'];
$venue          = $_POST['venue'];
$colorThemes    = $_POST['color-themes'];
$numberOfGuest  = $_POST['number-of-guest'];
$services       = $_POST['service'];
$email          = $_POST['email'];
$phone          = $_POST['phone'];
$feedback       = $_POST['feedback-question'];
$reachout       = $_POST['reachout'];
$message        = $_POST['message'];


$body =  "Name: ".$name."\n";
$body .=  "Date of Event: ".$dateOfEvent."\n";
$body .=  "Type of Event: ".$typeOfEvent."\n";
$body .=  "Venue: ".$venue."\n";
$body .=  "Color/Themes: ".$colorThemes."\n";
$body .=  "Number of Guest: ".$numberOfGuest."\n";
$body .=  "Services: ".$services."\n";
$body .=  "Phone: ".$phone."\n";
$body .=  "How did you hear about us?: ".$feedback."\n";
$body .=  "Best way to reach you: ".$reachout."\n";
$body .=  "Email: ".$email."\n";
$body .=  "Comments: ".$message."\n";


$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
$headers = 'From: Encore Event Contact Form' . "\r\n" .
'Reply-To: '.$email. "\r\n" .
'X-Mailer: PHP/' . phpversion();


if (_POST){
    mail($to, $subject, $body, $headers);
    sleep(2);
    echo "<meta http-equiv='refresh' content=\"0; url=index.html\">";
};



?>