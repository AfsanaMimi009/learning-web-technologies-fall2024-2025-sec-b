<?php


if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    
    if ($username == null || trim($username) == "") {
        echo "Error: Name cannot be empty.";
    } 
    elseif (count(explode(" ", trim($username))) < 2) {
        echo "Error: Name must contain at least two words.";
    } 
    elseif (!ctype_alpha($username[0])) {
        echo "Error: Name must start with a letter.";
    } 
    elseif (!preg_match('/^[a-zA-Z.\- ]+$/', $username)) {
        echo "Error: Name can only contain letters, periods, dashes, and spaces.";
    } 
    else {
        echo "Your username is: ". $username;
    }
} else {
    header('location: Name.html');
    exit(); 
}
?>

