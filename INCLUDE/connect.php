<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'xedtb';
    $con = mysqli_connect($server,$user,$pass,$dbname);
    if (!$con)
        echo 'Can not connect to MySQL Server or database!';
    mysqli_set_charset($con,'utf8');
?>