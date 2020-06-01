<?php
    $adheader = '<div class="admin-header">
    <div class="admin-header-row">
        <div class="admin-header-left">
            <img src="../../IMG/windows.png" alt="" class="admin-header-left-img">
            <a href="../index.php" class="admin-header-left-title">Administrator</a>
        </div>
        <div class="admin-header-center">
            <a href="../../index.php" class="admin-header-center-link">Về trang web</a>
            <a href="../order.php" class="admin-header-center-link">Đơn hàng</a>
            <a href="../display.php" class="admin-header-center-link">Giao diện</a>
            <a href="../products.php" class="admin-header-center-link">Sản phẩm</a>
            <a href="../customers.php" class="admin-header-center-link">Khách hàng</a>';
    $adheader1 = '</div>
        <div class="admin-header-right">
            <span class="admin-header-right-title">';
    $adheader2 = '</span>
            <img src="../../IMG/avata.png" alt="" class="admin-header-right-img">
            <img src="../../IMG/down.png" alt="" class="admin-header-right-icon">
            <div class="user">
                <div class="user-group">
                    <div class="user-link"><a href="../user/edit.php" class="user-edit">Đổi mật khẩu</a></div>
                    <div class="user-link">
                        <form name="frmThoat" method="post" action="">
                            <input type="submit" name="thoat" id="thoat" value="Đăng xuất" onclick="" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
    $adbody = '<div class="body">
    <div class="body-left">
    <a href="../order.php" class="body-left-group">
        <img src="../../IMG/donhang.png" alt="" class="body-left-group-icon">
        <span class="body-left-group-title">Quản lý đơn hàng</span>
    </a>
    <a href="../display.php" class="body-left-group">
        <img src="../../IMG/menu.png" alt="" class="body-left-group-icon">
        <span class="body-left-group-title">Quản lý giao diện</span>
    </a>
    <a href="../products.php" class="body-left-group">
        <img src="../../IMG/moto.png" alt="" class="body-left-group-icon">
        <span class="body-left-group-title">Quản lý sản phẩm</span>
    </a>
    <a href="../customers.php" class="body-left-group">
        <img src="../../IMG/khachhang.png" alt="" class="body-left-group-icon">
        <span class="body-left-group-title">Quản lý khách hàng</span>
    </a>';
    $adbody1 = '</div>';
?>