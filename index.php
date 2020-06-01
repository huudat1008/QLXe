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
    <link rel="stylesheet" href="CSS/index.css">
    <script src="Javascript/slide.js" defer></script>
    <title>Yamaha Motor Việt Nam</title>
</head>
<body>
    <?=$header?>
    <div class="main">
        <div class="content">
            <div class="slide-show">
            <?php
                $n = 0;
                $sql = 'select * from giaodien';
                $rs = mysqli_query($con, $sql);
                while ($r = mysqli_fetch_assoc($rs)){
                    $img = $r['IMG'];
                    echo '<img src="IMG/'.$img.'" class="slide">';
                    $n++;
                }
            ?>
                <div class="dots">
                <?php
                    for($i=0;$i<$n;$i++)
                    {
                        echo '<span class="dots-item" onclick="currentSlide('.$i.')"></span>';
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    <?=$footer?>
</body>
</html>