<?php
// Check for empty fields
if(empty($_POST['message']))
   {
	echo "Напишите что-нибудь";
	return false;
   }
	
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'a.beautiful.skyline@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Письмо в мастерскую";
$email_body = "Письмо со странички.\n\n"."$message";
$headers = "From: a.beautiful.skyline@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
mail($to,$email_subject,$email_body,$headers);
return true;			
?>