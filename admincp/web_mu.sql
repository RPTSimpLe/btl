-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 17, 2022 lúc 03:11 PM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `keyboard_php`
--
CREATE DATABASE keyboard_php;
use keyboard_php;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b');
-- pass: 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_detail`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(1, 'SL1', 1, 1);


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL,
  `hovaten` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `taikhoan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_khachhang`, `hovaten`, `taikhoan`, `matkhau`, `sodienthoai`, `email`, `diachi`, `chucvu`) VALUES

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Bán phím cơ', 1),
(2, 'Keycap', 2),
(3,'Kit',3);


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_payment` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

-- INSERT INTO `tbl_giohang` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_payment`) VALUES
-- (28, 1, '4095', 0, '0'),
-- (31, 1, '1378', 0, '0'),
-- (32, 3, '6909', 0, '0'),
-- (34, 3, '3504', 0, '0'),
-- (35, 3, '4469', 0, '0'),
-- (36, 3, '6875', 1, 'tienmat'),
-- (37, 3, '3524', 1, 'Chuyển Khoảng'),
-- (38, 9, '8326', 1, 'Tiền Mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `masanpham` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasanpham` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` VALUES(5,'Bàn phím AKKO-185','AKKO-185','2500000',12,'AKKO-185.png','Sảm phẩm có hai phiên bản K3 và K3 MAX: K3 MAX được update thêm hai màu mới và nâng cấp thêm hai lớp đệm  tiêu âm và đã được căn chỉnh nút cho tiếng ngõ êm hơn','',1,0);
INSERT INTO `tbl_sanpham` VALUES(6,'Bàn phím AKKO-3090','AKKO-3090','1500000',10,'AKKO-3090.webp','Sảm phẩm có hai phiên bản K3 và K3 MAX: K3 MAX được update thêm hai màu mới và nâng cấp thêm hai lớp đệm  tiêu âm và đã được căn chỉnh nút cho tiếng ngõ êm hơn','',1,0);
INSERT INTO `tbl_sanpham` VALUES(7,'Bàn phím AKKO-3098S','AKKO-3098S','1000000',10,'AKKO-3098S.png','Sảm phẩm có hai phiên bản K3 và K3 MAX: K3 MAX được update thêm hai màu mới và nâng cấp thêm hai lớp đệm  tiêu âm và đã được căn chỉnh nút cho tiếng ngõ êm hơn','',1,0);
INSERT INTO `tbl_sanpham` VALUES(8,'Bàn phím AKKO-3108V2','AKKO-3108V2','3500000',5,'AKKO-3108V2.png','Sảm phẩm có hai phiên bản K3 và K3 MAX: K3 MAX được update thêm hai màu mới và nâng cấp thêm hai lớp đệm  tiêu âm và đã được căn chỉnh nút cho tiếng ngõ êm hơn','',1,0);
INSERT INTO `tbl_sanpham` VALUES(9,'Bàn phím AKKO-H762','AKKO-H762','1200000',20,'AKKO-H762.png','Sảm phẩm có hai phiên bản K3 và K3 MAX: K3 MAX được update thêm hai màu mới và nâng cấp thêm hai lớp đệm  tiêu âm và đã được căn chỉnh nút cho tiếng ngõ êm hơn','',1,0);
INSERT INTO `tbl_sanpham` VALUES(10,'Bàn phím AKKO-Luffy','AKKO-Luffy','2300000',15,'AKKO-Luffy.png','Sảm phẩm có hai phiên bản K3 và K3 MAX: K3 MAX được update thêm hai màu mới và nâng cấp thêm hai lớp đệm  tiêu âm và đã được căn chỉnh nút cho tiếng ngõ êm hơn','',1,0);
INSERT INTO `tbl_sanpham` VALUES(11,'Bàn phím AKKO-MS1','AKKO-MS1','2800000',15,'AKKO-MS1.webp','Sảm phẩm có hai phiên bản K3 và K3 MAX: K3 MAX được update thêm hai màu mới và nâng cấp thêm hai lớp đệm  tiêu âm và đã được căn chỉnh nút cho tiếng ngõ êm hơn','',1,0);
INSERT INTO `tbl_sanpham` VALUES(12,'Bàn phím AKKO-MSIJ','AKKO-MSIJ','4000000',3,'AKKO-MSIJ.webp','Sảm phẩm có hai phiên bản K3 và K3 MAX: K3 MAX được update thêm hai màu mới và nâng cấp thêm hai lớp đệm  tiêu âm và đã được căn chỉnh nút cho tiếng ngõ êm hơn','',1,0);
INSERT INTO `tbl_sanpham` VALUES(13,'Bàn phím AKKO-SL903','AKKO-SL903','2850000',14,'AKKO-SL903.png','Sảm phẩm có hai phiên bản K3 và K3 MAX: K3 MAX được update thêm hai màu mới và nâng cấp thêm hai lớp đệm  tiêu âm và đã được căn chỉnh nút cho tiếng ngõ êm hơn','',1,0);


INSERT INTO `tbl_sanpham` VALUES(14,'Keycaps BAT','Key-BAT','300000',100,'Key-BAT.jpg','Keycap xuyên led Doubleshot Profile OEM nhiều màu sắc, phối màu theo sở thích, keycaps cho bàn phím cơ','',2,0);
INSERT INTO `tbl_sanpham` VALUES(15,'Keycaps MS','Key-MS','200000',100,'Key-MS.webg','Keycap xuyên led Doubleshot Profile OEM nhiều màu sắc, phối màu theo sở thích, keycaps cho bàn phím cơ','',2,0);
INSERT INTO `tbl_sanpham` VALUES(16,'Keycaps MURA','Key-Mura','250000',120,'Key-Mura.jpg','Keycap xuyên led Doubleshot Profile OEM nhiều màu sắc, phối màu theo sở thích, keycaps cho bàn phím cơ','',2,0);
INSERT INTO `tbl_sanpham` VALUES(17,'Keycaps NAK','Key-BAT','240000',200,'Key-Nak.webg','Keycap xuyên led Doubleshot Profile OEM nhiều màu sắc, phối màu theo sở thích, keycaps cho bàn phím cơ','',2,0);
INSERT INTO `tbl_sanpham` VALUES(18,'Keycaps PAINE','Key-PAINE','350000',150,'Key-PAINE.webg','Keycap xuyên led Doubleshot Profile OEM nhiều màu sắc, phối màu theo sở thích, keycaps cho bàn phím cơ','',2,0);
INSERT INTO `tbl_sanpham` VALUES(19,'Keycaps ZILL','Key-ZILL','220000',250,'Key-ZILL.jpg','Keycap xuyên led Doubleshot Profile OEM nhiều màu sắc, phối màu theo sở thích, keycaps cho bàn phím cơ','',2,0);
INSERT INTO `tbl_sanpham` VALUES(20,'Keycaps PBT','Key-PBT','340000',200,'Key-PBT.jpg','Keycap xuyên led Doubleshot Profile OEM nhiều màu sắc, phối màu theo sở thích, keycaps cho bàn phím cơ','',2,0);


INSERT INTO `tbl_sanpham` VALUES(21,'Kit MonsGeek MG','MonsGeek MG','500000',20,'MonsGeek-MG.jpg','Bộ kit bàn phím cơ MonsGeek MG75 2 mode kết nối dây và wireless hotswap 5 pin DoDo Gear','',3,0);
INSERT INTO `tbl_sanpham` VALUES(22,'Kit MonsGeek MG75 1','MonsGeek MG75 1','1000000',30,'MonsGeek-MG75-1.jpg','Bộ kit bàn phím cơ MonsGeek MG75 2 mode kết nối dây và wireless hotswap 5 pin DoDo Gear','',3,0);
INSERT INTO `tbl_sanpham` VALUES(23,'Kit MonsGeek MG75 2','MonsGeek MG75 2','700000',25,'MonsGeek-MG75-2.webp','Bộ kit bàn phím cơ MonsGeek MG75 2 mode kết nối dây và wireless hotswap 5 pin DoDo Gear','',3,0);
INSERT INTO `tbl_sanpham` VALUES(24,'Kit MonsGeek MG76','MonsGeek MG76','550000',27,'MonsGeek-MG76.jpg','Bộ kit bàn phím cơ MonsGeek MG75 2 mode kết nối dây và wireless hotswap 5 pin DoDo Gear','',3,0);
INSERT INTO `tbl_sanpham` VALUES(25,'Kit MonsGeek MGHA','MonsGeek MGHA','300000',33,'MonsGeek-MGHA.jpg','Bộ kit bàn phím cơ MonsGeek MG75 2 mode kết nối dây và wireless hotswap 5 pin DoDo Gear','',3,0);
INSERT INTO `tbl_sanpham` VALUES(26,'Kit MonsGeek SLH','MonsGeek SLH','560000',54,'MonsGeek-SLH.png','Bộ kit bàn phím cơ MonsGeek MG75 2 mode kết nối dây và wireless hotswap 5 pin DoDo Gear','',3,0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `note` varchar(250) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

-- INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `adress`, `note`, `id_dangky`) VALUES
-- (1, '', '', '', '', 3),
-- (2, '', '', '', '', 3),
-- (3, 'nguyễn Minh Tâm', '05658421', '23/C', '', 1),
-- (4, 'Pham Anh Vinh', '', '', '', 3),
-- (5, 'Pham Anh Vinh', '', '', '', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
