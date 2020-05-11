-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 11, 2020 lúc 08:20 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`Id`, `AdminName`, `Username`, `password`) VALUES
(1, 'Trịnh Quang Trường', 'quangtruong', '12345'),
(2, 'Ngô Anh Quang', 'anhquang', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hotels`
--

INSERT INTO `hotels` (`id`, `image`, `name`, `detail`, `Adress`, `price`) VALUES
(5, 'hotel4.jpg', 'Life Hack', '4 Persons per night double bed.', '', '95$'),
(6, 'hotel3.jpg', 'Natelia', '4 Persons per night double bed.', '', '90$'),
(8, 'hotel2.jpg', 'Life Hack', '4 Persons per night double bed.', '', '95$'),
(10, 'hotel1.jpg', 'Rose Hotel', '4 Persons per night double bed.', '', '80$');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `Ma_khachhang` int(255) NOT NULL AUTO_INCREMENT,
  `Ten_khachhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tuoi` int(255) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `CMND` int(255) NOT NULL,
  `Ma_taikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nganhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Ma_khachhang`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Ma_khachhang`, `Ten_khachhang`, `Tuoi`, `GioiTinh`, `CMND`, `Ma_taikhoan`, `Nganhang`, `Diachi`, `Sdt`, `Ghichu`) VALUES
(1, 'Trường', 18, 1, 25698649, '', '', '159 Trần Văn Quang', '01227711951', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lever`
--

DROP TABLE IF EXISTS `lever`;
CREATE TABLE IF NOT EXISTS `lever` (
  `lv_id` int(255) NOT NULL,
  `lv_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`lv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lever`
--

INSERT INTO `lever` (`lv_id`, `lv_name`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lever` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `lever`) VALUES
(38, 'Tuấn', '123545', 1),
(37, 'Tuan', '124', 1),
(36, 'Tuan', '124', 1),
(35, 'Tuan', '124', 1),
(34, 'Tuan', '124', 1),
(33, 'Tuan', '124', 1),
(32, 'Trung', '123', 1),
(31, 'Trường', '12345', 2),
(29, 'Tuấn', '123545', 1),
(39, 'Tuan', '124', 1),
(40, 'Tuan', '124', 1),
(41, 'Tuan', '124', 1),
(42, 'Tuan', '124', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vacations`
--

DROP TABLE IF EXISTS `vacations`;
CREATE TABLE IF NOT EXISTS `vacations` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `So_cho` int(11) NOT NULL,
  `So_ngay` int(11) NOT NULL,
  `So_dem` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vacations`
--

INSERT INTO `vacations` (`id`, `image`, `title`, `content`, `So_cho`, `So_ngay`, `So_dem`, `price`) VALUES
(9, 'Hawaii.jpg', 'Hawaii island', 'Athens then a 4 day cruise to Myk okusa dasi and Ephrsus, Potmos, Rhodes, Santorini.', 0, 0, 0, '980$'),
(10, 'moutain1.jpg', 'Hiking Trekking Nature', 'the humming capital of Bankkok, historic Kanchanaburi and the River Kwai', 0, 0, 0, '980$'),
(11, 'virginia.jpg', 'Virgin Islands', 'the humming capital of Bankkok, historic Kanchanaburi and the River Kwai.', 0, 0, 0, '980$'),
(12, 'turkey.jpg', 'Tunk Ang Caicos', 'the humming capital of Bankkok, historic Kanchanaburi and the River Kwai', 0, 0, 0, '980%'),
(13, 'italy.jpg', 'Sardinia, Italy', 'the humming capital of Bankkok, historic Kanchanaburi and the River Kwai', 0, 0, 0, '980$'),
(14, 'Hochiminh1.jpg', 'Thành Phố Hồ Chí Minh', 'Thành phố Hồ Chí Minh là thành phố lớn nhất Việt Nam, đồng thời cũng là một trong những trung tâm kinh tế, chính trị, văn hóa và giáo dục quan trọng nhất của Việt Nam', 0, 0, 0, '500$'),
(15, 'Hochiminh1.jpg', 'Thành Phố Hà Nội', 'Hà Nội là thủ đô của nước Cộng hòa xã hội chủ nghĩa Việt Nam, cũng là kinh đô của hầu hết các vương triều phong kiến tại Việt Nam trước đây. Do đó, lịch sử Hà Nội gắn liền với sự thăng trầm của lịch sử Việt Nam qua các thời kỳ', 0, 0, 0, '100$'),
(18, 'Hanoi1.jpg', 'Hà Nội 2', 'Hà Nội là thủ đô của nước Cộng hòa xã hội chủ nghĩa Việt Nam, cũng là kinh đô của hầu hết các vương triều phong kiến tại Việt Nam trước đây. Do đó, lịch sử Hà Nội gắn liền với sự thăng trầm của lịch sử Việt Nam qua các thời kỳ', 0, 0, 0, '300$');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
