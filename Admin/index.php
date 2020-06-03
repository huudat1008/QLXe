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
    $sql = 'select count(MaXe) as tongxe from xe';
    $rs = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($rs);
    $tongxe = $r['tongxe'];
    $sql = 'select count(Username) as tonguser from user';
    $rs = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($rs);
    $tonguser = $r['tonguser'];
    $sql = 'select count(MaKH) as tongkh from khachhang';
    $rs = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($rs);
    $tongkh = $r['tongkh'];
    $sql = 'select count(MaDon) as tongdon from dondangki';
    $rs = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($rs);
    $tongdon = $r['tongdon'];
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
            <img src="../IMG/home.png" alt="" class="body-left-group-icon">
            <span class="body-main-header-title">Thông tin chung</span>
        </div>
        <div class="report">
            <div class="report-body" style = "border-left: 0.5rem solid #4E73DF">
                <div class="report-body-top">
                    <span><?=$tongdon?></span>
                    <img src="../IMG/donhang.png" alt="">
                </div>
                <div class="report-body-bottom">
                    <span>Đơn hàng</span>
                </div>
            </div>
            <div class="report-body" style = "border-left: 0.5rem solid #1CC88A">
                <div class="report-body-top">
                    <span><?=$tongkh?></span>
                    <img src="../IMG/khachhang.png" alt="">
                </div>
                <div class="report-body-bottom">
                    <span>Khách hàng</span>
                </div>
            </div>
            <div class="report-body" style = "border-left: 0.5rem solid #36B9CC">
                <div class="report-body-top">
                    <span><?=$tongxe?></span>
                    <img src="../IMG/moto.png" alt="">
                </div>
                <div class="report-body-bottom">
                    <span>Sản phẩm</span>
                </div>
            </div>
            <div class="report-body" style = "border-left: 0.5rem solid #F6C23E">
                <div class="report-body-top">
                    <span><?=$tonguser?></span>
                    <img src="../IMG/user.png" alt="">
                </div>
                <div class="report-body-bottom">
                    <span>User đăng nhập</span>
                </div>
            </div>
        </div>
        <div class="body-main-content">
            <div class="body-main-content-header">
                <span class="body-main-content-header-title">Danh sách đơn hàng chưa xử lý trong tháng</span>
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
                    <th>Tác vụ</th>
                </tr>
                <?php
                    $stt = 1;
                    $sql = 'SELECT dondangki.*,xe.TenXe,xe.Gia FROM dondangki, xe WHERE dondangki.MaXe = xe.MaXe and DaXuLy = 0 and MONTH(NgayDK) = '.getdate()['mon'];
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
                            $trangthai = '<td>
                            <a href="order/edit.php?id='.$madon.'"><img src="../IMG/xuly.png" alt="" class="table-img"></a>
                            <a href="order/delete.php?id='.$madon.'"><img src="../IMG/delete.png" alt="" class="table-img"></a>
                            </td>';
                        echo '<tr>
                                <td>'.$stt.'</td>
                                <td>'.$tenkh.'</td>
                                <td>'.$ngaydk.'</td>
                                <td>'.$tenxe.'</td>
                                <td>'.$gia.'</td>
                                <td>'.$diachi.'</td>
                                <td>'.$sdt.'</td>
                                <td><a href="order/edit.php?id='.$madon.'"><img src="../IMG/xuly.png" alt="" class="table-img"></a>
                                <a href="order/delete.php?id='.$madon.'"><img src="../IMG/delete.png" alt="" class="table-img"></a></td>
                            </tr>';
                        $stt++;
                    }
                    ?>
            </table>
        </div>
    </div>
</body>
</html>