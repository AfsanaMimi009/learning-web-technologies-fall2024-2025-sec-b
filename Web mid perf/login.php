<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = trim($_POST['userid']);
    $password = trim($_POST['password']);

    if (empty($userid) || empty($password)) {
        echo "Username and password cannot be empty.";
    } else {
        $users = file("users.txt");
        $is_valid_user = false;

        foreach ($users as $user) {
            list($stored_user, $stored_pass, $stored_role) = explode(",", trim($user));
            if ($userid === $stored_user && password_verify($password, $stored_pass)) {
                $is_valid_user = true;
                $_SESSION['username'] = $userid;
                $_SESSION['role'] = $stored_role;
                setcookie('status', 'true', time() + 3000, '/');
                header("Location: " . ($stored_role === "admin" ? "admin.php" : "user.php"));
                exit;
            }
        }

        if (!$is_valid_user) {
            echo "Invalid username or password!";
        }
    }
} else {

    header('Location: login.html');
    exit;
}
?>