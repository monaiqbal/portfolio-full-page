<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_from='mona.iqbal2015@gmail.com';
$email_subject="New form Submission";
$email_body="User Name:$name.\n". 
        "UserEmail:$visitor_email.\n". 
        "user Message:$message.\n";
$to='mona.iqbal2015@gmail.com';
$headers="Form: $email_form \r\n";
$headers="Reply-To:$visitor_email  \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:index.html");


?>