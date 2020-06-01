<?php
    session_start();
    include '../INCLUDE/connect.php';
    if (isset($_POST['dangnhap']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if( $user == "" || $pass == "")
        {
            $tbao = '<script>alert(\'Bạn vui đăng nhập để tiếp tục.\');</script>';
        }
        else
        {
            $sql = 'select * from user where Username = "'.$user.'" and Password = "'.$pass.'"';
            $rs = mysqli_query($con, $sql);
            if(mysqli_num_rows($rs)>0)
            {
                $_SESSION['user'] = $user;
                header('location: index.php');
            }
            else
                $tbao = '<script>alert(\'Tên đăng nhập hoặc mật khẩu không đúng.\');</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Đăng nhập hệ thống</title>
</head>
<body>
    <div class="modal">
        <div class="modal-overlay"></div>
        <div class="modal-body">
            <form name="frmDangnhap" method="post" action="">
                <div class="modal-body-title">
                    <span class="modal-body-title-name">Đăng nhập hệ thống</span>
                </div>
                <div class="modal-body-main">
                    <img src="../IMG/lock.png" alt="" class="moda-body-img">
                    <div class="modal-body-content">
                        <div class="modal-body-group">
                            <img src="../IMG/user.png" alt="" class="modal-body-ico">
                            <input class="modal-body-input" placeholder="Username" type="text" name="user" id="user" />
                        </div>
                        <div class="modal-body-group">
                            <img src="../IMG/pass.png" alt="" class="modal-body-ico">
                            <input class="modal-body-input" placeholder="Password" type="password" name="pass" id="pass"></input>
                        </div>
                    </div>
                </div>
                <div class="modal-body-btn">
                    <input type="submit" name="dangnhap" id="dangnhap" value="Đăng nhập" onclick="" />
                </div>
            </form>
        </div>
    </div>
    <?php
        if(isset($tbao)) echo $tbao;
    ?>
</body>
</html>