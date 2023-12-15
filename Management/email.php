<?php

    $to = "vale.fazio.2002@gmail.com";
    $subject = "Subject of your email";
    $message = "Body of your email";
    $headers = "From: meetingarcobaleno@gmail.com";

    // Use the mail() function to send the email
    mail($to, $subject, $message, $headers);

?>
