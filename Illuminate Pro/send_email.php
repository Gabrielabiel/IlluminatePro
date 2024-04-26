<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = "gabrysiayy@gmail.com";
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Email sent successfully";
    } else {
        http_response_code(500);
        echo "Error sending email";
    }
} else {
    http_response_code(403); // Forbidden
    echo "Invalid request";
}
?>
