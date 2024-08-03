<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $additional = htmlspecialchars($_POST['additional']);
    
    $to = "ast.arivusolai@gmail.com";
    $subject = "Contact Form Submission";
    $body = "First Name: $fname\nLast Name: $lname\nEmail: $email\nMessage: $message\nAdditional Details: $additional";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent!";
    } else {
        echo "Email sending failed.";
    }
}
?>
