<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Recipient email address
    $to = "jntiamoah22@gmail.com";
    
    // Email subject
    $subject = "Message from $name";
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";
    
    // Email headers
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>