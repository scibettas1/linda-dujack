<?php
if(isset($_POST['submit'])) {
$to = "lwdujack@gmail.com";
$subject = "website submission";
 
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
 
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $comment";
 
mail($to, $subject, $body);
 
header('Location: confirmation.htm');
} 
?>