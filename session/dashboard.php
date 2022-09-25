<?php
    // session_start();

    $email = isset($_COOKIE['email']);
    if(!$email)
    {
        header('location: ./index.php');
    }
    
        echo "<h2>You Have Been Logged In</h2>";       
   
    
    
    
?>