<?php
$name = $_POST['name'];
$visitor_email - $_POST['email'];
$subject - $_POST['subject'];
$message - $_POST['message'];

$email_from - 'farhab.dvm@gmail.com';

$email_subject - 'New Form Submission';
    
$email_body = "User Name: $name.\n".
    "User Email: $visitor_email.\n".
    "Subject: $subject.\n".
    "User Message: $message.\n";

$to - 'farhab.dvm@gmail.com';

$headers - "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>

<iframe width="560" height="315" src="https://www.youtube.com/embed/BzcGFaoF7RY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>