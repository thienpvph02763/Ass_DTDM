-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2015 at 01:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thien_create`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `ID_HD` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `ngaymua` date NOT NULL,
  `KhachHang_ID_KH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hoadonchitiet`
--

CREATE TABLE IF NOT EXISTS `hoadonchitiet` (
  `ID_HDCT` int(11) NOT NULL,
  `ID_HD` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `HoaDon_ID_HD` int(11) NOT NULL,
  `SanPham_ID_SP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `ID_KH` int(11) NOT NULL,
  `Ten_KH` varchar(50) NOT NULL,
  `SDT` varchar(50) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`ID_KH`, `Ten_KH`, `SDT`, `DiaChi`) VALUES
(1, 'Ph?m V?n Thiên', '01646337673', 'Hà N?i'),
(2, 'Nguy?n Ti?n B', '0923123123', 'H?i Phòng');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `ID_LSP` int(11) NOT NULL,
  `TenLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`ID_LSP`, `TenLoai`) VALUES
(1, 'Vip'),
(2, 'Thuong');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `ID_SP` int(11) NOT NULL,
  `Ten_SP` varchar(50) NOT NULL,
  `ID_LSP` int(11) NOT NULL,
  `LoaiSanPham_ID_LSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID_SP`, `Ten_SP`, `ID_LSP`, `LoaiSanPham_ID_LSP`) VALUES
(1, 'Iphone6', 1, 1),
(2, 'Nokia', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
 ADD PRIMARY KEY (`ID_HD`), ADD KEY `HoaDon_KhachHang` (`KhachHang_ID_KH`);

--
-- Indexes for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
 ADD PRIMARY KEY (`ID_HDCT`), ADD KEY `HoaDonChiTiet_HoaDon` (`HoaDon_ID_HD`), ADD KEY `HoaDonChiTiet_SanPham` (`SanPham_ID_SP`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
 ADD PRIMARY KEY (`ID_KH`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
 ADD PRIMARY KEY (`ID_LSP`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
 ADD PRIMARY KEY (`ID_SP`), ADD KEY `SanPham_LoaiSanPham` (`LoaiSanPham_ID_LSP`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
ADD CONSTRAINT `HoaDon_KhachHang` FOREIGN KEY (`KhachHang_ID_KH`) REFERENCES `khachhang` (`ID_KH`);

--
-- Constraints for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
ADD CONSTRAINT `HoaDonChiTiet_HoaDon` FOREIGN KEY (`HoaDon_ID_HD`) REFERENCES `hoadon` (`ID_HD`),
ADD CONSTRAINT `HoaDonChiTiet_SanPham` FOREIGN KEY (`SanPham_ID_SP`) REFERENCES `sanpham` (`ID_SP`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
ADD CONSTRAINT `SanPham_LoaiSanPham` FOREIGN KEY (`LoaiSanPham_ID_LSP`) REFERENCES `loaisanpham` (`ID_LSP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
