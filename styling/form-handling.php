<?php
$name=$_POST['pesin-name'];
$visitor_email=$_POST['pesin-email'];
$subject=$_POST['pesin-subject'];
$message=$_POST['pesin-message'];

$email_from='pbolarinwa423@stu.ui.edu.ng';
$email_subject='New Form submission';
$email_body="User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject:$subject.\n".
             "User Message: $message.\n"  ;

$to="myjoyhasarrived2004@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
?>