<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form fields and sanitize the data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    echo  " Name: "+$name +" Email: "+$email +" message: "+$message;

    // TODO: Add your own email processing code here

    // Optionally, you can redirect the user to a thank you page
    // header('Location: thank_you.html');
    // exit;
}
?>