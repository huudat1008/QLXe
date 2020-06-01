<?php
    session_start();
    include ('../../INCLUDE/adminedit.php');
    include ('../../INCLUDE/connect.php');
    if(!isset($_SESSION['user']) || $_SESSION['user'] != 'admin')
        header('location: ../login.php');
    $user = $_SESSION['user'];
    if(isset($_POST['them']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conpass = $_POST['conpass'];
        if($username != '' && $password != '' && $conpass != '')
        {
            $trung = 0;
            $sql = 'select * from user';
            $rs = mysqli_query($con, $sql);
            while ($r = mysqli_fetch_assoc($rs)){
                $username1 = $r['Username'];
                if($username1 == $username)
                    $trung++;
            }
            if($trung == 0)
            {
                if($password == $conpass)
                {
                    $sql1 = 'insert into user(Username,Password) values ("'.$username.'","'.$password.'")';
                    if(mysqli_query($con, $sql1))
                    {
                        header('location:../user.php');
                    }
                }
                else
                    $tbao = '<script>alert(\'Xác nhận mật khẩu chưa đúng.\');</script>';
            }
            else
            {
                $tbao = '<script>alert(\'Tên đăng nhập đã có người sử dụng.\');</script>';
            }
        }
        else
            $tbao = '<script>alert(\'Bạn vui lòng nhập đầy đủ thông tin.\');</script>';
    }
    if(isset($_POST['huybo']))
        header('location:../user.php');
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
                    <span class="modal-body-title-name">Thêm User mới</span>
                </div>
                <div class="modal-body-main">
                    <div class="modal-body-group">
                        <span class="modal-body-label">Tên đăng nhập:</span>
                        <input class="modal-body-input" type="text" name="username" id="username" />
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Mật khẩu:</span>
                        <input class="modal-body-input" type="password" name="password" id="password"></input>
                    </div>
                    <div class="modal-body-group">
                        <span class="modal-body-label">Nhập lại mật khẩu:</span>
                        <input class="modal-body-input" type="password" name="conpass" id="conpass"></input>
                    </div>
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