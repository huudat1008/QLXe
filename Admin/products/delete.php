<?php
    session_start();
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']))
        header('location: ../login.php');
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        if (isset($_GET['img']))
        {
            $hinh = $_GET['img'];
        }
        else
            header('location: ../products.php');
    }
    else
        header('location: ../products.php');
    $sql = 'select * from chitietxe where MaXe = "'.$id.'"';
    $rs = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($rs);
    $hinh1 = $r['Hinh1'];
    $hinh2 = $r['Hinh2'];
    $hinh3 = $r['Hinh3'];
    $hinh4 = $r['Hinh4'];
    $hinh5 = $r['Hinh5'];
    $hinh6 = $r['Hinh6'];
    $hinh7 = $r['Hinh7'];
    $sql1 = 'delete from xe where MaXe = "'.$id.'"';
    $sql2 = 'delete from xe where MaXe = "'.$id.'"';
    unlink('../../IMG/Product/'.$hinh);
    unlink('../../IMG/Product/'.$hinh1);
    unlink('../../IMG/Product/'.$hinh2);
    unlink('../../IMG/Product/'.$hinh3);
    unlink('../../IMG/Product/'.$hinh4);
    unlink('../../IMG/Product/'.$hinh5);
    unlink('../../IMG/Product/'.$hinh6);
    unlink('../../IMG/Product/'.$hinh7);
    if(mysqli_query($con, $sql1) && mysqli_query($con, $sql2))
        header('location: ../products.php');
?>