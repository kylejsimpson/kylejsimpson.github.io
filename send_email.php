<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $inquiry = $_POST["inquiry"];

  // Email address to receive the inquiry
  $to = "kylejsimpsonbusiness@gmail.com"; // Replace this with your email address

  // Subject and message
  $subject = "Contact Form Inquiry from $name";
  $message = "Name: $name\n";
  $message .= "Email: $email\n\n";
  $message .= "Inquiry:\n$inquiry\n";

  // Additional headers
  $headers = "From: $email";

  // Send email
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Error sending email. Please try again later.";
  }
}
?>
