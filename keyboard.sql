-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 17, 2022 lúc 03:11 PM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 7.3.10

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `keyboard_php`
--
-- --------------------------------------------------------

create database fresh_garden;
--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

USE fresh_garden;

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



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL,
  `hinhAnh` varchar(250),
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

-- INSERT INTO `tbl_dangky` (`id_khachhang`, `hovaten`, `taikhoan`, `matkhau`, `sodienthoai`, `email`, `diachi`, `chucvu`) VALUES

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
(1, 'Bánh kem', 1),
(2, 'Bánh đông lạnh', 2),
(3,'Bánh tráng miệng',3);


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
  `tomtat` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--
INSERT INTO `tbl_sanpham` VALUES(14,'Bánh Pizza Dăm Bông Dứa Và Hải Sản','BDL1','300000',10,'img2.webp','Pizza Dăm Bông Dứa và Hải Sản là một món ăn tuyệt vời kết hợp giữa hương vị ngọt của dứa và hải sản tươi ngon. Bánh pizza được phủ đầy những miếng tôm, mực, cá và hải sản khác, cùng với lớp phô mai béo ngậy. Dăm bông dứa được thêm vào để tạo ra một mùi vị độc đáo và thơm ngon, sẽ là lựa chọn hoàn hảo cho những ai muốn thử một hương vị mới lạ.','',2,0);
INSERT INTO `tbl_sanpham` VALUES(15,'Bánh Pizza Phô Mai Hảo Hạng','BDL2','250000',5,'img12.webp','Bánh Pizza Phô Mai Hảo Hạng là một lựa chọn tuyệt vời cho những ai yêu thích phô mai. Với lớp phủ đầy đặn của phô mai béo ngậy, kết hợp cùng những loại thịt và rau quả tươi ngon, món ăn này sẽ khiến bạn không thể cưỡng lại được. Bánh pizza phô mai hảo hạng thường được nướng trên tấm đá nóng để tạo ra lớp vỏ giòn tan và nhân bên trong thơm ngon.','',2,0);
INSERT INTO `tbl_sanpham` VALUES(16,'Bánh Bao Nhân Thịt Xá Xíu','BDL3','100000',39,'img7.webp','Bánh Bao Nhân Thịt Xá Xíu là một món ăn truyền thống của ẩm thực Trung Quốc. Bánh được làm từ bột mì, sau đó nhân với thịt xá xíu và một số gia vị khác như hành, tỏi, gừng và nước tương. Sau khi nhân bánh, chúng được hấp chín cho đến khi vỏ bánh mềm và nhân thịt thơm ngon. Bánh Bao Nhân Thịt Xá Xíu là món ăn đơn giản nhưng đầy đủ dinh dưỡng và rất ngon miệng, thích hợp để ăn sáng hoặc ăn nhẹ trong suốt cả ngày.','',2,0);
INSERT INTO `tbl_sanpham` VALUES(17,'Bánh Bao Nhân Trứng Sữa','BDL4','150000',20,'img13.jpg','Bánh Bao Nhân Trứng Sữa là một món ăn truyền thống của ẩm thực Trung Quốc. Bánh được làm từ bột mì, sau đó nhân với trứng sữa và một số gia vị khác như đường, bơ và sữa tươi. Sau khi nhân bánh, chúng được hấp chín cho đến khi vỏ bánh mềm và nhân trứng sữa thơm ngon. Bánh Bao Nhân Trứng Sữa là món ăn ngọt ngào, thích hợp để ăn sáng hoặc ăn nhẹ trong suốt cả ngày.','',2,0);


INSERT INTO `tbl_sanpham` VALUES(21,'Bánh Red Velvet','BTM1','200000',20,'img14.jpg','Bánh Red Velvet là một loại bánh ngọt có màu đỏ đặc trưng và hương vị đặc biệt. Bánh được làm từ bột mì, đường, sữa, bơ, cacao và một chút giấm để tạo ra màu đỏ đặc trưng. Với lớp kem phô mai hoặc kem tươi phủ bên ngoài và giữa các lớp bánh, bánh Red Velvet có hương vị đậm đà, ẩm mịn và hấp dẫn. Đây là một lựa chọn tuyệt vời cho những ai yêu thích bánh ngọt và muốn thưởng thức một loại bánh độc đáo.','',3,0);
INSERT INTO `tbl_sanpham` VALUES(22,'Bánh Trứng Vàng Baby','BTM2','70000',30,'img15.jpg','Bánh Trứng Vàng Baby là một loại bánh nhỏ, có hình dáng giống như quả trứng và có màu vàng đẹp mắt. Bánh được làm từ bột mì, đường, trứng và một số gia vị nhẹ nhàng. Bánh trứng vàng baby thường có vị ngọt nhẹ, hơi béo và có độ giòn vừa phải. Đây là món ăn nhẹ nhàng, thích hợp để ăn trong các dịp như sinh nhật, tiệc tùng hoặc thưởng thức vào bất kỳ lúc nào bạn muốn thưởng thức một món tráng miệng ngon lành.','',3,0);
INSERT INTO `tbl_sanpham` VALUES(23,'Bánh Gato Socola Sữa','BTM3','700000',25,'img16.jpg','Bánh Gato Socola Sữa là một loại bánh ngọt có hương vị đậm đà của socola và sữa. Bánh được làm từ bột mì, đường, bơ, sữa và cacao để tạo ra hương vị đặc trưng của socola. Với lớp kem sữa hoặc socola phủ bên ngoài và giữa các lớp bánh, bánh Gato Socola Sữa có hương vị đậm đà, ẩm mịn và hấp dẫn.','',3,0);
INSERT INTO `tbl_sanpham` VALUES(24,'Bánh Cuộn Trà Xanh','BTM4','99000',20,'img17.jpg','Bánh Cuộn Trà Xanh là một món ăn nhẹ nhàng và thơm ngon. Bánh được làm từ bột mì, đường, trứng và bơ, sau đó được nhân với kem trà xanh thơm ngon. Sau khi cuộn lại, bánh được cắt thành từng miếng nhỏ và thưởng thức với đường tinh luyện hoặc mứt trái cây.','',3,0);

INSERT INTO `tbl_sanpham` VALUES(5,'Bánh Be in Blossom','BSN1','880000',12,'img3.jpg','Vải, Phúc bồn tử & Dừa
Mang đến một sự cân bằng tuyệt vời giữa vị chua nhẹ, ngọt thanh và thơm ngậy trong cùng một miếng bánh bằng cách sử dụng vải, dừa và phúc bồn tử. Có thể nói đây chính là sự kết hợp rất thú vị giữa Á & Âu. Không chỉ đặc biệt trong hương vị, lớp bạt bánh của Be in Blossom cũng có hai kết cấu khác nhau: cảm giác mềm xốp đến từ lớp Sponge dừa và một chút độ giòn của sợi dừa tươi nằm trong lớp bạt Dacquoise.','',1,0);
INSERT INTO `tbl_sanpham` VALUES(6,'Bánh Choco Therapy','BSN2','680000',10,'img4.jpg','Sô-cô-la & Sô-cô-la
Choco Therapy là chiếc bánh Entremet đầu tiên của LaFuong mà tất cả mọi thứ trong đó đều được làm từ sô-cô-la.
Được biến tấu với những tầng kết cấu sô-cô-la hoàn toàn khác nhau và được làm từ những hạt cacao hảo hạng nhất.Bắt đầu từ Dark Chocolate Mousse mịn mượt, cho tới Chocolate Crémeux ngầy ngậy, lớp Sponge mềm xốp rồi cuối cùng là Almond Chocolate Crumble bùi bùi giòn rụm.Nếu là fan của sô-cô-la, chiếc bánh này sẽ chiếm lấy trái tim bạn.','',1,0);
INSERT INTO `tbl_sanpham` VALUES(7,'Bánh Secret Garden','BSN3','590000',10,'img5.webp','Xoài, Lá dứa & Phô mai
Một chiếc bánh tươi mát với lớp mousse làm từ xoài tươi có vị ngọt thanh, Secret Garden trở nên thú vị hơn bởi sự kết hợp của lớp bạt bánh có hương lá dứa tươi và lớp kem phô mai - cream cheese thơm ngậy.

Vẻ ngoài lấp lánh được phủ bởi lớp tráng gương màu xanh bơ và cánh bướm trắng độc đáo từ sô-cô-la nguyên chất, Secret Garden mang thông điệp về sự lãng mạn & tinh thần tự do.','',1,0);
INSERT INTO `tbl_sanpham` VALUES(8,'Bánh Lily’s Valley','BSN4','790000',5,'0.webp','Vani, Anh đào & Dâu tây
Lily’s Valley có hương vị ngọt ngào, dễ thương và rất gần gũi. Lớp mousse vani thơm ngậy được làm từ quả vani Madagascar là chủ đề chính của chiếc bánh này.

Bạn sẽ có cảm giác như ăn một chiếc kem vani mát lạnh có thêm lớp nhân mứt nấu tay từ quả anh đào và dâu tây - thơm lừng, mọng nước. Điểm nhấn của chiếc bánh còn là lớp crumble hạnh nhân bùi bùi giòn rụm và cả lớp bạt bánh vỏ chanh xanh tươi mát.
Với tạo hình từ những bông hoa xinh xắn xếp trên nền tráng gương hồng phấn, Lily’s Valley là một chiếc bánh vừa ngon, vừa xinh xắn để bạn dễ dàng lựa chọn.','',1,0);


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
);

CREATE TABLE tbl_danhGia(
                            id int PRIMARY KEY AUTO_INCREMENT,
                            id_sanpham int,
                            id_khachhang int,
                            noidung varchar(255)
);
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
ALTER TABLE `tbl_cart_detail` ADD `danhGia` INT NOT NULL DEFAULT '0' AFTER `soluongmua`;
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
