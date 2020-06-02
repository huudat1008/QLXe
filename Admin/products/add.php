<?php
    session_start();
    include ('../../INCLUDE/adminedit.php');
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']))
        header('location: ../login.php');
    $user = $_SESSION['user'];
    if(isset($_POST['huybo']))
        header('location: ../products.php');
    if(isset($_POST['them']))
    {
        $maxe = $_POST['maxe'];
        $tenxe = $_POST['tenxe'];
        $loaixe = $_POST['loaixe'];
        $gia = $_POST['gia'];
        $hienthi = $_POST['hienthi'];
        $thumuc_hinh = '../../IMG/Product/';
        $tenfile = basename($_FILES['hinh']['name']);
        $tenfile_tmp = $_FILES['hinh']['tmp_name'];
        $tenfile_full = $thumuc_hinh. $tenfile;
        $ktra = 1;
        if (file_exists($tenfile_full)) {
            $tbao = '<script>alert(\'Tên file hình này bị trùng.\');</script>';
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
            if (move_uploaded_file($tenfile_tmp, $tenfile_full)) {
                $kq_upload_hinh = 1;
            } else {
                $kq_upload_hinh = 0;
            }
        }
        if ($kq_upload_hinh==1 && $maxe != '' && $tenxe != '' && $loaixe != '' && $gia != '' && $hienthi != ''){
            $sql = 'insert into xe(MaXe,TenXe,MaLoai,Gia,HienThi,Hinh) values("'.$maxe.'","'.$tenxe.'","'.$loaixe.'","'.$gia.'","'.$hienthi.'","'.$tenfile.'")';
            if(!mysqli_query($con,$sql))
                $tbao = '<script>alert(\'Mã xe bị trùng.\');</script>';
        }
        else {
            $tbao = '<script>alert(\'Upload hình không thành công.\nVui lòng kiểm tra và thử lại.\');</script>';
        }
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
        $sql1 = 'insert into chitietxe(MaXe,Loai,DungTich,CongXuat,Momen,KhoiDong,TieuThu,TruyenLuc,PhanhTruoc,PhanhSau,LopTruoc,LopSau,DenTruoc,DenSau,KichThuoc,DoCao,KhoangCach,DoCaoGam,TrongLuong,BaoHanh)
        values("'.$maxe.'","'.$loai.'","'.$dungtich.'","'.$congxuat.'","'.$momen.'","'.$khoidong.'","'.$tieuthu.'","'.$truyenluc.'","'.$phanhtruoc.'","'.$phanhsau.'","'.$loptruoc.'","'.$lopsau.'","'.$dentruoc.'","'.$densau.'","'.$kichthuoc.'","'.$docao.'","'.$khoangcach.'","'.$docaogam.'","'.$trongluong.'","'.$baohanh.'")';
        mysqli_query($con,$sql1);
        foreach($_FILES['hinhs']['name'] as $key=>$value){
            $tenhinh_tmp   = $_FILES['hinhs']['tmp_name'][$key];
            $tenhinh = basename($_FILES['hinhs']['name'][$key]);
            $tenhinh_full = $thumuc_hinh.$tenhinh;
            $ktra1 = 1;
            if (file_exists($tenhinh_full)) {
                $tbao = '<script>alert(\'Tên file hình này bị trùng.\');</script>';
                $ktra1 = 0;
            }
            if ($_FILES['hinhs']['size'][$key] > 5*1024*1024) {
                $tbao = '<script>alert(\'Kích thước file phải <5MB.\');</script>';
                $ktra1 = 0;
            }
            $kieu_file1 = strtolower(pathinfo($tenhinh_full,PATHINFO_EXTENSION));
            if(!in_array($kieu_file1, $mang_kieu_file)) {
                $tbao = '<script>alert(\'Chỉ nhận các kiểu file JPG, JPEG, PNG & GIF.\');</script>';
                $ktra1 = 0;
            }
            if ($ktra1==1) {
                if (move_uploaded_file($tenhinh_tmp, $tenhinh_full)) {
                    $i = $key+1;
                    $sql2 = 'update chitietxe set hinh'.$i.'= "'.$tenhinh.'" where MaXe = "'.$maxe.'" ';
                    mysqli_query($con,$sql2);
                }
            }
        }
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
            <form name="frm" method="post" action="" enctype="multipart/form-data">
                <div class="modal-body-title">
                    <span class="modal-body-title-name">thêm mới sản phẩm</span>
                </div>
                <div class="modal-body-main">
                <div class="modal-body-group">
                        <span class="modal-body-label">Mã xe:</span>
                        <input class="modal-body-input" type="text" name="maxe" id="maxe" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Tên xe:</span>
                        <input class="modal-body-input" type="text" name="tenxe" id="tenxe" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Loại xe:</span>
                        <select id="loaixe" name="loaixe" style = "width: 350px; font-size: 2rem,padding-left: 10px">
                            <option value="XS">Xe số</option>
                            <option value="XG">Xe ga</option>
                            <option value="TT">Xe thể thao</option>
                        </select>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Giá:</span>
                        <input class="modal-body-input" type="text" name="gia" id="gia" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hiển thị:</span>
                        <div class="checkbox" style ="width: 350px">
                            <input class="" type="checkbox" name="hienthi" id="hienthi" value="1"></input>
                            <label for="hienthi" style = "font-size: 1.8rem; margin-left:5px">Hiển thị</label>
                        </div>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Loại:</span>
                        <input class="modal-body-input" type="text" name="loai" id="loai" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Dung tích xy lanh:</span>
                        <input class="modal-body-input" type="text" name="dungtich" id="dungtich" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Công suất tối đa:</span>
                        <input class="modal-body-input" type="text" name="congxuat" id="congxuat" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Momen cực đại:</span>
                        <input class="modal-body-input" type="text" name="momen" id="momen" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hệ thống khởi động:</span>
                        <input class="modal-body-input" type="text" name="khoidong" id="khoidong" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Mức tiêu thụ nhiên liệu:</span>
                        <input class="modal-body-input" type="text" name="tieuthu" id="tieuthu" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Kiểu hệ thống truyền lực:</span>
                        <input class="modal-body-input" type="text" name="truyenluc" id="truyenluc" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Phanh trước:</span>
                        <input class="modal-body-input" type="text" name="phanhtruoc" id="phanhtruoc" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Phanh sau:</span>
                        <input class="modal-body-input" type="text" name="phanhsau" id="phanhsau" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Lốp trước:</span>
                        <input class="modal-body-input" type="text" name="loptruoc" id="loptruoc" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Lốp sau:</span>
                        <input class="modal-body-input" type="text" name="lopsau" id="lopsau" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Đèn trước:</span>
                        <input class="modal-body-input" type="text" name="dentruoc" id="dentruoc" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Đèn sau:</span>
                        <input class="modal-body-input" type="text" name="densau" id="densau" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Kích thước (dài x rộng x cao):</span>
                        <input class="modal-body-input" type="text" name="kichthuoc" id="kichthuoc" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Độ cao yên xe:</span>
                        <input class="modal-body-input" type="text" name="docao" id="docao" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Khoảng cách giữa 2 trục bánh xe:</span>
                        <input class="modal-body-input" type="text" name="khoangcach" id="khoangcach" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Độ cao gầm xe:</span>
                        <input class="modal-body-input" type="text" name="docaogam" id="docaogam" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Trọng lượng ướt:</span>
                        <input class="modal-body-input" type="text" name="trongluong" id="trongluong" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Thời gian bảo hành:</span>
                        <input class="modal-body-input" type="text" name="baohanh" id="baohanh" style = "width: 350px"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh hiển thị:</span>
                        <input class="modal-body-input" type="file" name="hinh" id="hinh" accept = ".png,.jpg,.jpeg,.gif" style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Hình ảnh chi tiết:</span>
                        <input class="modal-body-input" type="file" name="hinhs[]" id="hinhs" accept = ".png,.jpg,.jpeg,.gif" multiple style = "width: 90px; font-size: 1.6rem">
                    </div>
                    <div class="modal-body-btn">
                        <input type="submit" name="them" id="them" value="Thêm" onclick="" />
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