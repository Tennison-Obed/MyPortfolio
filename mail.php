<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n  Message: $message";
$recipient = "obedtennyson1998@gmail.com";
$subject = "WEBSITE - CONTACT REQUEST";
$header = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $header);
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
