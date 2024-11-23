<?php
session_start();

if (isset($_POST['submit'])) 
{
    $dd = $_POST['dd'];
    $mm = $_POST['mm'];
    $yyyy = $_POST['yyyy'];


    if (empty(trim($dd)) || empty(trim($mm)) || empty(trim($yyyy))) {
        echo "Error: Date of Birth cannot be empty.";
    } elseif (!is_numeric($dd) || !is_numeric($mm) || !is_numeric($yyyy)) {
        echo "Error: All fields must be numbers.";
    } elseif ($dd < 1 || $dd > 31) {
        echo "Error: Day (DD) must be between 1 and 31.";
    } elseif ($mm < 1 || $mm > 12) {
        echo "Error: Month (MM) must be between 1 and 12.";
    } elseif ($yyyy < 1953 || $yyyy > 1998) {
        echo "Error: Year (YYYY) must be between 1953 and 1998.";
    } else {
        echo "Your Date of Birth is: " .$dd . "/" . $mm . "/" . $yyyy;
    }
} else {
    header('Location: Date of birth.html'); 
    exit();
}
?>
