-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 07:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctdh`
--

CREATE TABLE `ctdh` (
  `maDonHang` varchar(20) NOT NULL,
  `maSach` varchar(20) NOT NULL,
  `soLuongMua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `maDonHang` varchar(20) NOT NULL,
  `ngayDatHang` date NOT NULL,
  `ngayThanhToan` date NOT NULL,
  `maNguoiDung` varchar(20) DEFAULT NULL,
  `tongTien` decimal(10,2) DEFAULT NULL,
  `maVanChuyen` varchar(20) DEFAULT NULL,
  `maThanhToan` varchar(20) DEFAULT NULL,
  `trangThai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`maDonHang`, `ngayDatHang`, `ngayThanhToan`, `maNguoiDung`, `tongTien`, `maVanChuyen`, `maThanhToan`, `trangThai`) VALUES
('DH1', '2024-01-02', '2024-01-03', 'US012', 135000.00, 'VC1', 'TT1', 'Đã giao'),
('DH2', '2024-01-10', '2024-01-10', 'US001', 86000.00, 'VC2', 'TT2', 'Đã giao'),
('DH3', '2024-01-11', '2024-01-15', 'US004', 134000.00, 'VC3', 'TT3', 'Đã giao'),
('DH4', '2024-01-15', '2024-01-21', 'US015', 113000.00, 'VC4', 'TT4', 'Đã hủy'),
('DH5', '2024-01-30', '2024-01-30', 'US016', 90000.00, 'VC5', 'TT5', 'Đã giao');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `maNguoiDung` varchar(20) NOT NULL,
  `tenDangNhap` varchar(255) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `hoTen` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `SDT` varchar(15) DEFAULT NULL,
  `diaChi` varchar(255) DEFAULT NULL,
  `ngayTaoTK` date NOT NULL,
  `ngaySinh` date DEFAULT NULL,
  `gioiTinh` varchar(10) DEFAULT NULL,
  `vaiTro` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`maNguoiDung`, `tenDangNhap`, `matKhau`, `hoTen`, `email`, `SDT`, `diaChi`, `ngayTaoTK`, `ngaySinh`, `gioiTinh`, `vaiTro`) VALUES
('US001', 'cuncun', '$2y$10$YZDl6E1C.O.RBwJWKoypOekiN52tt6yMKpk3FnLC2UY4GEwg8uKjO', 'Chu Thị Quỳnh Trang', '22521509@gm.uit.edu.vn', '0916451416', '27 đường 4 Linh Xuân Thủ Đứuc', '2023-03-15', '2004-02-20', 'Nữ', 1),
('US002', 'nttram', '$2y$10$2G6Kd/LpYbmYDIgjLsiaJ.MS5rMWlIGT5vZLa20K.SL5VWqueTBku', NULL, '22521499@gm.uit.edu.vn', NULL, NULL, '0000-00-00', NULL, NULL, 1),
('US003', 'laclac', '$2y$10$zYtuLiRgmOYXYKyXdrhT7.tElD1lSSddcdRSzo7Q8FF.0A2TTCmeW', NULL, '22521048@gm.uit.edu.vn', NULL, NULL, '0000-00-00', NULL, NULL, 1),
('US004', 'khanhvy', '$2y$10$m6YvFEnpzjVuUJ4g8yVfw.eG/yE5hE9k31TPyyw0fimV4itmZL.fi', NULL, '22521707@gm.uit.edu.vn', NULL, NULL, '0000-00-00', NULL, NULL, 1),
('US005', 'thuytien', '$2y$10$rb8K/qxgF/1/2g1fHgFtTujEIZ9ia9iC5ev20F4Z3Y0jWED.k6Jt.', NULL, '22521475@gm.uit.edu.vn', NULL, NULL, '0000-00-00', NULL, NULL, 1),
('US006', 'quyntrang123', '$2y$10$AZ9qUMYRL05iylZ0G6CmT.7kjbyFOuyXCdYpzW/5cimcrpJPDhHz.', NULL, 'qtrangvippro888@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US007', 'khanhtram', '$2y$10$suVIerAwxySHO10fZEo0UutJABekr.5UzIhiY3YfRbV.XgFQrpWCe', NULL, 'tranngockhanhtram@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US008', 'ngoctien123', '$2y$10$X7wWTptgM3izVWQI5TdKXuQt0hj8wxbN8Iw6kXibaXFBnQOAsjz.6', NULL, 'tranngoctien@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US009', 'hehe', '$2y$10$S3cTHtxNOSk0EtPuGvimVuheHbm7rPoeBwWD7vd2Ijp6fkd1R5AnK', NULL, 'hehe1234@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US010', 'lacloi', '$2y$10$GRPPvJRgXLXSz4OMx43Ry.6RHaQJP20AM013Mup8SQmRNegIrcM5S', NULL, 'thinhu2004@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US011', 'phunphun', '$2y$10$xt0Ohd7cJlUoGH9tLmBp3eAG7Viwjszxmj/KHE1h8ORyadApvxCoK', NULL, 'haphuong2004@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US012', 'minhtuan', '$2y$10$AfOjv.7BRgF1hEpMbYs4teXOfHcP5wiubHWShn6FoAl0nCK0qEV9i', NULL, 'minhtuan312@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US013', 'vybui', '$2y$10$XPhgu2hV8GIRWpKa5ypmeepDZc7ILRgt.1xxK4VLhHi.1UtxqhvEO', NULL, 'vybuidepgai@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US014', 'anhduong', '$2y$10$lm09BLp6cA.QDUMsHj0W9..8TnRGqrLXA/vAM61EBbiXub/dkbwRi', NULL, 'anhduong2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US015', 'minhphuong', '$2y$10$ybDczU/KHv6YwUhTIGw8huvUOEu4imDc6kdwQCNukEGlfLJr/aUKG', NULL, 'minhphuong2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US016', 'nguyentrang', '$2y$10$LL0DBvuKH.6F5buNWDmDwuWfUGf1h3HuVRd0RzwWHJskuNd5OamLS', NULL, 'trangnguyen2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US017', 'hoanganh', '$2y$10$cg7oPPAfT04fcWxWRgXFmOYkm9OqN/z3Z9edMX.WeoBypbhTk45le', NULL, 'hoanganh2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US018', 'tuanminh', '$2y$10$RkEyh3/FFRD.3AWz2Meunu6PE8i9ygc4e8M5Qu.GR68Nlcsi44sba', NULL, 'tuanminh2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US019', 'phuongnam', '$2y$10$2wSDHwUOscs7w7HWTYgBfeTQoyUAiKx2YaMys3aKBQJRj1jTCF6ha', NULL, 'phuongnam2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US020', 'minhthuy', '$2y$10$f95CjbVhl6n3pI0Ho53kVuw.D8lm2OxSWz0S/NNCGlIHM17xemXM.', NULL, 'minhthuy2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US021', 'hoangthanh', '$2y$10$u0hsKqG/yRqrBX3z1ROa4.3vkRJdgr6qMo0qC0Rw8MrVo9y3abTKq', NULL, 'hoangthanh2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US022', 'minhhoa', '$2y$10$fMXjy04MmA5CLXUaTNJQ.uWKmyeWZOd/5o7JODjxAZe2S5iHrksDu', NULL, 'minhhoa2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US023', 'hoangngoc', '$2y$10$ZWLElxrdns/ve4Q8niWv5OixTuF.GqV/B7wGzaOP3lMERA1nXG8Mm', NULL, 'hoangngoc2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US024', 'minhtam', '$2y$10$icioTm2f8t5l3R5NW0MtFeV8eThu7FnbInWCjm3w60HHnVj23gW3i', NULL, 'minhtam2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0),
('US025', 'huyhoang', '$2y$10$LfSMPjvk9.1io6mzHuHmXu75Rzq70lWxaAfa43LgBD9Quhg7Ma2Sq', NULL, 'huyhoang2024@gmail.com', NULL, NULL, '0000-00-00', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nxb`
--

CREATE TABLE `nxb` (
  `maNXB` varchar(20) NOT NULL,
  `tenNXB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nxb`
--

INSERT INTO `nxb` (`maNXB`, `tenNXB`) VALUES
('XB1', 'NXB Trẻ'),
('XB2', 'NXB Kim Đồng'),
('XB3', 'Nhã Nam'),
('XB4', 'Alpha book'),
('XB5', 'NXB Giáo dục Việt Nam'),
('XB6', 'NXB Văn học'),
('XB7', 'NXB Thanh niên'),
('XB8', 'NXB Thế giới');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `maSach` varchar(20) NOT NULL,
  `tenSach` varchar(255) NOT NULL,
  `maTacGia` varchar(20) DEFAULT NULL,
  `maLoaiSach` varchar(20) DEFAULT NULL,
  `maNXB` varchar(20) DEFAULT NULL,
  `gia` decimal(10,2) DEFAULT NULL,
  `soLuongConLai` int(11) DEFAULT NULL,
  `moTa` varchar(225) DEFAULT NULL,
  `anhBia` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `maTacGia` varchar(20) NOT NULL,
  `tenTacGia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`maTacGia`, `tenTacGia`) VALUES
('TG1', 'Nguyễn Nhật Ánh'),
('TG10', 'Markus Rach'),
('TG11', 'Gil Morales'),
('TG12', 'Jesse Livermore'),
('TG13', 'Agustin Silvani'),
('TG14', 'Avinash K Dixit'),
('TG15', 'Thomas J Stanley'),
('TG2', 'Gosho Aoyama'),
('TG3', 'Thùy Vũ'),
('TG4', 'Thẩm Viên'),
('TG5', 'Tô Hoài'),
('TG6', 'Nguyễn Bích'),
('TG7', 'Chu Linh Hoàng'),
('TG8', 'Luis Sepúlveda'),
('TG9', 'Carrie Weston');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `maThanhToan` varchar(20) NOT NULL,
  `ngayThanhToan` date NOT NULL,
  `hinhThucThanhToan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanhtoan`
--

INSERT INTO `thanhtoan` (`maThanhToan`, `ngayThanhToan`, `hinhThucThanhToan`) VALUES
('TT1', '2024-01-03', 'chuyển khoản'),
('TT10', '2024-03-12', 'chuyển khoản'),
('TT11', '0000-00-00', 'tiền mặt'),
('TT12', '2024-03-22', 'tiền mặt'),
('TT13', '2024-04-13', 'chuyển khoản'),
('TT14', '2024-04-23', 'chuyển khoản'),
('TT15', '2024-04-29', 'tiền mặt'),
('TT16', '2024-05-04', 'chuyển khoản'),
('TT17', '2024-05-06', 'tiền mặt'),
('TT18', '0000-00-00', 'chuyển khoản'),
('TT19', '2024-05-14', 'chuyển khoản'),
('TT2', '2024-01-10', 'tiền mặt'),
('TT20', '2024-05-17', 'tiền mặt'),
('TT21', '2024-05-22', 'chuyển khoản'),
('TT22', '2024-05-25', 'tiền mặt'),
('TT23', '0000-00-00', 'tiền mặt'),
('TT24', '2024-05-27', 'chuyển khoản'),
('TT25', '2024-06-03', 'tiền mặt'),
('TT3', '2024-01-15', 'tiền mặt'),
('TT4', '2024-01-21', 'chuyển khoản'),
('TT5', '2024-01-30', 'chuyển khoản'),
('TT6', '2024-02-06', 'tiền mặt'),
('TT7', '2024-02-11', 'tiền mặt'),
('TT8', '0000-00-00', 'chuyển khoản'),
('TT9', '2024-03-03', 'tiền mặt');

-- --------------------------------------------------------

--
-- Table structure for table `theloaisach`
--

CREATE TABLE `theloaisach` (
  `maLoaiSach` varchar(20) NOT NULL,
  `tenLoaiSach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloaisach`
--

INSERT INTO `theloaisach` (`maLoaiSach`, `tenLoaiSach`) VALUES
('LS1', 'Sách văn học'),
('LS2', 'Sách kinh tế'),
('LS3', 'Sách giáo khoa'),
('LS4', 'Sách KHTN'),
('LS5', 'Sách KHXH'),
('LS6', 'Sách thiếu nhi');

-- --------------------------------------------------------

--
-- Table structure for table `vanchuyen`
--

CREATE TABLE `vanchuyen` (
  `maVanChuyen` varchar(20) NOT NULL,
  `ngayVanChuyen` date NOT NULL,
  `ngayGiaoHang` date NOT NULL,
  `phiVanChuyen` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vanchuyen`
--

INSERT INTO `vanchuyen` (`maVanChuyen`, `ngayVanChuyen`, `ngayGiaoHang`, `phiVanChuyen`) VALUES
('VC1', '2024-01-03', '2024-01-06', 15000.00),
('VC10', '2024-03-12', '2024-03-15', 10000.00),
('VC11', '0000-00-00', '0000-00-00', 20000.00),
('VC12', '2024-03-22', '2024-03-26', 15000.00),
('VC13', '2024-04-14', '2024-04-18', 40000.00),
('VC14', '2024-04-20', '2024-04-23', 50000.00),
('VC15', '2024-04-29', '2024-05-03', 20000.00),
('VC16', '2024-05-04', '2024-05-09', 50000.00),
('VC17', '2024-05-05', '2024-05-10', 15000.00),
('VC18', '2024-05-07', '2024-05-11', 20000.00),
('VC19', '2024-05-11', '2024-05-15', 40000.00),
('VC2', '2024-01-10', '2024-01-13', 30000.00),
('VC20', '2024-05-17', '2024-05-21', 50000.00),
('VC21', '2024-05-22', '2024-05-25', 30000.00),
('VC22', '2024-05-23', '2024-05-27', 15000.00),
('VC23', '2024-05-24', '2024-05-26', 15000.00),
('VC24', '2024-05-28', '2024-06-01', 40000.00),
('VC25', '2024-05-30', '2024-06-04', 30000.00),
('VC3', '2024-01-11', '2024-01-16', 40000.00),
('VC4', '2024-01-15', '2024-01-17', 30000.00),
('VC5', '2024-01-30', '2024-02-01', 15000.00),
('VC6', '2024-02-06', '2024-02-09', 10000.00),
('VC7', '2024-02-11', '2024-02-15', 15000.00),
('VC8', '0000-00-00', '0000-00-00', 30000.00),
('VC9', '2024-02-28', '2024-03-02', 15000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ctdh`
--
ALTER TABLE `ctdh`
  ADD PRIMARY KEY (`maDonHang`,`maSach`),
  ADD KEY `maSach` (`maSach`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDonHang`),
  ADD KEY `maNguoiDung` (`maNguoiDung`),
  ADD KEY `maVanChuyen` (`maVanChuyen`),
  ADD KEY `maThanhToan` (`maThanhToan`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`maNguoiDung`);

--
-- Indexes for table `nxb`
--
ALTER TABLE `nxb`
  ADD PRIMARY KEY (`maNXB`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`maSach`),
  ADD KEY `maTacGia` (`maTacGia`),
  ADD KEY `maLoaiSach` (`maLoaiSach`),
  ADD KEY `maNXB` (`maNXB`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`maTacGia`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`maThanhToan`);

--
-- Indexes for table `theloaisach`
--
ALTER TABLE `theloaisach`
  ADD PRIMARY KEY (`maLoaiSach`);

--
-- Indexes for table `vanchuyen`
--
ALTER TABLE `vanchuyen`
  ADD PRIMARY KEY (`maVanChuyen`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ctdh`
--
ALTER TABLE `ctdh`
  ADD CONSTRAINT `ctdh_ibfk_1` FOREIGN KEY (`maDonHang`) REFERENCES `donhang` (`maDonHang`),
  ADD CONSTRAINT `ctdh_ibfk_2` FOREIGN KEY (`maSach`) REFERENCES `sach` (`maSach`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`maNguoiDung`) REFERENCES `nguoidung` (`maNguoiDung`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`maVanChuyen`) REFERENCES `vanchuyen` (`maVanChuyen`),
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`maThanhToan`) REFERENCES `thanhtoan` (`maThanhToan`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`maTacGia`) REFERENCES `tacgia` (`maTacGia`),
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`maLoaiSach`) REFERENCES `theloaisach` (`maLoaiSach`),
  ADD CONSTRAINT `sach_ibfk_3` FOREIGN KEY (`maNXB`) REFERENCES `nxb` (`maNXB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
