<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['gender'])) {
        echo "Error: Please select a gender.";
    } else {
        $gender = $_POST['gender'];
        echo "Your selected gender is: " . $gender;
    }
}

else {
    header('location: gender.html');
    exit(); 
}
?>
