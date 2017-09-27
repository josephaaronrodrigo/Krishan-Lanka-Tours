<?php
$switch = $_POST['switch'];
switch($switch){
	case 1: contactEmail();
}

function contactEmail(){
	$name = $_POST['contacts-name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = "info@krishanlankatours.com";
	$subject = "Enquiry";
	
	
	$text = "<html><head></head><body>Name: $name <br> Email: $email <br> Message: $message</body></html>";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: ".$email;
	mail($to,$subject,$text,$headers);
	header("location:contact.html");
}
?>