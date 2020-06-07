<?php
    session_start();
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']))
        header('location: ../login');
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else
        header('location: ../customer');
    $sql = 'delete from khachhang where MaKH = "'.$id.'"';
    if(mysqli_query($con, $sql))
        header('location: ../customer');
?>