<?php


if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    if (empty(trim($email))) {
        echo "Error: Email cannot be empty.";
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Please enter a valid email address (e.g., anything@example.com).";
    } 
    else {
        echo "Your email is: " . $email;
    }
} else 
{
    header('Location: Email.html');  
    exit(); 
}
?>
