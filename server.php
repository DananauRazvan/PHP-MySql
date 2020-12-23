<?php
    session_start();
    $username = "";
    $email = "";
    $errors = array();
    $hostname = "xxxxxxxxx";
    $dbUsername = "xxxxxxxxx";
    $dbPassword = "xxxxxxxxx";
    $dbName = "xxxxxxx";
    $db = mysqli_connect($hostname, $dbUsername, $dbPassword, $dbName);
    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
        if(empty($username)){
            array_push($errors, "The username is required");
        }
        if(empty($email)){
            array_push($errors, "The email is required");
        }
        if(empty($password_1)){
            array_push($errors, "The password is required");
        }
        if(strlen($password_1) <= 7){
            array_push($errors, "The password must be at least 8 characters long");
        }
        $digits = preg_match('/\d/', $password_1);
        if($digits == 0){
            array_push($errors, "The password must contain at least one digit");
        }
        if($password_1 != $password_2){
            array_push($errors, "The passwords do not match");
        }
        if(empty($phone_number)){
            array_push($errors, "The phone number is required");
        }
        if(strlen($phone_number) != 10){
            array_push($errors, "The phone number must have 10 digits");
        }
        if(count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO register (username, email, password, phone_number)
                        VALUES ('$username', '$email', '$password', '$phone_number')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');

        }
    }
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        if(empty($username)){
            array_push($errors, "Username is required");
        }
        if(empty($password)){
            array_push($errors, "Password is required");
        }   
        if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }
            else{
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>
