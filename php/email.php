<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message']
    $from = 'From: TKE Website';
    $to = 'andrewdeeter.ad@gmail.com';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    mail($to, $subject, $body, $from)

 ?>
