<?php
    session_start();
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']))
        header('location: ../login');
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = 'update dondangki set DaXuLy = 1 where MaDon = "'.$id.'"';
        if(mysqli_query($con, $sql))
            header('location: ../order');
    }
    else
        header('location: ../order');
?>