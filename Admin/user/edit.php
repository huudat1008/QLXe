<?php
    session_start();
    include ('../../INCLUDE/adminedit.php');
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']))
        header('location: ../login.php');
    $user = $_SESSION['user'];
    if(isset($_POST['huybo']))
        header('location: ../index.php');
    if(isset($_POST['sua']))
    {
        $username = $_SESSION['user'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $conpass = $_POST['conpass'];
        if($password != '' && $newpassword != '' && $conpass != '')
        {
            $sql = 'select * from user where Username = "'.$username.'" and Password = "'.$password.'"';
            $rs = mysqli_query($con, $sql);
            if(mysqli_num_rows($rs)>0)
            {
                if($newpassword == $conpass)
                {
                    $sql1 = 'update user set Username = "'.$username.'", Password = "'.$newpassword.'" where Username = "'.$username.'"';
                    if(mysqli_query($con, $sql1))
                    {
                        header('location:../index.php');
                    }
                }
                else
                    $tbao = '<script>alert(\'Xác nhận mật khẩu không đúng.\');</script>';
            }
            else
                $tbao = '<script>alert(\'Mật khẩu không đúng.\');</script>';
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
            <form name="frmDangnhap" method="post" action="">
                <div class="modal-body-title">
                    <span class="modal-body-title-name">Đổi mật khẩu</span>
                </div>
                <div class="modal-body-main">
                    <div class="modal-body-group">
                        <span class="modal-body-label">Mật khẩu cũ:</span>
                        <input class="modal-body-input" type="password" name="password" id="password"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Mật khẩu mới:</span>
                        <input class="modal-body-input" type="password" name="newpassword" id="newpassword"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Nhập lại mật khẩu:</span>
                        <input class="modal-body-input" type="password" name="conpass" id="conpass"></input>
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