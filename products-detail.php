<?php
    include 'INCLUDE/connect.php';
	include 'INCLUDE/header.php';
    include 'INCLUDE/footer.php';
    $id='';
    if (isset($_GET['id']))
        $id= $_GET['id'];
    else
        header('location: products.php');
    $sql = 'select chitietxe.*,TenXe,Gia,Hinh FROM chitietxe,xe where chitietxe.MaXe="'.$id.'" and chitietxe.MaXe = xe.MaXe';
    $rs = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($rs))
    {
        $tenxe = $row['TenXe'];
        $gia = $row['Gia'];
        $gia = number_format($gia);
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
    if (isset($_POST['dangki']))
    {
        $tenkh = $_POST['tenkh'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $daxuly = 0;
        $ngaydk = date('Y/m/d');
        $subject = '=?UTF-8?B?' . base64_encode('Xác nhận đăng kí mua xe '.$tenxe.'') . '?=';
        $body = '<html><body>';
        $body .= '<p>Kính chào quý khách <strong style="color: blue;">'.$tenkh.'</strong>, </p>
        <p> Quý khách đã đăng kí mua xe <strong style="color: blue;">'.$tenxe.'</strong> với giá <strong style="color: blue;">'.$gia.' Đ</strong>. Nhân viên tư vấn sẽ liên lạc với quý khách trong thời gian sớm nhất.</p> 
        <p>Trân trọng cảm ơn và rất hân hạnh được phục vụ quý khách.</p>';
        $body .= '</body></html>';
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Yamaha Motor Việt Nam <nguyenhuudat10081998@gmail.com>' . "\r\n";
        $headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
        if($tenkh != "" && $diachi != "" && $sdt != "" && $email != "")
        {
            $sql1 = 'select * from khachhang where Sdt = "'.$sdt.'"';
            $rs1 = mysqli_query($con, $sql1);
            if(mysqli_num_rows($rs1)>0)
            {
                $sql2 = 'insert into dondangki(TenKH,NgayDK,DiaChi,Sdt,Email,MaXe,DaXuLy) values("'.$tenkh.'","'.$ngaydk.'","'.$diachi.'","'.$sdt.'","'.$email.'","'.$id.'","'.$daxuly.'")';
                if (mysqli_query($con,$sql2) && mail ($email, $subject, $body, $headers))
                {
                    $tbao = '<script>alert(\'Đăng kí thành công.\nCảm ơn bạn đã sử dụng dịch vụ của chúng tôi.\nNhân viên tư vấn sẽ liên lạc hỗ trợ bạn trong thời gian sớm nhất.\');</script>';
                    
                }
                else
                {
                    $tbao = '<script>alert(\'Đăng kí không thành công.\nBạn vui lòng kiểm tra lại thông tin và thực hiện lại sau.\');</script>';
                }
            }
            else
            {
                $sql2 = 'insert into dondangki(TenKH,NgayDK,DiaChi,Sdt,Email,MaXe,DaXuLy) values("'.$tenkh.'","'.$ngaydk.'","'.$diachi.'","'.$sdt.'","'.$email.'","'.$id.'","'.$daxuly.'")';
                $sql3 = 'insert into khachhang(TenKH,DiaChi,Sdt,Email) values("'.$tenkh.'","'.$diachi.'","'.$sdt.'","'.$email.'")';
                if (mysqli_query($con,$sql2) && mysqli_query($con,$sql3) && mail($email, $subject, $body, $headers))
                {
                    $tbao = '<script>alert(\'Đăng kí thành công.\nCảm ơn bạn đã sử dụng dịch vụ của chúng tôi.\nNhân viên tư vấn sẽ liên lạc hỗ trợ bạn trong thời gian sớm nhất.\');</script>';
                }
                else
                {
                    $tbao = '<script>alert(\'Đăng kí không thành công.\nBạn vui lòng kiểm tra lại thông tin và thực hiện lại sau.\');</script>';
                }
            }
        }
        else
            $tbao = '<script>alert(\'Bạn vui lòng nhập đầy đủ thông tin để đăng kí.\');</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="Font/css/all.css">
    <link rel="shortcut icon" href="IMG/favicon.ico" type="image/x-icon">
    <script src="Javascript/display.js" defer></script>
    <script src="Javascript/slide-detail.js" defer></script>
    <link rel="stylesheet" href="CSS/products-detail.css">
    <title><?=$tenxe?></title>
</head>
<body>
    <?=$header?>
    <div class="main">
        <div class="main-bg">
            <div class="main-content">
                <div class="main-title">
                    <h1>chi tiết sản phẩm</h1>
                </div>
                <div class="main-product">
                    <div class="border-title">
                        <span class="border-title-name">hình ảnh</span>
                    </div>
                    <div class="main-product-img">
                        <div class="main-product-img-top">
                            <div class="main-product-img-top-left">
                                <h1><?=$tenxe?></h1>
                            </div>
                            <div class="main-product-img-top-right">
                                <p>Giá bán:</p>
                                <h3><?=$gia?> đ</h3>
                                <span class="main-product-img-btn" onclick="display()">Đăng kí mua ngay</span>
                            </div>
                        </div>
                        <div class="main-product-img-bottom slide-show">
                            <img src="IMG/Product/<?=$hinh?>" alt="<?=$tenxe?>" class="slide" >
                            <img src="IMG/Product/<?=$hinh1?>" alt="<?=$tenxe?>" class="slide" >
                            <img src="IMG/Product/<?=$hinh2?>" alt="<?=$tenxe?>" class="slide" >
                            <img src="IMG/Product/<?=$hinh3?>" alt="<?=$tenxe?>" class="slide" >
                            <img src="IMG/Product/<?=$hinh4?>" alt="<?=$tenxe?>" class="slide" >
                            <img src="IMG/Product/<?=$hinh5?>" alt="<?=$tenxe?>" class="slide" >
                            <img src="IMG/Product/<?=$hinh6?>" alt="<?=$tenxe?>" class="slide" >
                            <img src="IMG/Product/<?=$hinh7?>" alt="<?=$tenxe?>" class="slide" >
                        </div>
                    </div>
                    <div class="border-title">
                        <span class="border-title-name">thông số kỹ thuật</span>
                    </div>
                    <table class="main-product-content">
                        <tbody>
                            <tr>
                                <td>Loại</td>
                                <td><?=$loai?></td>
                            </tr>
                            <tr>
                                <td>Dung tích xy lanh (CC)</td>
                                <td><?=$dungtich?></td>
                            </tr>
                            <tr>
                                <td>Công suất tối đa</td>
                                <td><?=$congxuat?></td>
                            </tr>
                            <tr>
                                <td>Mô men cực đại</td>
                                <td><?=$momen?></td>
                            </tr>
                            <tr>
                                <td>Hệ thống khởi động</td>
                                <td><?=$khoidong?></td>
                            </tr>
                            <tr>
                                <td>Mức tiêu thụ nhiên liệu (l/100km)</td>
                                <td><?=$tieuthu?></td>
                            </tr>
                            <tr>
                                <td>Kiểu hệ thống truyền lực</td>
                                <td><?=$truyenluc?></td>
                            </tr>
                            <tr>
                                <td>Phanh trước</td>
                                <td><?=$phanhtruoc?></td>
                            </tr>
                            <tr>
                                <td>Phanh sau</td>
                                <td><?=$phanhsau?></td>
                            </tr>
                            <tr>
                                <td>Lốp trước</td>
                                <td><?=$loptruoc?></td>
                            </tr>
                            <tr>
                                <td>Lốp sau</td>
                                <td><?=$lopsau?></td>
                            </tr>
                            <tr>
                                <td>Đèn trước</td>
                                <td><?=$dentruoc?></td>
                            </tr>
                            <tr>
                                <td>Đèn sau</td>
                                <td><?=$densau?></td>
                            </tr>
                            <tr>
                                <td>Kích thước (dài x rộng x cao)</td>
                                <td><?=$kichthuoc?></td>
                            </tr>
                            <tr>
                                <td>Độ cao yên xe</td>
                                <td><?=$docao?></td>
                            </tr>
                            <tr>
                                <td>Khoảng cách giữa 2 trục bánh xe</td>
                                <td><?=$khoangcach?></td>
                            </tr>
                            <tr>
                                <td>Độ cao gầm xe</td>
                                <td><?=$docaogam?></td>
                            </tr>
                            <tr>
                                <td>Trọng lượng ướt</td>
                                <td><?=$trongluong?></td>
                            </tr>
                            <tr>
                                <td>Thời gian bảo hành</td>
                                <td><?=$baohanh?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?=$footer?>
    <div class="modal">
        <div class="modal-overlay"></div>
        <div class="modal-body">
            <form name="frmDangki" method="post" action="">
                <div class="modal-body-title">
                    <span class="modal-body-title-name">Đăng kí mua xe</span>
                </div>
                <div class="modal-body-content">
                    <div class="modal-body-group">
                        <span class="modal-body-label">Họ và tên:</span>
                        <input class="modal-body-input" type="text" name="tenkh" id="tenkh" />
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Địa chỉ:</span>
                        <textarea class="modal-body-input" type="text" name="diachi" id="diachi"></textarea>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Số điện thoại:</span>
                        <input class="modal-body-input" type="tel" name="sdt" id="sdt" />
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Địa chỉ Email:</span>
                        <input class="modal-body-input" type="text" name="email" id="email" />
                    </div>
                    <div class="modal-body-btn">
                        <input type="submit" name="dangki" id="dangki" value="Đăng kí" onclick="" />
                        <input type="button" name="huybo" id="huybo" value="Hủy bỏ" onclick="hide()" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if(isset($tbao)) echo $tbao; ?>
</body>
</html>