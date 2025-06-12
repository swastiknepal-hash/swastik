<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "swastiksoftware12@gmail.com"; // 
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you! Your message has been sent.</h2>";
    } else {
        echo "<h2>Sorry, something went wrong. Please try again later.</h2>";
    }
} else {
    header("Location: contact.html");
    exit();
}
?>
