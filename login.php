<?php

session_start();
include 'dbh/db.php';



if(isset($_POST['login'])){
    // Check if any field is left empty

    if(empty($_POST['username']) || empty($_POST['password'])){
        $tempName = $_POST['username'];
        header("Location: user_login.php?error=empty&username=$tempName");
        exit();
    }
    // Get username and password user inputs

    else{
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // Check if user exists in database

        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) < 1){
            header("Location: user_login.php?error=username&username=$username");  
            exit();          
        }
        // Verify user password

        elseif(mysqli_num_rows($result) == 1){
            if($user = mysqli_fetch_assoc($result)){
                $hashedPassword = $user['password'];
                $verify_password = password_verify($password, $hashedPassword);

                if($verify_password == false){
                    header("Location: user_login.php?error=password&username=$username");
                    exit();
                }
                // Log the user in
                elseif($verify_password == true){
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['first_name'] = $user['first_name'];
                    $_SESSION['last_name'] = $user['last_name'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['status'] = $user['status'];

                
                    switch ($_SESSION['status']) {
                        case 'farmer':
                            header("Location: farmer/index.php");
                            exit();
                            break;

                        case 'agent':
                            header("Location: agent/index.php");
                            exit();
                            break;

                        default:
                            header("Location: user_login.php?error=loginError");
                            break;
                    }
                }
            }
        }
    }

}





mysqli_close($db);
