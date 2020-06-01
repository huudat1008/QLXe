<?php
    session_start();
    include ('../../INCLUDE/adminedit.php');
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']))
    {
        header('location: ../login.php');
    }
    $user = $_SESSION['user'];
    if(isset($_POST['them']))
    {
        $thumuc_hinh = '../../IMG/';
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
        if ($kq_upload_hinh==1){
            $sql = 'insert into giaodien(IMG) values("'.$tenfile.'")';
            mysqli_query($con,$sql);
            header('location:../display.php');
        }
        else {
            $tbao = '<script>alert(\'Upload hình không thành công.\nVui lòng kiểm tra và thử lại.\');</script>';
        }
    }
    if(isset($_POST['huybo']))
        header('location:../display.php');
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
            <form name="frm" method="post" action="" enctype="multipart/form-data">
                <div class="modal-body-title">
                    <span class="modal-body-title-name">Thêm ảnh mới</span>
                </div>
                <div class="modal-body-main">
                    <div class="modal-body-group">
                        <span class="modal-body-label">Chọn file hình:</span>
                        <input class="modal-body-input" type="file" name="hinh" id="hinh" style = "width: auto; font-size: 1.6rem">
                    </div>
                    <span style="color: red;font-size: 1.3rem;text-align: center;margin-top: 5px;">Lưu ý: Hình phải được thiết kế ở độ phân giải 1920x770 và không quá 5MB</span>
                    <div class="modal-body-btn">
                        <input type="submit" name="them" id="them" value="Thêm mới" onclick="" />
                        <input type="submit" name="huybo" id="huybo" value="Hủy bỏ" onclick="" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if(isset($tbao)) echo $tbao; ?>
</body>
</html>