<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php

$connection=mysqli_connect('localhost','root','','admin');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['succcess'] = "Your Data is Updated";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: register.php'); 
    }
}

?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>