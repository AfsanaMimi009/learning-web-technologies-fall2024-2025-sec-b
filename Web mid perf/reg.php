?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = trim($_POST['Name']);
    $password = trim($_POST['password']);
    $Confirm password = trim($_POST['Confirm password']);
    $id = trim($_POST['id']);
    $role = trim($_POST['role']);

 
    if (empty($Name) || empty($password) || empty($Confirm password) || empty($id) || empty($role)) {
        echo "All fields must be filled.";
    } 
    else if ($password !== $Confirm password) {
        echo "Passwords do not match.";
    } 
    else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $user_data = "$Name,$hashed_password,$role\n";
        file_put_contents("users.txt", $user_data, FILE_APPEND);

        header('Location: login.php');
        exit;
    }
} else {

    header('Location: registration.html');
    exit;
}
?>