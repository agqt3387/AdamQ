<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "adam.quadai@gmail.com"; // Replace with your email address
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";

  // Compose the email message
  $emailContent = "You have received a new message from your website contact form.\n\n";
  $emailContent .= "Name: $name\n";
  $emailContent .= "Email: $email\n";
  $emailContent .= "Subject: $subject\n";
  $emailContent .= "Message:\n$message\n";

  // Send the email
  if (mail($to, $subject, $emailContent, $headers)) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Oops! Something went wrong and we couldn't send your message.";
  }
}
?>
