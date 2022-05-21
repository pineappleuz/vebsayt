<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "pineApple.uz";
$email_subject = "Yangi xabar";
$email_body = "Ismi: $name.\n". 
                "User email: $visitor_email.\n".
                    "user Message: $message.\n";
$to = "kubernetesuz@mail.ru";
$headers = "from: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html")

// pineApple.uz

?>