<?php
    session_start();
    include ('../INCLUDE/connect.php');
    include ('../INCLUDE/admin.php');
    $user = $_SESSION['user'];
    if(!isset($user) || $user != 'admin')
        header('location: login.php');
    if(isset($_POST['thoat']))
    {
        unset($_SESSION['user']);
        header('location: login.php');
    }
    if(isset($_POST['ok']))
    {
        $timkiem = $_POST['timkiem'];
        $sql = 'select * from user where Username like "%'.$timkiem.'%"';
    }
    else
        $sql = 'select * from user';
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
                <img src="../IMG/user.png" alt="" class="body-left-group-icon">
                <span class="body-main-header-title">Danh sách các User</span>
            </div>
            <div class="body-main-content">
                <div class="body-main-content-header">
                    <form action="" method="post">
                        <input type="text" name="timkiem" id="timkiem" placeholder="Nhập Username" value="<?php if(isset($timkiem)) echo $timkiem; ?>">
                        <input type="submit" name="ok" id="ok" value="Tìm kiếm" onclick="" />
                    </form>
                    <a href="user/add.php" class="add">
                        <img src="../IMG/add.png" alt="" class="add-img">
                        <span class="add-content">Thêm mới</span>
                    </a>
                </div>
                <table class="body-main-content-table">
                    <tr>
                        <th>STT</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Tác vụ</th>
                    </tr>
                    <?php
                        $stt = 1;
                        $pass = '';
                        $rs = mysqli_query($con, $sql);
                        while ($r = mysqli_fetch_assoc($rs)){
                            $username = $r['Username'];
                            $password = $r['Password'];
                            for($i = 0; $i < strlen($password); $i++)
                                $pass .= '*';
                            if($username == 'admin'){
                                echo '<tr>
                                        <td>'.$stt.'</td>
                                        <td>'.$username.'</td>
                                        <td>'.$pass.'</td>
                                        <td></td>
                                    </tr>';
                            }
                            else
                            {
                                echo '<tr>
                                        <td>'.$stt.'</td>
                                        <td>'.$username.'</td>
                                        <td>'.$pass.'</td>
                                        <td>
                                            <a href="user/delete.php?id='.$username.'"><img src="../IMG/delete.png" alt="" class="table-img"></a>
                                        </td>
                                    </tr>';
                            }
                            $stt++;
                            $pass = '';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>