<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Set up the recipient email address
    $to = "info@pvpitsangli.edu.in";

    // Set up the email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Compose the email content
    $email_content = "<strong>Name:</strong> $name<br>";
    $email_content .= "<strong>Email:</strong> $email<br>";
    $email_content .= "<strong>Subject:</strong> $subject<br>";
    $email_content .= "<strong>Message:</strong> $message<br>";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // If it's not a POST request, show an error message
    echo "Error: Method not allowed!";
}
?>
