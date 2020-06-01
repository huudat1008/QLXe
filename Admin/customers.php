<?php
    session_start();
    include ('../INCLUDE/connect.php');
    include ('../INCLUDE/admin.php');
    $user = $_SESSION['user'];
    if(!isset($user))
        header('location: login.php');
    if(isset($_POST['thoat']))
    {
        unset($_SESSION['user']);
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/adindex.css">
    <title>Thiết kế Website</title>
</head>
<body>
    <?php
        echo $adheader;
        if($user == 'admin')
        {
            echo '<a href="user.php" class="admin-header-center-link">User</a>';
        }
        echo $adheader1.$user.$adheader2;
        echo $adbody;
        if($user == 'admin')
        {
        echo '<a href="user.php" class="body-left-group">
                <img src="../IMG/user.png" alt="" class="body-left-group-icon">
                <span class="body-left-group-title">Quản lý User</span>
            </a>';
        }
        echo $adbody1;
    ?>
        <div class="body-main">
        	<div class="body-main-header">
                <img src="../IMG/khachhang.png" alt="" class="body-left-group-icon">
                <span class="body-main-header-title">Quản lý khách hàng</span>
            </div>
            <div class="body-main-content">
                <div class="body-main-content-header">
                    <span class="body-main-content-header-title">Danh sách khách hàng</span>
                </div>
                <table class="body-main-content-table">
                    <tr>
                        <th>STT</th>
                        <th>Họ và tên</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Tác vụ</th>
                    </tr>
                    <?php
                        $stt = 1;
                        $sql = 'select * from khachhang';
                        $rs = mysqli_query($con, $sql);
                        while ($r = mysqli_fetch_assoc($rs)){
                            $makh = $r['MaKH'];
                            $tenkh = $r['TenKH'];
                            $diachi = $r['DiaChi'];
                            $sdt = $r['Sdt'];
                            $email = $r['Email'];
                            echo '<tr>
                                    <td>'.$stt.'</td>
                                    <td>'.$tenkh.'</td>
                                    <td>'.$diachi.'</td>
                                    <td>'.$sdt.'</td>
                                    <td>'.$email.'</td>
                                    <td>
                                        <a href="customers/edit.php?id='.$makh.'"><img src="../IMG/update.png" alt="" class="table-img"></a>
                                        <a href="customers/delete.php?id='.$makh.'"><img src="../IMG/delete.png" alt="" class="table-img"></a>
                                    </td>
                                </tr>';
                            $stt++;
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>