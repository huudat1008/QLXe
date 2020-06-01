<?php
include 'connect.php';
$header = '<header class="header">
    <div class="header-row">
        <div class="header-logo">
            <a href="index.php"><img src="IMG/logo.png" alt="" class="header-logo-img"></a>
        </div>
        <div class="header-left">
            <ul class="header-top">
                <li class="header-top-items">
                    <a href="" class="top-links">VỀ YAMAHA</a>
                </li>
                <li class="header-top-items">
                    <a href="" class="top-links">TIN TỨC</a>
                </li>
                <li class="header-top-items">
                    <a href="" class="top-links">TUYỂN DỤNG</a>
                </li>
                <li class="header-top-items">
                    <div class="search">
                        <input type="text" class="input-search" placeholder="Tìm kiếm...">
                        <a href="" class="search-link">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="header-list">
                <li class="header-item">
                    <a href="products.php" class="header-item-link">SẢN PHẨM</a>
                    <div class="product">
                        <ul class="product-list">
                            <li class="product-item">
                                <div class="product-content">
                                    <h3 class="product-title">Xe số</h3>
                                    <div class="product-row">';
                                    $sql = 'select * from xe where MaLoai="XS"';
                                    $rs = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($rs)){
                                        $maxe = $row['MaXe'];
                                        $tenxe = $row['TenXe'];
                                        $hinh = $row['Hinh'];
                                        $hienthi = $row['HienThi'];
                                        if ( $hienthi == 1 )
                                        {
                                            $header = $header. '<div class="product-column">
                                                    <a href="products-detail.php?id='.$maxe.'" class="product-link">
                                                        <img src="IMG/Product/'.$hinh.'" alt="'.$tenxe.'" class="product-img">
                                                        <span class="product-name">'.$tenxe.'</span>
                                                    </a>
                                                </div>';
                                        }
                                    }
                                    $header = $header. '</div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product-content">
                                    <h3 class="product-title">Xe ga</h3>
                                    <div class="product-row">';
                                    $sql = 'select * from xe where MaLoai="XG"';
                                    $rs = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($rs)){
                                        $maxe = $row['MaXe'];
                                        $tenxe = $row['TenXe'];
                                        $hinh = $row['Hinh'];
                                        $hienthi = $row['HienThi'];
                                        if ( $hienthi == 1 )
                                        {
                                            $header = $header. '<div class="product-column">
                                                    <a href="products-detail.php?id='.$maxe.'" class="product-link">
                                                        <img src="IMG/Product/'.$hinh.'" alt="'.$tenxe.'" class="product-img">
                                                        <span class="product-name">'.$tenxe.'</span>
                                                    </a>
                                                </div>';
                                        }
                                    }
                                    $header = $header. '</div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product-content">
                                    <h3 class="product-title">Xe thể thao</h3>
                                    <div class="product-row">';
                                    $sql = 'select * from xe where MaLoai="TT"';
                                    $rs = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($rs)){
                                        $maxe = $row['MaXe'];
                                        $tenxe = $row['TenXe'];
                                        $hinh = $row['Hinh'];
                                        $hienthi = $row['HienThi'];
                                        if ( $hienthi == 1 )
                                        {
                                            $header = $header. '<div class="product-column">
                                                    <a href="products-detail.php?id='.$maxe.'" class="product-link">
                                                        <img src="IMG/Product/'.$hinh.'" alt="'.$tenxe.'" class="product-img">
                                                        <span class="product-name">'.$tenxe.'</span>
                                                    </a>
                                                </div>';
                                        }
                                    }
                                    $header = $header. '</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header-item">
                    <a href="" class="header-item-link">CÔNG NGHỆ</a>
                </li>
                <li class="header-item">
                    <a href="" class="header-item-link">Dịch vụ</a> 
                </li>
                <li class="header-item">
                    <a href="" class="header-item-link">Phụ tùng</a>
                </li>
                <li class="header-item">
                    <a href="" class="header-item-link">Khuyến mãi</a>
                </li>
                <li class="header-item">
                    <a href="" class="header-item-link">Đại lý</a>
                </li>
            </ul>
        </div>
    </div>
</header>';
?>