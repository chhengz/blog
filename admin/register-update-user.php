<?php

include("./authentication.php");


if(isset($_POST['update_user_btn']))
{
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1' : '0';

    $update_query = "UPDATE users SET fname='$fname', lname='$lname', email='$email', password='$password', role_as='$role_as' WHERE id='$user_id' ";
    $update_query_run = mysqli_query($con, $update_query);

    if($update_query_run)
    {
        $_SESSION['message'] = "✅ User Updated Successfully";
        header("Location: register-view.php");
    }
    else
    {
        $_SESSION['message'] = "❌ User Update Failed!";
        header("Location: register-view.php");
        exit(0);
    }
}


?>