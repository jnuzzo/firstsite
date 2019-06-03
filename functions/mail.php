<?php
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Message: $message";
$recipient = "john.nuzzo@icloud.com";
$subject = "Nuzzo.com Contact Form Submission";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";


