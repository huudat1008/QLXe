<?php
include 'connect.php';
$header = '<header class="header">
    <div class="header-row">
        <div class="header-logo">
            <a href="index"><img src="IMG/logo.png" alt="" class="header-logo-img"></a>
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
                    <a href="products" class="header-item-link">SẢN PHẨM</a>
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
                                                    <a href="products-detail?id='.$maxe.'" class="product-link">
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
                                                    <a href="products-detail?id='.$maxe.'" class="product-link">
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
                                                    <a href="products-detail?id='.$maxe.'" class="product-link">
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
        <div class="header-menu">
            <label for="check">
                <img src="IMG/menu.png" alt="" class="header-menu-img">
            </label>
            <input type="checkbox" hidden name="" id="check" class="header-menu-input">
            <label for="check" class="overlay"></label>
            <div class="mobile">
                <ul class="mobile-top">
                    <li class="mobile-top-link">
                        <a href="products" >SẢN PHẨM</a>
                    </li>
                    <li class="mobile-top-link"><a href="" >công nghệ</a></li>
                    <li class="mobile-top-link"><a href="" >dịch vụ</a></li>
                    <li class="mobile-top-link"><a href="" >phụ tùng</a></li>
                    <li class="mobile-top-link"><a href="" >khuyến mãi</a></li>
                    <li class="mobile-top-link"><a href="" >Đại lý</a></li>
                    <li class="mobile-bottom-link"><a href="" >về yamaha</a></li>
                    <li class="mobile-bottom-link"><a href="" >tin tức</a></li>
                    <li class="mobile-bottom-link"><a href="" >tuyển dụng</a></li>
                    <li class="mobile-bottom-link"><a href="" >catalogue điện tử</a></li>
                    <li class="mobile-bottom-link"><a href="" >liên hệ</a></li>
                    <li class="mobile-bottom-link"><a href="" >tìm kiếm</a></li>
                    <li class="mobile-bottom-link"><a href="" >hỏi đáp</a></li>
                    <li class="mobile-bottom-link"><a href="" >chính sách bảo mật</a></li>
                    <li class="mobile-bottom-link"><a href="" >hotline: 18001588</a></li>
                </ul>
                <div class="mobile-bottom">
                    <span class="mobile-copyright">© 2019 BẢN QUYỀN THUỘC VỀ YAMAHA MOTOR VIỆT NAM</span>
                    <span class="mobile-copyright">Sinh viên thực hiện: Nguyễn Hữu Đạt</span>
                </div>
            </div>
        </div>
    </div>
</header>';
?>