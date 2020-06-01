<?php
    session_start();
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']) || $_SESSION['user'] != 'admin')
        header('location: ../login.php');
    if (isset($_GET['id']))
    {
        $username = $_GET['id'];
    }
    else
        header('location: ../user.php');
    $sql = 'delete from user where Username = "'.$username.'"';
    if(mysqli_query($con, $sql))
        header('location: ../user.php');
?>