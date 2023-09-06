<?php
//get data from form
$name =$_POST[ 'name' ];
$email =$_POST[ 'email' ];
$message =$_POST[ 'message' ];
$subject =$_POST[ 'subject' ];

$to = "shekhawatsuraj202@gmail.com";

$subject = "Mail From Portfolio | Suraj Singh Shekhawat";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message . "\r\n\subject" . $subject;
$headers = "From: noreply@surajportfolio-2007.com" . "\r\n" . "CC: noreply@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>