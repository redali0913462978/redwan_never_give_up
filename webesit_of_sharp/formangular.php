<?php
$name= $_POST['name'];
$vistor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['massage'];

$email_from='redlove469@gmail.com'
$email_subject='New email submition'
$email_body="User Name:$name.\n".
            "User Email:$vistor_email.\n".
            "subject:$subject.\n".
            "User Message:$message.\n";

$to='redtruelove469@gmail.com';
$headres="From: $email_from\r\n";
$headres .="Reply-to: $visror_email\r\n";
 
mail($to,$email_body,$email_subject,$headres);
header("location:contact.html");
?>