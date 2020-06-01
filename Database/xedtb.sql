-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 11:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xedtb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietxe`
--

CREATE TABLE `chitietxe` (
  `ID` int(11) NOT NULL,
  `MaXe` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Loai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DungTich` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CongXuat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Momen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KhoiDong` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TieuThu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TruyenLuc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PhanhTruoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PhanhSau` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LopTruoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LopSau` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DenTruoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DenSau` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KichThuoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DoCao` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KhoangCach` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DoCaoGam` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TrongLuong` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DungTichXang` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DungTichDau` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BaoHanh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinh1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinh2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinh3` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinh4` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinh5` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinh6` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinh7` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietxe`
--

INSERT INTO `chitietxe` (`ID`, `MaXe`, `Loai`, `DungTich`, `CongXuat`, `Momen`, `KhoiDong`, `TieuThu`, `TruyenLuc`, `PhanhTruoc`, `PhanhSau`, `LopTruoc`, `LopSau`, `DenTruoc`, `DenSau`, `KichThuoc`, `DoCao`, `KhoangCach`, `DoCaoGam`, `TrongLuong`, `DungTichXang`, `DungTichDau`, `BaoHanh`, `Hinh1`, `Hinh2`, `Hinh3`, `Hinh4`, `Hinh5`, `Hinh6`, `Hinh7`) VALUES
(1, 'EX', '4 thì, 4 van, SOHC, làm mát bằng dung dịch', '150 cc', '11,3 kW (15,4 PS) / 8.500 vòng/phút', '13,8 N·m (1,4 kgf·m) / 7.000 vòng/phút', 'Khởi động điện', '2 l/100km', '5 số', 'Đĩa thủy lực (đường kính 245 mm)', 'Đĩa thủy lực (đường kính 203 mm)', '90/80-17M/C 46P (lốp không săm)', '120/70-17M/C 58P (lốp không săm)', 'Bóng đèn LED 12V 10W x2', 'Bóng đèn LED 12V 10W x2', '1985 mm × 670 mm × 1100 mm', '795 mm', '1290 mm', '155 mm', '117 kg', '4,2', '1,15', '3 năm hoặc 30,000km (tuỳ điều kiện nào đến trước)', 'exciter1.png', 'exciter2.png', 'exciter3.png', 'exciter4.png', 'exciter5.png', 'exciter6.png', 'exciter7.png'),
(2, 'MT03', '4 thì, 8 van, 2 xy lanh, làm mát bằng dung dịch, DOHC', '321', '30,9 kW (42,0PS)/ 10.750 vòng/phú', '29,6 Nm (3,0 kgf.m)/ 9.000 vòng/phút', 'Điện', NULL, 'Bánh răng ăn khớp, 6 số', 'Đĩa thủy lực (Đường kính 298 mm), hệ thống ABS, hai piston kẹp', 'Đĩa thủy lực (Đường kính 220 mm), hệ thống ABS, một piston kẹp', '110/70-17M/C 54H (Lốp không săm)', '140/70-17M/C 66H (Lốp không săm)', 'LED', 'LED', '2090 x 745 x 1035 (mm)', '780 mm', '1380 mm', '160 mm', '168 kg', '14 lít', '2,4 lít', '3 năm hoặc 30.000km (Tùy điều kiện nào đến trước)', 'mt031.png', 'mt032.png', 'mt033.png', 'mt034.png', 'mt035.png', 'mt036.png', 'mt037.png'),
(3, 'GR', 'Blue Core, SOHC, 4 kỳ, 2 van, Làm mát bằng không khí cưỡng bức', '125', '6,1 kW (8,3 PS)/6500 vòng/phút', '10,4 N.m (1,1 kgf.m)/5000 vòng/phút', 'Khởi động điện', '1,69', 'CVT', 'Đĩa thuỷ lực trang bị ABS', 'Phanh cơ (đùm)', '110/70-12 47L (Lốp không săm)', '110/70-12 47L (Lốp không săm)', 'LED', 'LED', '1.820mm x 685mm x 1.150mm', '790 mm', '1280 mm', '125 mm', '101 kg', NULL, NULL, '30.000 km hoặc 3 năm (tuỳ theo điều kiện nào đến trước)', 'grande1.png', 'grande2.png', 'grande3.png', 'grande4.png', 'grande5.png', 'grande6.png', 'grande7.png'),
(4, 'JU', '4 kỳ, 2 van, SOHC, làm mát bằng không khí tự nhiên', '114', '7,4 kW (9,9 PS) / 7.000 vòng/phút', '9,9 N.m (0,99kgf.m) / 6.500 vòng/phút', 'Điện / Cần khởi động', '1,55', '4 số tròn', 'Đĩa thủy lực', 'Phanh cơ (đùm)', '70/90 - 17 38P (Lốp có săm)', '80/90 - 17 50P (Lốp có săm)', 'Halogen 12V 35W / 35W x 1', '12V, 5W/21W x 1', '1.935mm x 680mm x 1.065mm', '765mm', '1.240mm', '125mm', '104kg', NULL, NULL, '3 năm / 30,000km (Tùy điều kiện nào đến trước)', 'jupiter1.png', 'jupiter2.png', 'jupiter3.png', 'jupiter4.png', 'jupiter5.png', 'jupiter6.png', 'jupiter7.png'),
(5, 'LA', 'Blue Core, 2 van, 4 kỳ, SOHC, Làm mát bằng không khí cưỡng bức', '124.9 cc', '6,0kW (8,0 PS) / 6.500 vòng/phút', '9,7 N.m (0,97 kgf·m) / 5.000 vòng/phút', 'Khởi động điện', '1,80', 'CVT', 'Phanh đĩa đơn thuỷ lực', 'Phanh cơ (đùm)', '90/90 - 12 44J (Lốp không săm)', '100/90 - 12 56J (Lốp không săm)', 'HS1, 35.0 W/35.0 W', '21.0 W/5.0 W', '1820 mm x 685 mm x 1160 mm', '790 mm', '1275 mm', '125 mm', '100kg', NULL, NULL, '3 năm hoặc 30.000km (tùy điều kiện nào đến trước)', 'latte1.png', 'latte2.png', 'latte3.png', 'latte4.png', 'latte5.png', 'latte6.png', 'latte7.png'),
(6, 'YZFR3', '4 thì, 2 xy lanh, 8 van, làm mát bằng dung dịch, DOHC', '321', '30.9 kW/ 10.750 vòng/ phút', '29.6 Nm/ 9.000 vòng/ phút', 'Điện', '3,62', 'Bánh răng ăn khớp, 6 số', 'Đĩa đơn thủy lực, ∅298 x 4,5 mm', 'Đĩa đơn thủy lực, ∅220 x 4,5 mm', '110/70-17M/C 54H (Lốp không săm)', '140/70-17M/C 66H (Lốp không săm)', 'LED', 'LED', '2.090mm x 730mm x 1.140mm', '780mm', '1.380mm', '160mm', '169kg', '14.0 lít', '2.4 lít', '3 năm hoặc 30.000km (tuỳ điều kiện nào đến trước)', 'yzfr31.png', 'yzfr32.png', 'yzfr33.png', 'yzfr34.png', 'yzfr35.png', 'yzfr36.png', 'yzfr37.png');

-- --------------------------------------------------------

--
-- Table structure for table `dondangki`
--

CREATE TABLE `dondangki` (
  `MaDon` int(11) NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDK` date NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MaXe` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DaXuLy` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giaodien`
--

CREATE TABLE `giaodien` (
  `ID` int(11) NOT NULL,
  `IMG` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giaodien`
--

INSERT INTO `giaodien` (`ID`, `IMG`) VALUES
(1, 'slide.png'),
(2, 'slide1.png'),
(3, 'slide2.png'),
(4, 'slide3.png');

-- --------------------------------------------------------

--
-- Table structure for table `loaixe`
--

CREATE TABLE `loaixe` (
  `MaLoai` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoai` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaixe`
--

INSERT INTO `loaixe` (`MaLoai`, `TenLoai`) VALUES
('TT', 'Xe thể thao'),
('XG', 'Xe ga'),
('XS', 'Xe số');

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `MaXe` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenXe` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoai` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` float NOT NULL,
  `HienThi` tinyint(1) NOT NULL,
  `Hinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`MaXe`, `TenXe`, `MaLoai`, `Gia`, `HienThi`, `Hinh`) VALUES
('EX', 'Exciter', 'XS', 48990000, 1, 'exciter.png'),
('GR', 'Grande', 'XG', 50000000, 1, 'grande.png'),
('JU', 'Jupiter', 'XS', 30000000, 1, 'jupiter.png'),
('LA', 'Latte', 'XG', 37490000, 1, 'latte.png'),
('MT03', 'MT-03', 'TT', 124000000, 1, 'mt03.png'),
('YZFR3', 'YZF-R3', 'TT', 129000000, 1, 'yzfr3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietxe`
--
ALTER TABLE `chitietxe`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaXe` (`MaXe`);

--
-- Indexes for table `dondangki`
--
ALTER TABLE `dondangki`
  ADD PRIMARY KEY (`MaDon`),
  ADD KEY `MaXe` (`MaXe`);

--
-- Indexes for table `giaodien`
--
ALTER TABLE `giaodien`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`MaXe`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietxe`
--
ALTER TABLE `chitietxe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dondangki`
--
ALTER TABLE `dondangki`
  MODIFY `MaDon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giaodien`
--
ALTER TABLE `giaodien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietxe`
--
ALTER TABLE `chitietxe`
  ADD CONSTRAINT `chitietxe_ibfk_1` FOREIGN KEY (`MaXe`) REFERENCES `xe` (`MaXe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dondangki`
--
ALTER TABLE `dondangki`
  ADD CONSTRAINT `dondangki_ibfk_1` FOREIGN KEY (`MaXe`) REFERENCES `xe` (`MaXe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loaixe` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
