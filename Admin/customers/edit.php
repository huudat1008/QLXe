<?php
    session_start();
    include ('../../INCLUDE/adminedit.php');
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']))
        header('location: ../login.php');
    $user = $_SESSION['user'];
    if(isset($_POST['huybo']))
        header('location: ../customers.php');
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = 'select * from khachhang where MaKH = "'.$id.'"';
        $rs = mysqli_query($con, $sql);
        while ($r = mysqli_fetch_assoc($rs)){
            $tenkh = $r['TenKH'];
            $diachi = $r['DiaChi'];
            $sdt = $r['Sdt'];
            $email = $r['Email'];
        }
    }
    else
        header('location: ../customers.php');
    if(isset($_POST['sua']))
    {
        $tenkh1 = $_POST['tenkh'];
        $diachi1 = $_POST['diachi'];
        $sdt1 = $_POST['sdt'];
        $email1 = $_POST['email'];
        if($tenkh1 != '' && $diachi1 != '' && $sdt1 != '' && $email1 != '')
        {
            $sql1 = 'update khachhang set TenKH = "'.$tenkh1.'", DiaChi = "'.$diachi1.'", Sdt = "'.$sdt1.'", Email = "'.$email1.'" where MaKH = "'.$id.'"';
            if(mysqli_query($con, $sql1))
            {
                header('location:../customers.php');
            }
        }
        else
            $tbao = '<script>alert(\'Bạn vui lòng nhập đầy đủ thông tin.\');</script>';
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
            echo '<a href="user.php" class="admin-header-center-link">User</a>';
        }
        echo $adheader1.$user.$adheader2;
        echo $adbody;
        if($user == 'admin')
        {
        echo '<a href="user.php" class="body-left-group">
                <img src="../../IMG/user.png" alt="" class="body-left-group-icon">
                <span class="body-left-group-title">Quản lý User</span>
            </a>';
        }
        echo $adbody1;
    ?>
    <div class="modal">
        <div class="modal-overlay"></div>
        <div class="modal-body">
            <form name="frm" method="post" action="">
                <div class="modal-body-title">
                    <span class="modal-body-title-name">thông tin khách hàng</span>
                </div>
                <div class="modal-body-main">
                    <div class="modal-body-group">
                        <span class="modal-body-label">Họ và tên:</span>
                        <input class="modal-body-input" type="text" name="tenkh" id="tenkh" value="<?php if(isset($tenkh)) echo $tenkh; ?>"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Địa chỉ:</span>
                        <input class="modal-body-input" type="text" name="diachi" id="diachi" value="<?php if(isset($diachi)) echo $diachi; ?>"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Số điện thoại:</span>
                        <input class="modal-body-input" type="text" name="sdt" id="sdt" value="<?php if(isset($sdt)) echo $sdt; ?>"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Email:</span>
                        <input class="modal-body-input" type="text" name="email" id="email" value="<?php if(isset($email)) echo $email; ?>"></input>
                    </div>
                    <div class="modal-body-btn">
                        <input type="submit" name="sua" id="sua" value="Xác nhận" onclick="" />
                        <input type="submit" name="huybo" id="huybo" value="Hủy bỏ" onclick="" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
        if(isset($tbao)) echo $tbao;
    ?>
</body>
</html>