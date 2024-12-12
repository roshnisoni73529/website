<?php
$name=$_POST['name'];
$visitor_email =$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='roshnisoni@gmail.com';
$email_subject='New Form Submission';
$email_subject='New Form Submission';
$email_body= "User Name:" $name.\n".
              "User Name:" $visitor_email.\n".
              "Subject:" $subject.\n".
              "User Message:" $message.\n";
$to='roshnisoni689@gmail.com';
$headers="Fron:$email_from\r\n";
$headers .= "Reply-To: $vistito_email \r\n";
mail($email_sybject,$email_body,$headers);
header("Location: contact.html");
?>