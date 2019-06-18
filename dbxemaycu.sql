-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2019 lúc 03:28 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbxemaycu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(10) NOT NULL,
  `nguoiban` int(10) NOT NULL,
  `nguoimua` int(10) NOT NULL,
  `matin` int(10) NOT NULL,
  `ngaydh` datetime NOT NULL,
  `tongtien` double NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Thành công, Thất bại,Đang tiến hành',
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Chưa rate, Đã rate',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madh`, `nguoiban`, `nguoimua`, `matin`, `ngaydh`, `tongtien`, `tinhtrang`, `rate`, `updated_at`, `created_at`) VALUES
(1, 45, 51, 1, '2019-05-11 00:00:00', 40000000, 'Đang tiến hành', 'Đã đánh giá', '2019-05-12 01:26:36', '0000-00-00 00:00:00'),
(2, 45, 51, 2, '2019-05-09 00:00:00', 500000, 'Thành công', 'Đã đánh giá', '2019-05-11 12:28:48', '0000-00-00 00:00:00'),
(3, 45, 51, 3, '2019-05-08 00:00:00', 500000, 'Thành công', 'Đã đánh giá', '2019-05-11 12:28:42', '0000-00-00 00:00:00'),
(4, 46, 51, 16, '2019-05-11 00:00:00', 500000, 'Thành công', 'Chưa đánh giá', '2019-05-11 15:30:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goiphithanhvien`
--

CREATE TABLE `goiphithanhvien` (
  `MAGOITV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `THOIHAN` int(11) NOT NULL COMMENT 'ngày',
  `GIA` double NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `goiphithanhvien`
--

INSERT INTO `goiphithanhvien` (`MAGOITV`, `THOIHAN`, `GIA`, `hinh`) VALUES
('GPTV1', 5, 50000, 'phithanhvien.png'),
('GPTV2', 10, 100000, 'phithanhvien.png'),
('GPTV3', 15, 150000, 'phithanhvien.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goitin`
--

CREATE TABLE `goitin` (
  `MAGOITIN` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SOTIN` int(11) NOT NULL,
  `GIA` double NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `goitin`
--

INSERT INTO `goitin` (`MAGOITIN`, `SOTIN`, `GIA`, `hinh`) VALUES
('GT1', 3, 20000, 'new.jpg'),
('GT2', 5, 30000, 'new.jpg'),
('GT3', 10, 50000, 'new.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `mahang` int(10) NOT NULL,
  `tenhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`mahang`, `tenhang`, `hinh1`, `hinh2`) VALUES
(1, 'Honda', 'honda-1.jpg', '2'),
(2, 'Yamaha', 'yamaha-1.jpg', '2'),
(3, 'Suzuki', 'suzuki-1.jpg', '2'),
(4, 'SYM', 'sym-1.jpg', '2'),
(5, 'Harley Davidson', 'Harley Davidson-1.jpg', '2'),
(6, 'Piaggio', 'piaggio-1.jpg', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(10) NOT NULL,
  `matv` int(10) NOT NULL,
  `ngayhd` datetime NOT NULL,
  `loaihd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'gia hạn phí thành viên, mua tin',
  `tongtien` double NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `matv`, `ngayhd`, `loaihd`, `tongtien`, `updated_at`, `created_at`) VALUES
(1, 45, '2019-05-11 17:46:59', 'mua tin', 20000, '2019-05-11 03:46:59', '2019-05-11 03:46:59'),
(2, 45, '2019-05-12 23:49:43', 'mua tin', 30000, '2019-05-12 09:49:43', '2019-05-12 09:49:43'),
(3, 45, '2019-05-12 23:51:38', 'gia hạn phí thành viên', 50000, '2019-05-12 09:51:38', '2019-05-12 09:51:38'),
(4, 45, '2019-05-12 23:52:15', 'gia hạn phí thành viên', 100000, '2019-05-12 09:52:15', '2019-05-12 09:52:15'),
(5, 45, '2019-05-12 23:52:43', 'mua tin', 50000, '2019-05-12 09:52:43', '2019-05-12 09:52:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaixe`
--

CREATE TABLE `loaixe` (
  `maloai` int(10) NOT NULL,
  `tenloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaixe`
--

INSERT INTO `loaixe` (`maloai`, `tenloai`, `hinh`) VALUES
(1, 'Xe số', 'honda-1.png'),
(2, 'Tay ga', 'yamaha-1.jpg'),
(3, 'Tay côn/Moto', 'suzuki-1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phankhoi`
--

CREATE TABLE `phankhoi` (
  `mapk` int(10) NOT NULL,
  `phankhoi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phankhoi`
--

INSERT INTO `phankhoi` (`mapk`, `phankhoi`, `hinh`) VALUES
(1, 'Dưới 100cc', '100cc.png'),
(2, '100-175cc', 'yamaha-1.jpg'),
(3, 'Trên 175cc', 'suzuki-1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `id` int(10) NOT NULL,
  `matv` int(10) NOT NULL,
  `sao` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`id`, `matv`, `sao`, `created_at`, `updated_at`) VALUES
(1, 45, 3, '2019-05-11 10:23:12', '0000-00-00 00:00:00'),
(2, 45, 4, '2019-05-11 10:23:12', '0000-00-00 00:00:00'),
(3, 45, 5, '2019-05-11 10:23:12', '0000-00-00 00:00:00'),
(4, 46, 2, '2019-05-11 10:23:12', '0000-00-00 00:00:00'),
(5, 46, 5, '2019-05-11 10:23:12', '0000-00-00 00:00:00'),
(6, 46, 1, '2019-05-11 10:23:12', '0000-00-00 00:00:00'),
(7, 45, 5, '2019-05-11 03:25:41', '2019-05-11 03:25:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `matin` int(10) NOT NULL,
  `matv` int(10) NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenxe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bienso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namdangky` int(10) NOT NULL,
  `sokmdadi` int(10) NOT NULL,
  `tinhtrangxe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahang` int(10) NOT NULL,
  `hinh1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên hình',
  `hinh2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double NOT NULL,
  `hinhcavet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên hình',
  `mapk` int(10) NOT NULL,
  `maloai` int(10) NOT NULL,
  `ngaydangtin` datetime NOT NULL,
  `kiemduyet` int(11) NOT NULL COMMENT '0-chưa,1-đã duyệt',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`matin`, `matv`, `tieude`, `tenxe`, `bienso`, `mau`, `namdangky`, `sokmdadi`, `tinhtrangxe`, `mahang`, `hinh1`, `hinh2`, `hinh3`, `mota`, `gia`, `hinhcavet`, `mapk`, `maloai`, `ngaydangtin`, `kiemduyet`, `updated_at`, `created_at`) VALUES
(1, 45, 'tin 01', 'Exciter 150', '59V1-498.98', 'Trắng', 2018, 1234, 'mới', 2, 'exciter150-1.jpg', 'exciter150-2.jpg', 'exciter150-3.jpg', 'hai bánh', 40000000, 'cavet 01.png', 2, 1, '2019-05-05 10:36:11', -1, '2019-05-12 06:31:25', '0000-00-00 00:00:00'),
(2, 45, 'tin 02', 'Jupiter FI RC', '59F1-444.29', 'Đỏ-Đen', 2016, 150000, 'cũ', 2, 'JupiterFIRC-1.jpg', 'JupiterFIRC-2.jpg', 'JupiterFIRC-3.jpg', 'hai bánh', 9600000, 'cavet 02.png', 2, 1, '2018-08-23 10:18:00', -1, '2019-05-12 10:17:39', '0000-00-00 00:00:00'),
(3, 45, 'tin 03', 'Sirius FI RC ', '63B6-188.98', 'Đen', 2019, 2612, 'mới', 2, 'siriusfirc-1.jpg', 'siriusfirc-2.jpg', 'siriusfirc-3.jpg', 'hai bánh', 11000000, 'cavet 03.jpg', 2, 1, '2018-08-17 07:31:00', -1, '2019-05-12 10:15:21', '0000-00-00 00:00:00'),
(4, 45, 'tin 04', 'FreeGo S', '51UB-1366', 'Xanh', 2017, 12345, 'mới', 2, 'freegos-1.jpg', 'freegos-2.jpg', 'freegos-3.jpg', 'hai bánh', 7900000, 'cavet 04.jpg', 2, 2, '2019-01-24 15:35:15', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(5, 45, 'tin 04', 'Grande', '51H3-5228', 'Xanh-Đen', 2016, 84623, 'cũ', 2, 'grande-1.jpg', 'grande-2.jpg', 'grande-3.jpg', 'hai bánh', 8600000, 'cavet 05.png', 2, 2, '2018-12-25 10:08:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(6, 45, 'tin 06', 'NVX 155', '29Y6-8888', 'Xanh', 2018, 15001, 'mới', 2, 'nvx155-1.jpg', 'nvx155-2.jpg', 'nvx155-3.jpg', 'hai bánh', 8700000, 'cavet 06.jpg', 2, 2, '2019-03-07 09:09:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(7, 45, 'tin 07', 'YZF-R15', '51U2-2986', 'Vàng', 2018, 16489, 'mới', 2, 'YZF-R15-1.jpg', 'YZF-R15-2.jpg', 'YZF-R15-3.jpg', 'hai báng', 10700000, 'cavet 07.jpg', 2, 3, '2019-02-20 07:31:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(8, 45, 'tin 08', 'TFX 150', '62B1-194.91', 'xanh-Đen', 2019, 20145, 'mới', 2, 'TFX150-1.jpg', 'TFX150-2.jpg', 'TFX150-3.jpg', 'hai bánh', 12000000, 'cavet 08.jpg', 2, 3, '2019-04-09 14:12:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(9, 45, 'tin 09', 'SUZUKI VIVA 115 FI', '94D1-266.07', 'đỏ', 2017, 14567, 'mới', 3, 'SUZUKIVIVA115FI-1.jpg', 'SUZUKIVIVA115FI-2.jpg', 'SUZUKIVIVA115FI-3.jpg', 'hai bánh tay ga', 15000000, 'cavet 09.jpg', 2, 1, '2019-01-15 11:16:00', 1, '2019-05-12 02:38:54', '0000-00-00 00:00:00'),
(10, 45, 'tin 10', 'SUZUKI AXELO 125', '59X1-353.79', 'đỏ', 2018, 154895, 'cũ', 3, 'SUZUKIAXELO125-1.jpg', 'SUZUKIAXELO125-2.jpg', 'SUZUKIAXELO125-3.jpg', 'hai bánh tay ga', 14000000, 'cavet 10.jpg', 2, 1, '2019-02-06 09:10:09', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(11, 45, 'tin 11', 'IMPULSE 125 FI', '59M1-146.88', 'Trắng Nâu', 2019, 123548, 'cũ', 3, 'IMPULSE125FI-1.jpg', 'IMPULSE125FI-2.jpg', 'IMPULSE125FI-3.jpg', 'hai bánh', 13000000, 'cavet 11.jpg', 2, 2, '2019-05-06 08:10:22', 1, '2019-05-12 02:39:20', '0000-00-00 00:00:00'),
(12, 45, 'tin 12', 'SUZUKI ADDRESS 110Fi', '59F1-133.63', 'Trắng-Bạc-Đen', 2018, 156423, 'cũ', 3, 'SUZUKIADDRESS110Fi-1.jpg', 'SUZUKIADDRESS110Fi-2.jpg', 'SUZUKIADDRESS110Fi-3.jpg', 'hai bánh tay ga', 16000000, 'cavet 12.jpg', 2, 2, '2019-05-06 09:10:15', 1, '2019-05-12 02:38:05', '0000-00-00 00:00:00'),
(13, 45, 'tin 13', 'GSX-S150', '59H1-659.98', 'Đen-Xám-bạc', 2019, 89454, 'mới', 3, 'GSX-S150-1.jpg', 'GSX-S150-2.jpg', 'GSX-S150-3.jpg', 'hai bánh tay côn', 10000000, 'cavet 13.jpg', 3, 3, '2019-01-14 10:12:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(14, 45, 'tin 14', 'RAIDER R150', '68P1-223.06', 'xanh Trắng Đen', 2018, 95432, 'mới', 3, 'RAIDERR150-1.jpg', 'RAIDERR150-2.jpg', 'RAIDERR150-3.jpg', 'hai bánh ', 9000000, 'cavet 14.jpg', 3, 3, '2019-01-30 14:20:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(15, 45, 'tin 15', 'V-STROM 1000', '59X2-751.58', 'Đỏ', 2019, 76486, 'mới', 3, 'V-STROM1000-1.jpg', 'V-STROM1000-2.jpg', 'V-STROM1000-3.jpg', 'hai bánh', 14000000, 'cavet 15.jpg', 3, 3, '2019-03-06 08:12:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(16, 46, 'Tin 16', 'GZ150-A', '60A.170.34', 'Đỏ', 2018, 125489, 'cũ', 3, 'GZ150-A-1.jpg', 'GZ150-A-2.jpg', 'GZ150-A-3.jpg', 'hai bánh', 13400000, 'cavet 16.jpg', 3, 3, '2019-03-05 12:17:00', -1, '2019-05-12 10:17:57', '0000-00-00 00:00:00'),
(17, 46, 'tin 17', 'Star SR 170 (ABS)', '67b1-179.77', 'vàng Trắng', 2018, 123789, 'cũ', 4, 'StarSR170(ABS)-1.jpg', 'StarSR170(ABS)-2.jpg', 'StarSR170(ABS)-3.jpg', 'hai bánh', 15400000, 'cavet 17.jpg', 2, 1, '2019-04-23 13:18:00', 1, '2019-05-12 15:01:42', '0000-00-00 00:00:00'),
(18, 46, 'tin 18', 'Angel 110R', '59A3-032.84', 'bạc', 2018, 456789, 'cũ', 4, 'Angel110R-1.jpg', 'Angel110R-2.jpg', 'Angel110R-3.jpg', 'hai bánh', 16000000, 'cavet 18.jpg', 2, 1, '2019-04-22 10:10:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(19, 46, 'tin 19', 'Elegant II 100 Sporty ', '93E1-114.33', 'Đỏ-Đen', 2018, 154654, 'cũ', 4, 'ElegantII100Sporty-1.jpg', 'ElegantII100Sporty-2.jpg', 'ElegantII100Sporty-3.jpg', 'hai bánh', 12500000, 'cavet 19.jpg', 2, 1, '2019-03-12 13:17:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(20, 46, 'tin 20', 'Galaxy 50', '29S1-465.40', 'Đen-Xám-Bạc', 2018, 234156, 'cũ', 4, 'Galaxy50-1.jpg', 'Galaxy50-2.jpg', 'Galaxy50-3.jpg', 'hai bánh', 13500000, 'cavet 20.jpg', 1, 1, '2019-01-25 15:28:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(21, 46, 'tin 21', 'Elegant 50\r\n', '89E1-094.89', 'đen Vàng', 2019, 12374, 'mới', 4, 'Elegant50-1.jpg', 'Elegant50-2.jpg', 'Elegant50-3.jpg', 'hai bánh ', 13500000, 'cavet 21.jpg', 1, 1, '2019-03-24 11:37:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(22, 46, 'tin 22', 'Elizabeth 110 EFI', '59D1-804.62', 'Đen Xám', 2019, 23564, 'mới', 4, 'Elizabeth110EFI-1.jpg', 'Elizabeth110EFI-2.jpg', 'Elizabeth110EFI-3.jpg', 'hai bánh ', 14600000, 'cavet 22.jpg', 2, 2, '2018-12-15 13:19:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(23, 46, 'tin 23', 'Attila-V', '59U1-338.31', 'đen', 2019, 36152, 'mới', 4, 'Attila-V-1.jpg', 'Attila-V-2.jpg', 'Attila-V-3.jpg', 'hai bánh', 12600000, 'cavet 23.jpg', 2, 2, '2019-03-06 10:12:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(24, 46, 'tin 24', 'Venus 125 EFI', '51U3-3333', 'Đen', 2019, 45215, 'mới', 4, 'Venus125EFI-1.jpg', 'Venus125EFI-2.jpg', 'Venus125EFI-3.jpg', 'hai bánh', 11500000, 'cavet 24.jpg', 2, 2, '2019-03-13 13:13:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(25, 46, 'tin 25', 'IRON 883', '59N2.315.99', 'Đỏ', 2019, 14523, 'mới', 5, 'IRON883-1.jpg', 'IRON883-2.jpg', 'IRON883-3.jpg', 'hai bánh', 14300000, 'cavet 25.jpg', 3, 3, '2019-04-12 12:24:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(26, 46, 'tin 26', 'STREET ROD', '59S1-996.94', 'Đỏ-Đen', 2019, 35145, 'mới', 5, 'STREETROD-1.jpg', 'STREETROD-2.jpg', 'STREETROD-3.jpg', 'hai bánh', 13600000, 'cavet 26.jpg', 3, 3, '2019-05-06 13:15:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(27, 46, 'tin 27', 'Liberty 125 ABS', '59S1-230.47', 'vàng-xám', 2018, 123486, 'cũ', 6, 'Liberty125ABS-1.jpg', 'Liberty125ABS-2.jpg', 'Liberty125ABS-3.jpg', 'hai bánh', 14300000, 'cavet 27.jpg', 2, 2, '2019-04-10 18:29:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(28, 46, 'tin 28', 'Medley ABS 125', '78H9-3377', 'Đen', 2018, 312464, 'cũ', 6, 'MedleyABS125-1.jpg', 'MedleyABS125-2.jpg', 'MedleyABS125-3.jpg', 'hai bánh', 6700000, 'cavet 28.jpg', 2, 2, '2019-03-22 10:51:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(29, 46, 'tin 29', 'Vision ', '59D1-888.39', 'Đỏ', 2019, 23145, 'mới', 1, 'vision-1.jpg', 'vision-2.jpg', 'vision-3.jpg', 'hai bánh', 7800000, 'cavet 29.jpg', 2, 2, '2019-04-18 16:19:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00'),
(30, 46, 'tin 30', 'Air Blade', '53XD-2397', 'Xanh', 2019, 23645, 'mới', 1, 'AirBlade-1.jpg', 'AirBlade-2.jpg', 'AirBlade-3.jpg', 'hai bánh', 6500000, 'cavet 30.jpg', 2, 2, '2019-04-01 17:27:00', 1, '2019-05-10 14:23:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `loaitv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichhoat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotinton` int(11) NOT NULL,
  `thoihandangtin` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydangky` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `sdt`, `cmnd`, `diachi`, `email`, `password`, `email_verified_at`, `loaitv`, `kichhoat`, `sotinton`, `thoihandangtin`, `avatar`, `ngaydangky`, `remember_token`, `created_at`, `updated_at`) VALUES
(45, 'Trần Khánh Vũ', '0773187889', '30/2, khu phố 1, phường thới an, quận 12, tphcm', '123', 'boykunis90@gmail.com', '$2y$10$p6OgA.aZI215wAFmW4DBE.bgfTHh7b2F/W5RdYNWpOerxRnBUgSOW', NULL, 'M', 'Kích hoạt', 24, '2019-05-31 09:02:41', '1.jpg', '2019-05-01 00:00:00', NULL, '2019-05-12 16:52:43', '2019-05-12 09:52:43'),
(46, 'Nguyễn Quôc Việt', '0123456789', '205134578', 'quận 5', 'boykunis95@gmail.com', '$2y$10$aSPJ.2JnSkuLb0e3ddjzye2.sPXhW9jucdUY4ou1RtyWzrWXhoBdC', NULL, 'M', 'Kích hoạt', 0, '2019-05-11 11:12:54', '2.jpg', '2019-04-26 00:00:00', NULL, '2019-05-11 08:18:09', '2019-05-10 19:04:05'),
(48, 'Trần Khánh Vũ', '0938642866', '134561235', 'quận 7', 'boy_kunis@yahoo.com.vn', '$2y$10$cF0sIQ6UVy61GWklskm0BOtVONX0cD/9E1qkF4rKIJM0uVJDFm2Si', NULL, 'C', 'Kích hoạt', 0, '2019-05-10 07:39:26', '3.jpg', '2019-04-26 00:00:00', NULL, '2019-05-12 15:07:16', '2019-05-10 00:39:26'),
(51, 'Cha Thương Thái', '07754154421', '4562188', 'quận cam', 'boykunis96@gmail.com', '$2y$10$jljNBglfds0gCilpsB66lu42sfVkxXucQTJqLaiKQL5gR7dHA3/la', NULL, 'C', 'Kích hoạt', 0, '2019-05-11 08:21:23', '4.jpg', '2019-04-30 00:00:00', NULL, '2019-05-11 08:18:45', '2019-05-11 01:21:23'),
(52, 'Admin', '0337309900', '251086760', '273 An Dương Vuong', 'viet.it.sgu@gmail.com', '$2y$10$eqm8yyPNVvs9YC/2gPlX9u/Dcck5tBPqReaw4ngPFVrtv6rS.y.yC', NULL, 'W', 'Kích hoạt', 0, '2019-05-12 21:16:23', 'White Paper.png', '2019-05-12 21:16:23', NULL, '2019-05-12 14:16:39', '2019-05-12 14:16:23'),
(53, 'Trần Khánh Vũ', '0905938751', '30/2, khu phố 1, phường thới an, quận 12, tphcm', '1', 'boykunis900@gmail.com', '$2y$10$T9sTuvsZCBqlDSYBxFfFFO8kwAIJ.L4cYmNXkbiDdBCmWI4hx5pR2', '2019-05-16 18:33:24', 'M', 'Kích hoạt', 0, '2019-05-17 08:33:01', '032.jpg', '2019-05-17 08:33:01', NULL, '2019-05-17 01:33:24', '2019-05-16 18:33:24'),
(54, 'Trần Khánh Vũ', '0905938751', '30/2, khu phố 1, phường thới an, quận 12, tphcm', 'a', 'hahaha123@gmail.com', '$2y$10$JUwgZ6eKt/xAxhfnt4ebcOgjYFBXfyP4nebGK2fcrcOZfqxXM96ZK', '2019-06-16 05:47:50', 'M', 'Kích hoạt', 0, '2019-06-16 19:47:04', 'DSC04159-min.jpg', '2019-06-16 19:47:04', NULL, '2019-06-16 12:47:50', '2019-06-16 05:47:50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `FK_DH_THANHVIEN` (`nguoiban`),
  ADD KEY `FK_DH_NGUOIMUA` (`nguoimua`),
  ADD KEY `FK_DH_TIN` (`matin`);

--
-- Chỉ mục cho bảng `goiphithanhvien`
--
ALTER TABLE `goiphithanhvien`
  ADD PRIMARY KEY (`MAGOITV`);

--
-- Chỉ mục cho bảng `goitin`
--
ALTER TABLE `goitin`
  ADD PRIMARY KEY (`MAGOITIN`);

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`mahang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `FK_HD_THANHVIEN` (`matv`);

--
-- Chỉ mục cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `phankhoi`
--
ALTER TABLE `phankhoi`
  ADD PRIMARY KEY (`mapk`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_RATING_THANHVIEN` (`matv`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`matin`),
  ADD KEY `FK_TIN_THANHVIEN` (`matv`),
  ADD KEY `FK_TIN_HANG` (`mahang`),
  ADD KEY `FK_TIN_PHANKHOI` (`mapk`),
  ADD KEY `FK_TIN_LOAIXE` (`maloai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `mahang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  MODIFY `maloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phankhoi`
--
ALTER TABLE `phankhoi`
  MODIFY `mapk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `matin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_DH_NGUOIBAN` FOREIGN KEY (`nguoiban`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DH_NGUOIMUA` FOREIGN KEY (`nguoimua`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DH_TIN` FOREIGN KEY (`matin`) REFERENCES `tin` (`matin`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HD_THANHVIEN` FOREIGN KEY (`matv`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `FK_RATING_THANHVIEN` FOREIGN KEY (`matv`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tin`
--
ALTER TABLE `tin`
  ADD CONSTRAINT `FK_TIN_HANG` FOREIGN KEY (`mahang`) REFERENCES `hang` (`mahang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TIN_LOAIXE` FOREIGN KEY (`maloai`) REFERENCES `loaixe` (`maloai`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TIN_PHANKHOI` FOREIGN KEY (`mapk`) REFERENCES `phankhoi` (`mapk`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TIN_THANHVIEN` FOREIGN KEY (`matv`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
