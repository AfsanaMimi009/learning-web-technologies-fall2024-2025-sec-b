<?php
if (isset($_POST['submit'])) {
    $bloodGroup = $_POST['BloodGr'];
    if (empty($bloodGroup)) {
        echo "Error: Please select a blood group.";
    } else {
        echo "Your selected blood group is: " . $bloodGroup;
    }
}

else {
    header('location: BloodGroup.html');
    exit();
}
?>
