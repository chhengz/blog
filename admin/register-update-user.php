<?php

include("./authentication.php");

// Add User
if(isset($_POST['add_user_btn']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1' : '0';

    $insert_query = "INSERT INTO users (fname, lname, email, password, role_as, status) 
                    VALUES ('$fname', '$lname', '$email', '$password', '$role_as', '$status') ";
    $insert_query_run = mysqli_query($con, $insert_query);

    if($insert_query_run)
    {
        $_SESSION['message'] = "✅ User Added Successfully";
        header("Location: register-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "❌ User Add Failed!";
        header("Location: register-view.php");
        exit(0);
    }
}


// Update User
if(isset($_POST['update_user_btn']))
{
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1' : '0';

    $update_query = "UPDATE users SET fname='$fname', lname='$lname', email='$email', password='$password', role_as='$role_as', status='$status' WHERE id='$user_id' ";
    $update_query_run = mysqli_query($con, $update_query);

    if($update_query_run)
    {
        $_SESSION['message'] = "✅ User Updated Successfully";
        header("Location: register-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "❌ User Update Failed!";
        header("Location: register-view.php");
        exit(0);
    }
}

// delete User
if(isset($_POST['delete_user_btn']))
{
    $user_id = $_POST['delete_user_btn'];
    $delete_query = "DELETE FROM users WHERE id = '$user_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        $_SESSION['message'] = "✅ User Deleted Successfully";
        header("Location: register-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "❌ User Delete Failed!";
        header("Location: register-view.php");
        exit(0);
    }
}


?>