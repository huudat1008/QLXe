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
    if(isset($_POST['ok']))
    {
        $timkiem = $_POST['timkiem'];
        $sql = 'SELECT xe.*,loaixe.TenLoai FROM xe, loaixe WHERE xe.MaLoai = loaixe.MaLoai and TenXe like "%'.$timkiem.'%"';
    }
    else
        $sql = 'SELECT xe.*,loaixe.TenLoai FROM xe, loaixe WHERE xe.MaLoai = loaixe.MaLoai';
    if(isset($_POST['loc']))
    {
        $loc = $_POST['chon'];
        if($loc == 'all')
        {
            $sql = 'SELECT xe.*,loaixe.TenLoai FROM xe, loaixe WHERE xe.MaLoai = loaixe.MaLoai';
        }
        else
        {
            $sql = 'SELECT xe.*,loaixe.TenLoai FROM xe, loaixe WHERE xe.MaLoai = loaixe.MaLoai and xe.MaLoai = "'.$loc.'"';
        }
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
                <span class="body-main-header-title">Danh sách sản phẩm</span>
            </div>
            <div class="body-main-content">
                <div class="body-main-content-header">
                    <form action="" method="post">
                        <input type="text" name="timkiem" id="timkiem" placeholder="Nhập tên sản phẩm" value="<?php if(isset($timkiem)) echo $timkiem; ?>">
                        <input type="submit" name="ok" id="ok" value="Tìm kiếm" onclick="" />
                        <select id="chon" name="chon" style = "font-size: 2rem,padding-left: 10px; margin-left: 30px">
                            <option value="all" <?php if(isset($loc)){if($loc == 'all') echo 'selected = "selected"';} ?>>Tất cả</option>
                            <option value="XS" <?php if(isset($loc)){if($loc == 'XS') echo 'selected = "selected"';} ?>>Xe số</option>
                            <option value="XG" <?php if(isset($loc)){if($loc == 'XG') echo 'selected = "selected"';} ?>>Xe ga</option>
                            <option value="TT" <?php if(isset($loc)){if($loc == 'TT') echo 'selected = "selected"';} ?>>Xe thể thao</option>
                        </select>
                        <input type="submit" name="loc" id="loc" value="Lọc sản phẩm" onclick="" />
                    </form>
                    <a href="products/add.php" class="add">
                        <img src="../IMG/add.png" alt="" class="add-img">
                        <span class="add-content">Thêm mới</span>
                    </a>
                </div>
                <table class="body-main-content-table">
                    <tr>
                        <th>STT</th>
                        <th>Tên xe</th>
                        <th>Loại xe</th>
                        <th>Giá</th>
                        <th>Hiển thị</th>
                        <th>Hình</th>
                        <th>Xem chi tiết</th>
                        <th>Tác vụ</th>
                    </tr>
                    <?php
                        $stt = 1;
                        $rs = mysqli_query($con, $sql);
                        while ($r = mysqli_fetch_assoc($rs)){
                            $maxe = $r['MaXe'];
                            $tenxe = $r['TenXe'];
                            $tenloai = $r['TenLoai'];
                            $gia = $r['Gia'];
                            $gia = number_format($gia);
                            $hienthi = $r['HienThi'];
                            if($hienthi==1)
                                $check = '<input type="checkbox" checked="checked">';
                            else
                                $check = '<input type="checkbox">';
                            $hinh = $r['Hinh'];
                            echo '<tr>
                                    <td>'.$stt.'</td>
                                    <td>'.$tenxe.'</td>
                                    <td>'.$tenloai.'</td>
                                    <td>'.$gia.'</td>
                                    <td>'.$check.'</td>
                                    <td> <img src="../IMG/Product/'.$hinh.'" style = "width: 100px;" ></td>
                                    <td><a href="products/edit.php?id='.$maxe.'" style = "color: #428BCA">Xem chi tiết</a></td>
                                    <td><a href="products/delete.php?id='.$maxe.'&img='.$hinh.'"><img src="../IMG/delete.png" alt="" class="table-img"></a></td>
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