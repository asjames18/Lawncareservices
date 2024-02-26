<?php
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone_Number'];
    $message = $_POST['Message'];

    $to = 'asjames18@gmail.com'; // Change this to your email address
    $subject = 'Quote Request'; // Change the subject if needed
    $body = "Name: $name\nEmail: $email\nPhone Number: $phone\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo '<p>Your message has been sent successfully. We will get back to you shortly.</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
} else {
    echo '<p>Something went wrong. Please try again.</p>';
}
?>
