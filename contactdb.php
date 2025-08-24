<?php
session_start();
require_once 'connection.php';

if(isset($_POST['send_message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject =$_POST['subject'];
    $message = $_POST['message'];
    $status = 'unread'; 
    
    $query = "INSERT INTO contact_messages (name, email, subject, message, status) 
             VALUES ('$name', '$email', '$subject', '$message', '$status')";
    
    if(mysqli_query($conn, $query)) {
        $_SESSION['contact_status'] = 'Thank you for your message! We will get back to you soon.';
    } else {
        $_SESSION['contact_status'] = 'Error: There was a problem sending your message. Please try again.';
    }
    
    
    header("Location: contact.html");
    exit();
}
?>