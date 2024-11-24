<?php

session_start();

if(isset($_POST['submit'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $dob = $_POST['dob'];
    $email = trim($_POST['email']);
    $id = trim($_POST['id']);
    $gender = $_POST['gender'];
    $dept = $_POST[('dept')];
    



    if($username == null|| empty($dob) || empty($password) || empty($email) || empty($id) || empty($gender)  )
    {
        echo "All Section Must be Field";
    }
    //else if($username == $password){
        //echo "valid user!";

        //$_SESSION['xyz'] = true;
       // header('location: home.php');
    //}
    else{
        echo "Invalid user!";
    }
}else{
    header('location: login.html');
}
?>
