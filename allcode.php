<?php
// logout code
session_start();

if(isset($_POST['logout'])) 
{
    // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "You are logged out Successfully!";
    header('location: index.php');
    exit(0);
}
