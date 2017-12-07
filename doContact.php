<?php
    session_start();

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $fullName = $firstName." ".$lastName;
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $message = wordwrap($message, 70, "\r\n");
    $from = 'From: TKE Website';
    $to = 'andrewdeeter.ad@gmail.com';

    $emailFrom = $fullName."<".$email.">";
    $headers = "From: ".$emailFrom." \r\n";
    $headers .= "Reply-To: ".$emailFrom." \r\n";

    $response = mail('andrewdeeter.ad@gmail.com', $subject, $message, $headers);
    
    if ($response == true) {
        $_SESSION["responseMessage"] = "You've successfully sent us a message, we'll be in touch soon!";
        header("Location:contactUs.html");
        exit;
    } else {
        $_SESSION["responseMessage"] = "There's been an error";
        header("Location:contactUs.html");
        exit;
    }

 ?>
