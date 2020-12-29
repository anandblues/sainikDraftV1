<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from ='sainiksecurityservices.com';
$email_subject =' Business Enquiry';
$email_body = "User name : $name.\n".
               "User Email: $visitor_email.\n".
                 "USer Message:$message.\n";

$to = "anandblues@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location : contact.html");

?>