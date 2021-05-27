<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'talktoaliyu@gmail.com';
$email_subject= 'New Form Submission';

$email_body = "user name: $name.\n".
             "user Email: $email.\n".
             "user phone: $phone.\n".
             "User Message: $message.\n";

$to = "deloyemoranigltd@gmail.com";

$headers = "from: $email_from \r\n";
$headers = "Reply-To: $email \r\n";
 mail($to, $email_subject, $email_body, $headers);
 header("Location: .html");
?>  