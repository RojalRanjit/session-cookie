<?php
    // session_start();

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $db_email = 'rojal@gmail.com';
    $db_pass = "1234";
    if($db_email === $email && $db_pass === $pass)
    {
        // $_COOKIE['loggedin'] = true;
        setcookie("email", $email, time() + 5, "/");
        header('location: dashboard.php');
    }
    else
    {
        header('location: ./index.php');
    }
    
?>
