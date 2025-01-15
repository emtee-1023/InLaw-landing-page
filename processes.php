<?php
session_start();
require 'includes/connect.php';
require 'includes/mail.php';

date_default_timezone_set('Africa/Nairobi');
$currentTimestamp = date('Y-m-d H:i:s');

if (isset($_POST['submit-contact-form'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contact_form_submissions (FullName, Email, Phone, Message, CreatedAt) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $message, $currentTimestamp);
    $stmt->execute();
    $stmt->close();

    $emSubject = "New Contact Form Submission";
    $emMessage = contactFormMail($name, $email, $phone, $subject, $message);

    if (noReplyMail('info@inlaw-legal.tech', $emSubject, $emMessage)) {
        $_SESSION['contact-success'] = "Your message has been sent successfully!";
        header('location: index#contact');
        exit();
    } else {
        $_SESSION['contact-error'] = "An error occurred while sending your message. Please try again!";
        header('location: index#contact');
        exit();
    }
} else if (isset($_POST['submit-newsletter-form'])) {
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO newsletter_submissions (Email, CreatedAt) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $currentTimestamp);

    if ($stmt->execute()) {
        $stmt->close();
        $_SESSION['newsletter-success'] = "You have successfully subscribed to our newsletter!";
        header('location: index#contact');
        exit();
    } else {
        $stmt->close();
        $_SESSION['newsletter-error'] = "An error occurred while subscribing to our newsletter. Please try again!";
        header('location: index#contact');
        exit();
    }

    $stmt->close();
} else {
    header('location: index');
    exit();
}
