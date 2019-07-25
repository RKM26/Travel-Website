<?php
session_start();
$to = "addictedrish@gmail.com";
$subject = "Travel Booking Confirmation";
$txt = "Thanks for Visiting And chosing us for providing the service to you";
$headers = "From: rishabhkumarmayank@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

if(mail($to,$subject,$txt,$headers)){
	echo "successful";
	header("Location: front.php");
}
else {
	echo "failure";
}


?>