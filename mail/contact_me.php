<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['subject']) 	||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = 'atehrani21@gmail.com';
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@andrewtehrani.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$subject,$email_body,$headers);
// $mail=mail($to, "Subject: $subject",$message);
// if($mail){
// echo "Thank you for using our mail form";
// }else{
// echo "Mail sending failed."; 
// }
return true;			
?>
