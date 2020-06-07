<?php
    include 'INCLUDE/connect.php';
	include 'INCLUDE/header.php';
	include 'INCLUDE/footer.php';
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
    <link rel="stylesheet" href="CSS/products.css">
    <title>Các sản phẩm mới</title>
</head>
<body>
    <?=$header?>
    <div class="main">
        <div class="main-bg">
            <div class="main-content">
                <div class="main-title">
                    <h1>SẢN PHẨM</h1>
                </div>
                <div class="main-product">
                    <div class="main-product-row">
                        <div class="main-product-col">
                            <div class="main-product-list moto">
                                <div class="main-product-title">XE SỐ</div>
                                <div class="main-product-content">
                                <?php
                                    $sql = 'select * from xe where MaLoai="XS"';
                                    $rs = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($rs)){
                                        $maxe = $row['MaXe'];
                                        $tenxe = $row['TenXe'];
                                        $gia = $row['Gia'];
                                        $gia = number_format($gia);
                                        $hinh = $row['Hinh'];
                                        $hienthi = $row['HienThi'];
                                        if($hienthi == 1)
                                        {
                                            echo '<div class="main-product-item">
                                                    <div class="main-product-item-bg"></div>
                                                    <h3 class="main-product-item-name">'.$tenxe.'</h3>
                                                    <a href="products-detail?id='.$maxe.'" class="main-product-item-link">
                                                        <img src="IMG/Product/'.$hinh.'" alt="'.$tenxe.'">
                                                    </a>
                                                    <div class="main-product-item-bottom">
                                                        <div class="main-product-item-price">'.$gia.' VNĐ</div>
                                                        <a href="products-detail?id='.$maxe.'" class="main-product-item-btn">Xem chi tiết</a>
                                                    </div>
                                                </div>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="main-product-col">
                            <div class="main-product-list scooter">
                                <div class="main-product-title">XE GA</div>
                                <div class="main-product-content">
                                <?php
                                    $sql = 'select * from xe where MaLoai="XG"';
                                    $rs = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($rs)){
                                        $maxe = $row['MaXe'];
                                        $tenxe = $row['TenXe'];
                                        $gia = $row['Gia'];
                                        $gia = number_format($gia);
                                        $hinh = $row['Hinh'];
                                        $hienthi = $row['HienThi'];
                                        if($hienthi == 1)
                                        {
                                            echo '<div class="main-product-item">
                                                    <div class="main-product-item-bg"></div>
                                                    <h3 class="main-product-item-name">'.$tenxe.'</h3>
                                                    <a href="products-detail?id='.$maxe.'" class="main-product-item-link">
                                                        <img src="IMG/Product/'.$hinh.'" alt="'.$tenxe.'">
                                                    </a>
                                                    <div class="main-product-item-bottom">
                                                        <div class="main-product-item-price">'.$gia.' VNĐ</div>
                                                        <a href="products-detail?id='.$maxe.'" class="main-product-item-btn">Xem chi tiết</a>
                                                    </div>
                                                </div>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="main-product-col">
                            <div class="main-product-list sportbike">
                                <div class="main-product-title">XE thể thao</div>
                                <div class="main-product-content">
                                <?php
                                    $sql = 'select * from xe where MaLoai="TT"';
                                    $rs = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($rs)){
                                        $maxe = $row['MaXe'];
                                        $tenxe = $row['TenXe'];
                                        $gia = $row['Gia'];
                                        $gia = number_format($gia);
                                        $hinh = $row['Hinh'];
                                        $hienthi = $row['HienThi'];
                                        if($hienthi == 1)
                                        {
                                            echo '<div class="main-product-item">
                                                    <div class="main-product-item-bg"></div>
                                                    <h3 class="main-product-item-name">'.$tenxe.'</h3>
                                                    <a href="products-detail?id='.$maxe.'" class="main-product-item-link">
                                                        <img src="IMG/Product/'.$hinh.'" alt="'.$tenxe.'">
                                                    </a>
                                                    <div class="main-product-item-bottom">
                                                        <div class="main-product-item-price">'.$gia.' VNĐ</div>
                                                        <a href="products-detail?id='.$maxe.'" class="main-product-item-btn">Xem chi tiết</a>
                                                    </div>
                                                </div>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?=$footer?>
</body>
</html>