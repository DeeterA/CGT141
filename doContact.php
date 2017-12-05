<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $fullName = $firstName." ".$lastName;
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = 'From: TKE Website';
    $to = 'andrewdeeter.ad@gmail.com';

    $body = "From: $fullName\n E-Mail: $email\n Message:\n $message";

    mail($to, $subject, $body, $from);
    header("Location:contactUs.html");
    exit;

 ?>
