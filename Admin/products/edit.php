<?php
    session_start();
    include ('../../INCLUDE/adminedit.php');
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']))
        header('location: ../login.php');
    $user = $_SESSION['user'];
    if(isset($_POST['huybo']))
        header('location: ../products.php');
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = 'select chitietxe.*,TenXe,Gia,Hinh,MaLoai,HienThi FROM chitietxe,xe where chitietxe.MaXe="'.$id.'" and chitietxe.MaXe = xe.MaXe';
        $rs = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($rs))
        {
            $maxe = $row['MaXe'];
            $tenxe = $row['TenXe'];
            $maloai = $row['MaLoai'];
            $gia = $row['Gia'];
            $gia = number_format($gia);
            $hienthi = $row['HienThi'];
            $loai = $row['Loai'];
            $dungtich = $row['DungTich'];
            $congxuat = $row['CongXuat'];
            $momen = $row['Momen'];
            $khoidong = $row['KhoiDong'];
            $tieuthu = $row['TieuThu'];
            $truyenluc = $row['TruyenLuc'];
            $phanhtruoc = $row['PhanhTruoc'];
            $phanhsau = $row['PhanhSau'];
            $loptruoc = $row['LopTruoc'];
            $lopsau = $row['LopSau'];
            $dentruoc = $row['DenTruoc'];
            $densau = $row['DenSau'];
            $kichthuoc = $row['KichThuoc'];
            $docao = $row['DoCao'];
            $khoangcach = $row['KhoangCach'];
            $docaogam = $row['DoCaoGam'];
            $trongluong = $row['TrongLuong'];
            $baohanh = $row['BaoHanh'];
            $hinh = $row['Hinh'];
            $hinh1 = $row['Hinh1'];
            $hinh2 = $row['Hinh2'];
            $hinh3 = $row['Hinh3'];
            $hinh4 = $row['Hinh4'];
            $hinh5 = $row['Hinh5'];
            $hinh6 = $row['Hinh6'];
            $hinh7 = $row['Hinh7'];
        }
    }
    else
        header('location: ../products.php');
    function uploadhinh($tenfile_tmp, $tenfile_full) {
        $ktra = 1;
        if (file_exists($tenfile_full)) {
            $ktra = 0;
        }
        if ($_FILES['hinh']['size'] > 5*1024*1024) {
            $tbao = '<script>alert(\'Kích thước file phải <5MB.\');</script>';
            $ktra = 0;
        }
        $kieu_file = strtolower(pathinfo($tenfile_full,PATHINFO_EXTENSION));
        $mang_kieu_file = array('jpg','jpeg','png','gif');
        if(!in_array($kieu_file, $mang_kieu_file)) {
            $tbao = '<script>alert(\'Chỉ nhận các kiểu file JPG, JPEG, PNG & GIF.\');</script>';
            $ktra = 0;
        }
        if ($ktra==1) {
            move_uploaded_file($tenfile_tmp, $tenfile_full);
        }
    }
    if(isset($_POST['sua']))
    {
        $tenxe = $_POST['tenxe'];
        $loaixe = $_POST['loaixe'];
        $gia = $_POST['gia'];
        $gia = str_replace(",","",$gia);
        if(isset($_POST['hienthi']))
            $hienthi = $_POST['hienthi'];
        else
            $hienthi = 0;
        $loai = $_POST['loai'];
        $dungtich = $_POST['dungtich'];
        $congxuat = $_POST['congxuat'];
        $momen = $_POST['momen'];
        $khoidong = $_POST['khoidong'];
        $tieuthu = $_POST['tieuthu'];
        $truyenluc = $_POST['truyenluc'];
        $phanhtruoc = $_POST['phanhtruoc'];
        $phanhsau = $_POST['phanhsau'];
        $loptruoc = $_POST['loptruoc'];
        $lopsau = $_POST['lopsau'];
        $dentruoc = $_POST['dentruoc'];
        $densau = $_POST['densau'];
        $kichthuoc = $_POST['kichthuoc'];
        $docao = $_POST['docao'];
        $khoangcach = $_POST['khoangcach'];
        $docaogam = $_POST['docaogam'];
        $trongluong = $_POST['trongluong'];
        $baohanh = $_POST['baohanh'];
        $sql1 = 'update xe set TenXe = "'.$tenxe.'", MaLoai = "'.$loaixe.'", Gia = "'.$gia.'", HienThi = '.$hienthi.' where MaXe = "'.$id.'" ';
        mysqli_query($con,$sql1);
        $sql2 = 'update chitietxe set Loai = "'.$loai.'", DungTich = "'.$dungtich.'", CongXuat = "'.$congxuat.'", Momen = "'.$momen.'", KhoiDong = "'.$khoidong.'",
        TieuThu = "'.$tieuthu.'", TruyenLuc = "'.$truyenluc.'", PhanhTruoc = "'.$phanhtruoc.'", PhanhSau = "'.$phanhsau.'", LopTruoc = "'.$loptruoc.'", LopSau = "'.$lopsau.'",
        DenTruoc = "'.$dentruoc.'", DenSau = "'.$densau.'", KichThuoc = "'.$kichthuoc.'", DoCao = "'.$docao.'", KhoangCach = "'.$khoangcach.'", DoCaoGam = "'.$docaogam.'", 
        TrongLuong = "'.$trongluong.'", BaoHanh = "'.$baohanh.'" where MaXe = "'.$maxe.'" ';
        mysqli_query($con,$sql2);
        if(isset($_FILES['hinh']['name']))
        {
            echo '1';
        }
        else
            echo '2';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="shortcut icon" href="../../IMG/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/add.css">
    <link rel="stylesheet" href="../../CSS/adindex.css">
    <title>Thiết kế Website</title>
</head>
<body>
    <?php
        echo $adheader;
        if($user == 'admin')
        {
            echo '<a href="../user.php" class="admin-header-center-link">User</a>';
        }
        echo $adheader1.$user.$adheader2;
        echo $adbody;
        if($user == 'admin')
        {
        echo '<a href="../user.php" class="body-left-group">
                <img src="../../IMG/user.png" alt="" class="body-left-group-icon">
                <span class="body-left-group-title">Quản lý User</span>
            </a>';
        }
        echo $adbody1;
    ?>
        <div class="body-right">
            <form name="frm" method="post" action="">
                <div class="modal-body-title">
                    <span class="modal-body-title-name">thông tin sản phẩm</span>
                </div>
                <div class="modal-body-main">
                    <div class="modal-body-group">
                        <span class="modal-body-label">Mã xe:</span>
                        <input class="modal-body-input" type="text" name="maxe" id="maxe" value="<?php if(isset($maxe)) echo $maxe; ?>" style = "width: 350px" disabled></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Tên xe:</span>
                        <input class="modal-body-input" type="text" name="tenxe" id="tenxe" value="<?php if(isset($tenxe)) echo $tenxe; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Loại xe:</span>
                        <select id="loaixe" name="loaixe" style = "width: 350px; font-size: 2rem; padding-left: 10px">
                            <option value="XS" <?php if($maloai == 'XS') echo 'selected = "selected"' ?>>Xe số</option>
                            <option value="XG" <?php if($maloai == 'XG') echo 'selected = "selected"' ?>>Xe ga</option>
                            <option value="TT" <?php if($maloai == 'TT') echo 'selected = "selected"' ?>>Xe thể thao</option>
                        </select>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Giá:</span>
                        <input class="modal-body-input" type="text" name="gia" id="gia" value="<?php if(isset($gia)) echo $gia; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hiển thị:</span>
                        <div class="checkbox" style ="width: 350px">
                            <input class="" type="checkbox" name="hienthi" id="hienthi" value="1" <?php if($hienthi==1) echo 'checked = "checked"'; ?>></input>
                            <label for="hienthi" style = "font-size: 1.8rem; margin-left:5px">Hiển thị</label>
                        </div>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Loại:</span>
                        <input class="modal-body-input" type="text" name="loai" id="loai" value="<?php if(isset($loai)) echo $loai; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Dung tích xy lanh:</span>
                        <input class="modal-body-input" type="text" name="dungtich" id="dungtich" value="<?php if(isset($dungtich)) echo $dungtich; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Công suất tối đa:</span>
                        <input class="modal-body-input" type="text" name="congxuat" id="congxuat" value="<?php if(isset($congxuat)) echo $congxuat; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Momen cực đại:</span>
                        <input class="modal-body-input" type="text" name="momen" id="momen" value="<?php if(isset($momen)) echo $momen; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hệ thống khởi động:</span>
                        <input class="modal-body-input" type="text" name="khoidong" id="khoidong" value="<?php if(isset($khoidong)) echo $khoidong; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Mức tiêu thụ nhiên liệu:</span>
                        <input class="modal-body-input" type="text" name="tieuthu" id="tieuthu" value="<?php if(isset($tieuthu)) echo $tieuthu; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Kiểu hệ thống truyền lực:</span>
                        <input class="modal-body-input" type="text" name="truyenluc" id="truyenluc" value="<?php if(isset($truyenluc)) echo $truyenluc; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Phanh trước:</span>
                        <input class="modal-body-input" type="text" name="phanhtruoc" id="phanhtruoc" value="<?php if(isset($phanhtruoc)) echo $phanhtruoc; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Phanh sau:</span>
                        <input class="modal-body-input" type="text" name="phanhsau" id="phanhsau" value="<?php if(isset($phanhsau)) echo $phanhsau; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Lốp trước:</span>
                        <input class="modal-body-input" type="text" name="loptruoc" id="loptruoc" value="<?php if(isset($loptruoc)) echo $loptruoc; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Lốp sau:</span>
                        <input class="modal-body-input" type="text" name="lopsau" id="lopsau" value="<?php if(isset($lopsau)) echo $lopsau; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Đèn trước:</span>
                        <input class="modal-body-input" type="text" name="dentruoc" id="dentruoc" value="<?php if(isset($dentruoc)) echo $dentruoc; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Đèn sau:</span>
                        <input class="modal-body-input" type="text" name="densau" id="densau" value="<?php if(isset($densau)) echo $densau; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Kích thước (dài x rộng x cao):</span>
                        <input class="modal-body-input" type="text" name="kichthuoc" id="kichthuoc" value="<?php if(isset($kichthuoc)) echo $kichthuoc; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Độ cao yên xe:</span>
                        <input class="modal-body-input" type="text" name="docao" id="docao" value="<?php if(isset($docao)) echo $docao; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Khoảng cách giữa 2 trục bánh xe:</span>
                        <input class="modal-body-input" type="text" name="khoangcach" id="khoangcach" value="<?php if(isset($khoangcach)) echo $khoangcach; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Độ cao gầm xe:</span>
                        <input class="modal-body-input" type="text" name="docaogam" id="docaogam" value="<?php if(isset($docaogam)) echo $docaogam; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Trọng lượng ướt:</span>
                        <input class="modal-body-input" type="text" name="trongluong" id="trongluong" value="<?php if(isset($trongluong)) echo $trongluong; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Thời gian bảo hành:</span>
                        <input class="modal-body-input" type="text" name="baohanh" id="baohanh" value="<?php if(isset($baohanh)) echo $baohanh; ?>" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh hiển thị:</span>
                        <img src="../../IMG/Product/<?php if(isset($hinh)) echo $hinh; ?>" alt="" style = "width: 250px">
                        <input class="modal-body-input" type="file" name="hinh" id="hinh" style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh chi tiết:</span>
                        <img src="../../IMG/Product/<?php if(isset($hinh1)) echo $hinh1; ?>" alt="" style = "width: 250px">
                        <input class="modal-body-input" type="file" name="hinh1" id="hinh1" style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh chi tiết:</span>
                        <img src="../../IMG/Product/<?php if(isset($hinh2)) echo $hinh2; ?>" alt="" style = "width: 250px">
                        <input class="modal-body-input" type="file" name="hinh2" id="hinh2" style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh chi tiết:</span>
                        <img src="../../IMG/Product/<?php if(isset($hinh3)) echo $hinh3; ?>" alt="" style = "width: 250px">
                        <input class="modal-body-input" type="file" name="hinh3" id="hinh3" style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh chi tiết:</span>
                        <img src="../../IMG/Product/<?php if(isset($hinh4)) echo $hinh4; ?>" alt="" style = "width: 250px">
                        <input class="modal-body-input" type="file" name="hinh4" id="hinh4" style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh chi tiết:</span>
                        <img src="../../IMG/Product/<?php if(isset($hinh5)) echo $hinh5; ?>" alt="" style = "width: 250px">
                        <input class="modal-body-input" type="file" name="hinh5" id="hinh5" style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh chi tiết:</span>
                        <img src="../../IMG/Product/<?php if(isset($hinh6)) echo $hinh6; ?>" alt="" style = "width: 250px">
                        <input class="modal-body-input" type="file" name="hinh6" id="hinh6" style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh chi tiết:</span>
                        <img src="../../IMG/Product/<?php if(isset($hinh7)) echo $hinh7; ?>" alt="" style = "width: 250px">
                        <input class="modal-body-input" type="file" name="hinh7" id="hinh7" style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-btn">
                        <input type="submit" name="sua" id="sua" value="Lưu" onclick="" />
                        <input type="submit" name="huybo" id="huybo" value="Hủy bỏ" onclick="" />
                    </div>
                </div>
            </form>
        </div>
    <?php
        if(isset($tbao)) echo $tbao;
    ?>
</body>
</html>