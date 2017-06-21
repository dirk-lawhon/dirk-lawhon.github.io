<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['reason'];
    $message = $_POST['comments'];
    $from = 'From: dirklawhon.com';
    $to = 'dirklawhon@protonmail.com';
    $human = $_POST['human'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something went wrong, try again!</p>';
        }
    }

?>
