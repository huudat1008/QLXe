<?php
    session_start();
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']))
        header('location: ../login');
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        if (isset($_GET['img']))
        {
            $img = $_GET['img'];
        }
        else
            header('location: ../display');
    }
    else
        header('location: ../display');
    $sql = 'delete from giaodien where ID = "'.$id.'"';
    unlink('../../IMG/'.$img);
    if(mysqli_query($con, $sql))
        header('location: ../display');
?>