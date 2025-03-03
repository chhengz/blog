<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'php_blog';

$con = mysqli_connect($host, $username, $password, $db);

if(!$con)
{
    header('location: ../errors/dberror.php');
    die();
}



?>