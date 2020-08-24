<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['cname']))
$cname = $_POST['cname'];
if(isset( $_POST['numb']))
$numb = $_POST['numb'];
$subject = "A user filled DOWNLOAD AGENCY Form";

$content="From: $name \n Email: $email \n Company-Name: $cname";
$recipient = "marketing.digitalmediahub@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $cname, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>


