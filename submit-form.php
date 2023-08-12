<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set up the email
  $to = "aydayevafarida@gmail.com"; // Replace with your email address
  $subject = "New Contact Form Submission";
  $body = "First Name: $fname\nLast Name: $lname\nEmail: $email\n\n$message";

  // Send the email
  if (mail($to, $subject, $body)) {
    echo "Thank you for your message. We'll get back to you soon!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>