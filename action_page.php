<?php
// Retrieve form data
$first_name = $_POST['first'];
$last_name = $_POST['last'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$reason = $_POST['option'];
$subscribe = isset($_POST['subscribe']) ? "Yes" : "No";
$location = $_POST['location'];

// Create email message
$to = "williamsjdawson@gmail.com"; // replace with your email address
$subject = "New contact form submission";
$body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nPhone: $phone\nMessage: $message\nReason for Contact: $reason\nSubscribe to newsletter: $subscribe\nLocation: $location";

// Send email
if (mail($to, $subject, $body)) {
  echo "Thank you for contacting us. We will get back to you soon.";
} else {
  echo "Sorry, there was a problem sending your message. Please try again later.";
}
?>
