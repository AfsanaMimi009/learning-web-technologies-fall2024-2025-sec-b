<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['degree']) && count($_POST['degree']) >= 2) {
        
        echo "You selected the following degrees: ";
        echo implode(", ", $_POST['degree']);
    } else {
        
        echo "Error: Please select at least two degrees.";
    }
    
}
else {
    header('location: degree.html');
    exit();
}
?>
