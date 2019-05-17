<?php
include 'dbh/db.php';
include 'dbh/db_functions.php';

if(isset($_POST['signup'])){
    $first_name = mysqli_real_escape_string($db, $_POST['fname']);
    $last_name = mysqli_real_escape_string($db, $_POST['lname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
    $status = mysqli_real_escape_string($db, $_POST['status']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    
    if($password != $confirm_password){
        header("Location: user_signup.php?error=password");
    }
    else{
        $hashedPassword = password_hash($confirm_password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(`username`,`password`,`first_name`, `last_name`, `status`, `email`) VALUES('$username', '$hashedPassword', '$first_name', '$last_name', '$status', '$email')";
        $result = mysqli_query($db, $query);

        header("Location: user_signup.php?success=");
    }
}