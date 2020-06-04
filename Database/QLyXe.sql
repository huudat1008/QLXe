-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2020 at 08:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13948806_qlyxe`
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

INSERT INTO `chitietxe` (`ID`, `MaXe`, `Loai`, `DungTich`, `CongXuat`, `Momen`, `KhoiDong`, `TieuThu`, `TruyenLuc`, `PhanhTruoc`, `PhanhSau`, `LopTruoc`, `LopSau`, `DenTruoc`, `DenSau`, `KichThuoc`, `DoCao`, `KhoangCach`, `DoCaoGam`, `TrongLuong`, `BaoHanh`, `Hinh1`, `Hinh2`, `Hinh3`, `Hinh4`, `Hinh5`, `Hinh6`, `Hinh7`) VALUES
(2, 'MT03', '4 thì, 8 van, 2 xy lanh, làm mát bằng dung dịch, DOHC', '321', '30,9 kW (42,0PS)/ 10.750 vòng/phú', '29,6 Nm (3,0 kgf.m)/ 9.000 vòng/phút', 'Điện', NULL, 'Bánh răng ăn khớp, 6 số', 'Đĩa thủy lực (Đường kính 298 mm), hệ thống ABS, hai piston kẹp', 'Đĩa thủy lực (Đường kính 220 mm), hệ thống ABS, một piston kẹp', '110/70-17M/C 54H (Lốp không săm)', '140/70-17M/C 66H (Lốp không săm)', 'LED', 'LED', '2090 x 745 x 1035 (mm)', '780 mm', '1380 mm', '160 mm', '168 kg', '3 năm hoặc 30.000km (Tùy điều kiện nào đến trước)', 'mt031.png', 'mt032.png', 'mt033.png', 'mt034.png', 'mt035.png', 'mt036.png', 'mt037.png'),
(3, 'GR', 'Blue Core, SOHC, 4 kỳ, 2 van, Làm mát bằng không khí cưỡng bức', '125', '6,1 kW (8,3 PS)/6500 vòng/phút', '10,4 N.m (1,1 kgf.m)/5000 vòng/phút', 'Khởi động điện', '1,69', 'CVT', 'Đĩa thuỷ lực trang bị ABS', 'Phanh cơ (đùm)', '110/70-12 47L (Lốp không săm)', '110/70-12 47L (Lốp không săm)', 'LED', 'LED', '1.820mm x 685mm x 1.150mm', '790 mm', '1280 mm', '125 mm', '101 kg', '30.000 km hoặc 3 năm (tuỳ theo điều kiện nào đến trước)', 'grande1.png', 'grande2.png', 'grande3.png', 'grande4.png', 'grande5.png', 'grande6.png', 'grande7.png'),
(4, 'JU', '4 kỳ, 2 van, SOHC, làm mát bằng không khí tự nhiên', '114', '7,4 kW (9,9 PS) / 7.000 vòng/phút', '9,9 N.m (0,99kgf.m) / 6.500 vòng/phút', 'Điện / Cần khởi động', '1,55', '4 số tròn', 'Đĩa thủy lực', 'Phanh cơ (đùm)', '70/90 - 17 38P (Lốp có săm)', '80/90 - 17 50P (Lốp có săm)', 'Halogen 12V 35W / 35W x 1', '12V, 5W/21W x 1', '1.935mm x 680mm x 1.065mm', '765mm', '1.240mm', '125mm', '104kg', '3 năm / 30,000km (Tùy điều kiện nào đến trước)', 'jupiter1.png', 'jupiter2.png', 'jupiter3.png', 'jupiter4.png', 'jupiter5.png', 'jupiter6.png', 'jupiter7.png'),
(5, 'LA', 'Blue Core, 2 van, 4 kỳ, SOHC, Làm mát bằng không khí cưỡng bức', '124.9 cc', '6,0kW (8,0 PS) / 6.500 vòng/phút', '9,7 N.m (0,97 kgf·m) / 5.000 vòng/phút', 'Khởi động điện', '1,80', 'CVT', 'Phanh đĩa đơn thuỷ lực', 'Phanh cơ (đùm)', '90/90 - 12 44J (Lốp không săm)', '100/90 - 12 56J (Lốp không săm)', 'HS1, 35.0 W/35.0 W', '21.0 W/5.0 W', '1820 mm x 685 mm x 1160 mm', '790 mm', '1275 mm', '125 mm', '100kg', '3 năm hoặc 30.000km (tùy điều kiện nào đến trước)', 'latte1.png', 'latte2.png', 'latte3.png', 'latte4.png', 'latte5.png', 'latte6.png', 'latte7.png'),
(6, 'YZFR3', '4 thì, 2 xy lanh, 8 van, làm mát bằng dung dịch, DOHC', '321', '30.9 kW/ 10.750 vòng/ phút', '29.6 Nm/ 9.000 vòng/ phút', 'Điện', '3,62', 'Bánh răng ăn khớp, 6 số', 'Đĩa đơn thủy lực, ∅298 x 4,5 mm', 'Đĩa đơn thủy lực, ∅220 x 4,5 mm', '110/70-17M/C 54H (Lốp không săm)', '140/70-17M/C 66H (Lốp không săm)', 'LED', 'LED', '2.090mm x 730mm x 1.140mm', '780mm', '1.380mm', '160mm', '169kg', '3 năm hoặc 30.000km (tuỳ điều kiện nào đến trước)', 'yzfr31.png', 'yzfr32.png', 'yzfr33.png', 'yzfr34.png', 'yzfr35.png', 'yzfr36.png', 'yzfr37.png'),
(23, 'EX', '4 thì, 4 van, SOHC, làm mát bằng dung dịch', '150 cc', '11,3 kW (15,4 PS) / 8.500 vòng/phút', '13,8 N·m (1,4 kgf·m) / 7.000 vòng/phút', 'Khởi động điện', '2 l/100km', '5 số', 'Đĩa thủy lực (đường kính 245 mm)', 'Đĩa thủy lực (đường kính 203 mm)', '90/80-17M/C 46P (lốp không săm)', '120/70-17M/C 58P (lốp không săm)', 'Bóng đèn LED 12V 10W x2', 'Bóng đèn LED 12V 10W x2', '1985 mm × 670 mm × 1100 mm', '795 mm', '1290 mm', '155 mm', '117 kg', '3 năm hoặc 30,000km (tuỳ điều kiện nào đến trước)', 'exciter1.png', 'exciter2.png', 'exciter3.png', 'exciter4.png', 'exciter5.png', 'exciter6.png', 'exciter7.png'),
(24, 'SIFI', '4 thì, 2 van SOHC, làm mát bằng không khí', '115', '6.4 kW (8.7PS)/7,000 vòng/phút', '9.5 N.m (0.97kgf/m)/5,500 vòng/phút', 'Điện / Cần đạp', '1,57', '4 số tròn', 'Phanh đĩa thủy lực', 'Phanh tang trống', '70/90-17 M/C 38P (Lốp có săm)', '80/90-17 M/C 50P (Lốp có săm)', 'Halogen 12V, 35W/35Wx1', '12V, 5W/18W x 1', '1.940 mm×715 mm×1.075 mm', '775 mm', '1.235 mm', '155 mm', '99 kg', '3 năm hoặc 30.000km (tùy điều kiện nào đến trước)', 'siriusfi1.png', 'siriusfi2.png', 'siriusfi3.png', 'siriusfi4.png', 'siriusfi5.png', 'siriusfi6.png', 'siriusfi7.png'),
(25, 'JA', 'Blue Core, 4 kỳ, 2 van, SOHC, Làm mát bằng không khí cưỡng bức', '125', '7,0 kW (9,5 ps) / 8.000 vòng /phút', '9,6 N.m/ 5.500 vòng/ phút', 'Khởi động điện', '1,87', 'CVT', 'Đĩa thủy lực', 'Phanh cơ (đùm)', '80/80 - 14 43P (Lốp có săm)', '110/70 - 14 56P (Lốp có săm)', 'Halogen 12V, 35W/35Wx1', 'LED', '1850 mm x 705 mm x 1120mm', '770 mm', '1260 mm', '135 mm', '99 kg', '3 năm/ 30.000 km (Tùy điều kiện nào đến trước)', 'janus1.png', 'janus2.png', 'janus3.png', 'janus4.png', 'janus5.png', 'janus6.png', 'janus7.png'),
(26, 'NVX', 'Blue Core, 4 van, 4 kỳ, SOHC, Làm mát bằng dung dịch', '155', '11,0 kW (15,0 ps) / 8.000 vòng /phút', '13,8 N.m (1,4 kgf-m)/ 6.250 vòng/ phút', 'Khởi động điện', '2,23', 'CVT', 'Phanh đĩa thuỷ lực, trang bị ABS', 'Phanh cơ (đùm), đường kính 130mm', '110/80-14M/C 53P (lốp không săm)', '140/70-14M/ C 62P (lốp không săm)', 'LED', 'LED', '1.990 mm x 700 mm x 1.125mm', '790 mm', '1.350 mm', '140 mm', '118 kg', '3 năm/ 30.000 km (Tùy điều kiện nào đến trước)', 'nvx1.png', 'nvx2.png', 'nvx3.png', 'nvx4.png', 'nvx5.png', 'nvx6.png', 'nvx7.png'),
(27, 'FE', 'Blue Core, 4 kỳ, 2 van, SOHC, Làm mát bằng không khí cưỡng bức', '125 cc', '7,0 kW (9,5 ps) / 8.000 vòng /phút', '9,5 N·m (1,0 kgf·m) / 5.500 vòng/phút', 'Điện', '1,97', 'CVT', 'Đĩa thuỷ lực trang bị ABS', 'Phanh cơ (đùm)', '100/90 – 12 59J (Không săm)', '110/90 – 12 64L (Không săm)', 'LED', '21.0 W/5.0 W', '1.905 mm × 690 mm × 1.110 mm', '780 mm', '1.275 mm', '135 mm', '102 kg', '3 năm hoặc 30.000 km (tuỳ theo điều kiện nào đến trước)', 'freego1.png', 'freego2.png', 'freego3.png', 'freego4.png', 'freego5.png', 'freego6.png', 'freego7.png'),
(28, 'AC', 'Blue Core, SOHC, 4 kỳ, 2 van, làm mát bằng không khí cưỡng bức', '125', '6,1 kW (8,3 PS) / 6.500 vòng/phút', '9,7 N·m (0,99 kgf·m) / 5.000 vòng/phút', 'Điện', '', 'CVT', 'Đĩa thủy lực', 'Phanh cơ (đùm)', '90/90-12 44J (Lốp không săm)', '100/90-10 56J (Lốp không săm)', '12V 35/35W × 1 (Hệ thống đèn halogen)', '	12 V, 5.0 W/21.0 W x 1', '1.805 mm × 685 mm × 1.145 mm', '785mm', '1.275mm', '125mm', '99kg', '3 năm/ 30.000 km (Tùy điều kiện nào đến trước)', 'acruzo1.png', 'acruzo2.png', 'acruzo3.png', 'acruzo4.png', 'acruzo5.png', 'acruzo6.png', 'acruzo7.png'),
(29, 'MT15', '4 thì, 4 van, SOHC, làm mát bằng dung dịch', '155cc', '14,2 kW (19,3 PS)/10.000 vòng/phút', '14,7 N.m (1,5kgf.m)/8.500 vòng/phút', 'Điện', '2,09', 'Bánh răng ăn khớp, 6 số', 'Đĩa đơn thuỷ lực', 'Đĩa đơn thuỷ lực', '110/70 - 17 M/C 54S (lốp không săm)', '140/70 - 17 M/C 66S (lốp không săm)', 'LED', 'LED', '1965 mm x 800 mm x 1065 mm', '810 mm', '1335 mm', '155 mm', '133 kg', '	3 năm hoặc 30.000 km (tuỳ theo điều kiện nào đến trước)', 'mt151.png', 'mt152.png', 'mt153.png', 'mt154.png', 'mt155.png', 'mt156.png', 'mt157.png'),
(30, 'YZFR15', '4 thì, 4 van, làm mát bằng dung dịch, SOHC', '155', '14,2 kW/ 10.000 vòng /phút', '14,7 Nm/ 8.500 vòng /phút', 'Điện', '2,02', 'Bánh răng ăn khớp, 6 số', 'Đĩa thuỷ lực (đường kính 282 mm), hai piston kẹp', 'Đĩa thuỷ lực (đường kính 220 mm), một piston kẹp', '100/80-17M/C 52P (lốp không săm)', '140/70-17M/C 66S (lốp không săm)', 'LED', 'LED', '1970 x 670 x 1070 (mm)', '815 mm', '1325 mm', '155 mm', '137 kg', '3 năm hoặc 30.000 km (tuỳ điều kiện nào đến trước)', 'yzfr151.png', 'yzfr152.png', 'yzfr153.png', 'yzfr154.png', 'yzfr155.png', 'yzfr156.png', 'yzfr157.png'),
(31, 'TFX', '4 thì, 4 van, SOHC, làm mát bằng dung dịch', '149,7', '11,3 kW (15.4 PS) / 8500 vòng/phút', '13,8 N-m (1.4 kgf-m) / 7000 vòng/phút', 'Điện', '', 'Ăn khớp bánh răng, 6 số', 'Đĩa đơn thuỷ lực', 'Đĩa đơn thuỷ lực', '110/70-17M/C 54S (Lốp không săm)', '130/70-17M/C 62S (Lốp không săm)', 'LED', 'LED', '1955 mm x 795 mm x 1.065 mm', '805 mm', '1350 mm', '164 mm', '135 kg', '3 năm hoặc 30.000 km (Tuỳ điều kiện nào đến trước)', 'tfx1.png', 'tfx2.png', 'tfx3.png', 'tfx4.png', 'tfx5.png', 'tfx6.png', 'tfx7.png');

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

--
-- Dumping data for table `dondangki`
--

INSERT INTO `dondangki` (`MaDon`, `TenKH`, `NgayDK`, `DiaChi`, `Sdt`, `Email`, `MaXe`, `DaXuLy`) VALUES
(21, 'Nguyễn Vũ Thái Dương', '2020-05-24', 'Biên Hòa', '0123456789', 'traitimcodon12345670@gmail.com', 'YZFR3', 1),
(26, 'Nguyễn Hữu Đạt', '2020-06-04', 'Biên Hòa', '0343589648', 'huudat.1008@gmail.com', 'MT03', 0),
(30, 'Nguyễn Hữu Đạt', '2020-06-04', 'Biên Hòa', '0343589648', 'huudat.1008@gmail.com', 'YZFR3', 0),
(31, 'Nguyễn Hữu Đạt', '2020-06-04', 'Biên Hòa', '0343589648', 'huudat.1008@gmail.com', 'JU', 0),
(32, 'Nguyễn Vũ Thái Dương', '2020-06-04', 'long binhf', '0352419399', 'duong238207@gmail.com', 'JU', 0),
(33, 'Đinh Văn Hùng', '2020-06-04', 'Biên Hòa', '0397983538', 'mhungem101@gmail.com', 'GR', 0);

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
(2, 'slide1.png'),
(4, 'slide3.png'),
(5, 'slide.png'),
(8, 'slide2.png');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `DiaChi`, `Sdt`, `Email`) VALUES
(17, 'Nguyễn Hữu Đạt', 'Biên Hòa', '0343589648', 'huudat.1008@gmail.com'),
(18, 'Nguyễn Vũ Thái Dương', 'Biên Hòa', '0123456789', 'traitimcodon12345670@gmail.com'),
(22, 'Nguyễn Vũ Thái Dương', 'long binhf', '0352419399', 'duong238207@gmail.com'),
(23, 'Đinh Văn Hùng', 'Biên Hòa', '0397983538', 'mhungem101@gmail.com');

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`) VALUES
('admin', 'admin'),
('dat', '456');

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
('AC', 'Acruzo', 'XG', 33490000, 1, 'acruzo.png'),
('EX', 'Exciter', 'XS', 48990000, 1, 'exciter.png'),
('FE', 'Freego', 'XG', 38990000, 1, 'freego.png'),
('GR', 'Grande', 'XG', 50000000, 1, 'grande.png'),
('JA', 'Janus', 'XG', 31990000, 1, 'janus.png'),
('JU', 'Jupiter', 'XS', 30000000, 1, 'jupiter.png'),
('LA', 'Latte', 'XG', 37490000, 1, 'latte.png'),
('MT03', 'MT-03', 'TT', 124000000, 1, 'mt03.png'),
('MT15', 'MT-15', 'TT', 78000000, 1, 'mt15.png'),
('NVX', 'NVX', 'XG', 52240000, 1, 'nvx.png'),
('SIFI', 'Sirius FI', 'XS', 23190000, 1, 'siriusfi.png'),
('TFX', 'TFX', 'TT', 72900000, 1, 'tfx.png'),
('YZFR15', 'YZF-R15', 'TT', 79000000, 1, 'yzfr15.png'),
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
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `dondangki`
--
ALTER TABLE `dondangki`
  MODIFY `MaDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `giaodien`
--
ALTER TABLE `giaodien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
