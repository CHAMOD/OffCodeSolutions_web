<?php 
ini_set( 'smtp_port', 465 );

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent="From: $fname \n Message: $message";
$recipient = "ctpathirana@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

echo $fname;
echo $lname;
echo $email;
echo $phone;
echo $message;

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
header('Location: ../index.html');
exit;
?>