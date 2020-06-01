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
                <span class="body-main-header-title">Quản lý đơn hàng</span>
            </div>
            <div class="body-main-content">
                <div class="body-main-content-header">
                    <span class="body-main-content-header-title">Danh sách đơn hàng</span>
                </div>
                <table class="body-main-content-table">
                    <tr>
                        <th>STT</th>
                        <th>Họ và tên</th>
                        <th>Ngày đăng kí</th>
                        <th>Tên xe</th>
                        <th>Giá</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Trạng thái</th>
                        <th>Tác vụ</th>
                    </tr>
                    <?php
                        $stt = 1;
                        $sql = 'SELECT dondangki.*,xe.TenXe,xe.Gia FROM dondangki, xe WHERE dondangki.MaXe = xe.MaXe';
                        $rs = mysqli_query($con, $sql);
                        while ($r = mysqli_fetch_assoc($rs)){
                            $madon = $r['MaDon'];
                            $tenkh = $r['TenKH'];
                            $ngaydk = $r['NgayDK'];
                            $tenxe = $r['TenXe'];
                            $gia = $r['Gia'];
                            $gia = number_format($gia);
                            $diachi = $r['DiaChi'];
                            $sdt = $r['Sdt'];
                            $email = $r['Email'];
                            $daxuly = $r['DaXuLy'];
                            if($daxuly == 0)
                                $trangthai = '<td style="color: red;">Chưa xử lý</td><td>
                                <a href="order/edit.php?id='.$madon.'"><img src="../IMG/xuly.png" alt="" class="table-img"></a>
                                <a href="order/delete.php?id='.$madon.'"><img src="../IMG/delete.png" alt="" class="table-img"></a>
                                </td>';
                            else
                                $trangthai = '<td style="color: green;">Đã xử lý</td><td>
                                <a href="order/delete.php?id='.$madon.'"><img src="../IMG/delete.png" alt="" class="table-img"></a>
                                </td>';
                            echo '<tr>
                                    <td>'.$stt.'</td>
                                    <td>'.$tenkh.'</td>
                                    <td>'.$ngaydk.'</td>
                                    <td>'.$tenxe.'</td>
                                    <td>'.$gia.'</td>
                                    <td>'.$diachi.'</td>
                                    <td>'.$sdt.'</td>'.$trangthai.'
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