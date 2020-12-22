-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 22, 2020 lúc 06:28 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phattrien_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `email` varchar(500) CHARACTER SET utf8 NOT NULL,
  `password` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Nguyễn Văn A', 'nva@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, ' tien', 'nve@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Phòng trọ'),
(2, 'Chung cư mini'),
(3, 'Nhà nguyên căn'),
(4, 'Chung cư nguyên căn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(1, 'Cầu Giấy'),
(2, 'Đống Đa'),
(3, 'Hoàn Kiếm'),
(4, 'Hoàng Mai'),
(5, 'Nam Từ Liêm'),
(6, 'Bắc Từ Liêm'),
(7, 'Thanh Xuân'),
(8, 'Hà Đông'),
(9, 'Ba Đình'),
(10, 'Tây Hồ'),
(11, 'Hai Bà Trưng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `detail_content` text NOT NULL,
  `photo` varchar(500) NOT NULL,
  `hot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `detail_content`, `photo`, `hot`) VALUES
(2, 'Nguyễn Mạnh Tiến', '<p>123</p>\r\n', '<p>hg</p>\r\n', '16086401250.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `owner_users`
--

CREATE TABLE `owner_users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `owner_users`
--

INSERT INTO `owner_users` (`id`, `name`, `email`, `password`, `phonenumber`, `cmnd`, `address`) VALUES
(7, 'Nguyễn Mạnh Tiến', 'tiennm@gmail.com', '202cb962ac59075b964b07152d234b70', 842432000, 123456789, 'Hà Giang'),
(9, 'Vũ Thị Oanh', 'oanhvt@gmail.com', '202cb962ac59075b964b07152d234b70', 962113019, 2147483647, 'Hải Dương'),
(10, 'Đặng Văn Tuấn', 'tuandv@gmail.com', '202cb962ac59075b964b07152d234b70', 1234567688, 2147483647, 'Vĩnh Phúc'),
(11, 'Nguyễn Thị Minh Ngọc', 'ngocntm@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, 2147483647, 'Hải Dương'),
(12, 'Nguyễn Thu Hà', 'hant@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, 2147483647, 'Hải Dương');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `area` double NOT NULL,
  `discount` double NOT NULL,
  `chung_chu` int(11) NOT NULL,
  `phong_tam` varchar(500) NOT NULL,
  `phong_bep` varchar(500) NOT NULL,
  `dieu_hoa` int(11) NOT NULL,
  `ban_cong` int(11) NOT NULL,
  `hot` int(11) NOT NULL,
  `gia_dien_nuoc` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantities` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `owner_id`, `category_id`, `location_id`, `address`, `title`, `description`, `area`, `discount`, `chung_chu`, `phong_tam`, `phong_bep`, `dieu_hoa`, `ban_cong`, `hot`, `gia_dien_nuoc`, `price`, `quantities`, `date`) VALUES
(28, 'Căn hộ tại An Bình City', '16086531021.jpg', 9, 4, 6, '234, 234 Đường Phạm Văn Đồng, Phường Cổ Nhuế 1', '<p>Căn hộ tại An B&igrave;nh City</p>\r\n', '<p>- Chuyển đổi mục đ&iacute;ch sử dụng chủ nh&agrave; cần cho thu&ecirc; gấp căn hộ 2PN đầy đủ nội thất trong th&aacute;ng n&agrave;y<br />\r\n- Diện t&iacute;ch sử dụng: 72m2, tầng trung đẹp, view nội khu bể bơi<br />\r\n- Cửa hướng Bắc, ban c&ocirc;ng hướng Nam tho&aacute;ng m&aacute;t tiết kiệm điện<br />\r\n- Nội thất đầy đủ đ&atilde; bao gồm tủ bếp, bếp từ h&uacute;t m&ugrave;i, 3 điều h&ograve;a, giưởng tủ, tủ lạnh, r&egrave;m cửa, thiết bị vệ sinh toto, sofa, b&agrave;n ăn, m&aacute;y giặt,... kh&aacute;ch v&agrave;o ở ngay kh&ocirc;ng phải sắm sửa g&igrave;<br />\r\n- Thời gian nhận nh&agrave;: nhận nh&agrave; ở ngay</p>\r\n', 72, 0, 0, '2 phòng khép kín', 'liền với phòng khách', 1, 1, 1, 'điện nước giá dân', 8000000, 1, '2020-12-22'),
(29, 'Nhà đường Hồ Ba Mẫu', '16086534372.jpg', 9, 3, 2, 'Đường Hồ Ba Mẫu, Phường Phương Liên', '<p>Nh&agrave; nguy&ecirc;n căn đường Hồ Ba Mẫu</p>\r\n', '<p>Cho thu&ecirc; nh&agrave; ng&otilde; 77 Hồ Ba Mẫu 40m x 5T<br />\r\n- DT s&agrave;n : 50 m2 x ,5 tầng<br />\r\n- Thiết kế như sau:<br />\r\n+&nbsp;Tầng 1 + 2 + 3 + 4 + 5 : TH&Ocirc;NG S&Agrave;N<br />\r\n+&nbsp;Nh&agrave; c&oacute; 04 ph&ograve;ng ngủ Nh&agrave; c&oacute; đầy , b&igrave;nh n&oacute;ng lạnh, điều h&ograve;a.<br />\r\n-&nbsp;Nh&agrave; vị tr&iacute; mặt ng&otilde; xe ba g&aacute;c v&agrave;o tận cửa, c&aacute;ch mặt đường ch&iacute;nh phố HỒ BA MẪU 15 m; an ninh tốt; điện, nước ri&ecirc;ng biệt<br />\r\n-&nbsp;Ph&ugrave; hợp hộ gia đ&igrave;nh để ở, l&agrave;m văn ph&ograve;ng c&ocirc;ng ty, thuận tiện kinh doanh.</p>\r\n', 40, 0, 0, '4 phòng vệ sinh khép kín', 'khép kín', 1, 1, 1, 'điện nước giá dân', 10000000, 1, '2020-12-22'),
(30, 'CCMN Khương Hạ', '16086536363.jpg', 9, 2, 7, 'Số 5E ngách 68 ngõ 29 Khương Hạ, phường Khương Đình', '<p>CCMN Khương Hạ</p>\r\n', '<p>Căn hộ mới 100% c&oacute; thang m&aacute;y, c&oacute; trang bị đủ đồ:<br />\r\n- Điều h&ograve;a 2 chiều<br />\r\n- N&oacute;ng lạnh<br />\r\n- Giường, tủ -B&agrave;n l&agrave;m việc l&agrave;m việc hoặc b&agrave;n trang điểm<br />\r\n- Smart Tivi<br />\r\n- Tủ Lạnh<br />\r\n- M&aacute;y giặt chung<br />\r\n- R&egrave;m cửa cản nắng<br />\r\n- C&oacute; lồng sắt phơi quần &aacute;o ri&ecirc;ng từng ph&ograve;ng<br />\r\n- Tủ bếp c&oacute; v&aacute;ch k&iacute;n ngăn m&ugrave;i, c&oacute; bồn rửa Ph&ograve;ng tho&aacute;ng c&oacute; đủ nắng v&agrave; gi&oacute;.<br />\r\nT&ograve;a nh&agrave; c&oacute; bảo vệ 24/24 n&ecirc;n an ninh cực tốt, ra v&agrave;o thoải m&aacute;i, nh&agrave; để xe rộng r&atilde;i. Nh&agrave; mặt view hồ m&aacute;t mẻ. Ng&otilde; rộng 6m 2 &ocirc; t&ocirc; tr&aacute;nh nhau.</p>\r\n', 30, 0, 0, 'khép kín', 'khu vực nấu ăn thông với phòng khách', 1, 1, 1, 'điện 3,5k/số, nước 25k/khối', 4000000, 1, '2020-12-22'),
(31, 'Phòng trọ phố Bà Triệu', '16086538414.jpg', 9, 1, 8, 'Phố Bà Triệu, phường Nguyễn Trãi', '<p>Ph&ograve;ng trọ phố B&agrave; Triệu, H&agrave; Đ&ocirc;ng</p>\r\n', '<p>- Nh&agrave; đẹp full nội thất mới, chỉ việc mang vali v&agrave;o ở.<br />\r\n- Gi&aacute; từ 2tr8 - 3tr5<br />\r\n- Ph&ograve;ng đẹp, sạch sẽ tho&aacute;ng m&aacute;t gần: HV Qu&acirc;n Y, Viện 103, BV đa khoa H&agrave; Đ&ocirc;ng, metro H&agrave; Đ&ocirc;ng, Chợ H&agrave; Đ&ocirc;ng, c&aacute;ch cầu trắng 500m,...,<br />\r\n- Ban c&ocirc;ng cực rộng, tho&aacute;ng m&aacute;t.<br />\r\n- Thang m&aacute;y tốc độ cao.<br />\r\nM&ocirc; tả chung:<br />\r\n- Full nội thất điều h&ograve;a, n&oacute;ng lạnh, tủ lạnh, giường, tủ, phơi đồ, b&agrave;n học, để xe miễn ph&iacute;, camera an ninh, m&aacute;y giặt, kệ bếp.<br />\r\n- Cổng kh&oacute;a v&acirc;n tay đảm bảo an to&agrave;n.<br />\r\n- Ch&iacute;nh chủ miễn m&ocirc;i giới.<br />\r\n- H&agrave;ng tuần c&oacute; người qua dọn vệ sinh chung cả nh&agrave; thường xuy&ecirc;n.<br />\r\n-&nbsp;Giờ giấc đi lại thoải m&aacute;i, tiếp bạn b&egrave; v&ocirc; tư miễn l&agrave; lịch sự.<br />\r\n- Hợp đồng l&acirc;u d&agrave;i kh&ocirc;ng tăng gi&aacute;, chu kỳ đ&oacute;ng tiền nh&agrave; 1 th&aacute;ng 1 lần, đặt cọc 1 th&aacute;ng tiền nh&agrave;.</p>\r\n', 20, 0, 0, 'khép kín', 'khu nấu ăn chung', 1, 0, 1, 'điện 3,5k/số, nước 20k/khối', 2800000, 4, '2020-12-22'),
(32, 'Phòng trọ Phạm Văn Đồng', '16086541515.jpg', 7, 1, 1, 'Ngõ 2/12b Phạm Văn Đồng', '<p>Ph&ograve;ng trọ Phạm Văn Đồng</p>\r\n', '<p>Căn nh&agrave; c&oacute; 5 tầng, tầng một để xe, ph&ograve;ng&nbsp;c&oacute; cửa sổ rộng tho&aacute;ng m&aacute;t.<br />\r\nGi&aacute; thu&ecirc; 1tr7 - 2tr - 2tr6, diện t&iacute;ch 15 - 18m2<br />\r\n- Nội thất: ph&ograve;ng c&oacute; phản, giường, tủ quần &aacute;o, kệ bếp nấu ăn, điều h&ograve;a, b&igrave;nh n&oacute;ng lạnh, tuỳ theo ph&ograve;ng.<br />\r\n- Ph&ograve;ng b&eacute; chưa c&oacute; đồ, c&aacute;c bạn tự t&uacute;c.<br />\r\n- Vị tr&iacute;: gần c&aacute;c trường ĐH&nbsp;lớn như ĐH&nbsp;Quốc Gia, ĐH&nbsp;Điện Lực, CD Du Lịch, bến xe Mỹ Đ&igrave;nh.<br />\r\n- An ninh tốt, điện nước gi&aacute; rẻ, giờ giấc đi lại tự do, cửa kho&aacute; v&acirc;n tay.</p>\r\n', 15, 0, 0, 'có, khép kín', 'nấu ăn trong phòng', 1, 0, 1, 'điện 3,5k/số, nước 25k/khối', 1700000, 5, '2020-12-22'),
(33, 'Nhà riêng Ngọc Hồi', '16086543456.jpg', 7, 3, 4, 'Đường Ngọc Hồi, Phường Hoàng Liệt', '<p>Nh&agrave; ri&ecirc;ng Ngọc Hồi</p>\r\n', '<p>- Diện t&iacute;ch: 60 m2x 4 tầng, MT 4m, hướng Nam, c&oacute; 4PN, PK, bếp, 3WC, 1P.thờ, 2 mặt ng&otilde;, tho&aacute;ng trước sau.<br />\r\n- Nội thất: c&oacute; mỗi tủ bếp c&ograve;n lại chưa c&oacute; g&igrave;.<br />\r\n- Vị tr&iacute; đẹp c&aacute;ch BX Nước Ngầm 800m, cạnh trường Việt Ba, &ocirc;t&ocirc; đỗ cửa.<br />\r\n- Tiện l&agrave;m văn ph&ograve;ng, b&aacute;n h&agrave;ng online, kho h&agrave;ng, b&aacute;n dược phẩm hoặc ở.</p>\r\n', 60, 0, 0, '3 phòng khép kín', 'khép kín', 1, 1, 1, 'điện nước giá dân', 8000000, 1, '2020-12-22'),
(34, 'Chung cư Vinhomes Westpoint Phạm Hùng', '16086546747.jpg', 7, 4, 5, 'Đường Phạm Hùng, Phường Mễ Trì', '<p>Chung cư Vinhomes Westpoint Phạm H&ugrave;ng</p>\r\n', '<p>- Nội thất đầy đủ đồ bao gồm giường tủ, b&agrave;n ghế sofa, tivi, tủ lạnh, m&aacute;y giặt, đồ điện tử - đồ gia dụng đầy đủ...kh&aacute;ch thu&ecirc; chỉ việc x&aacute;ch vali v&agrave;o ở ngay.<br />\r\n+ Gi&aacute;&nbsp;thu&ecirc; căn hộ nội thất cơ bản:10 triệu/th&aacute;ng.<br />\r\n+ Gi&aacute; thu&ecirc; căn hộ full nội thất:14 triệu/th&aacute;ng.<br />\r\n- Thanh to&aacute;n linh hoạt 3 - 6 - 12 th&aacute;ng/lần( cọc 1 th&aacute;ng).<br />\r\n- C&oacute; thể cho thu&ecirc; ngắn hạn.<br />\r\n- Hỗ trợ kh&aacute;ch thu&ecirc; l&agrave;m c&aacute;c thủ tục hợp đồng, thẻ cư d&acirc;n, tạm tr&uacute;...<br />\r\n- Tiện &iacute;ch khi sống tại Vinhomes West Point: gym, yoga, bể bơi, khu vui chơi... miễn ph&iacute; 100% cho cư d&acirc;n.</p>\r\n', 72, 0, 0, '2 phòng khép kín', 'thông với phòng khách', 1, 1, 1, 'điện nước giá dân', 10000000, 1, '2020-12-22'),
(35, 'CCMN Hoàng Hoa Thám', '16086549628.jpg', 7, 2, 9, '567 Đường Hoàng Hoa Thám, Phường Vĩnh Phúc', '<p>CCMN Ho&agrave;ng Hoa Th&aacute;m</p>\r\n', '<p>- Diện t&iacute;ch 50m2, c&oacute; ban c&ocirc;ng<br />\r\n-&nbsp;Nội thất đầy đủ: điều h&ograve;a n&oacute;ng lạnh, vệ sinh kh&eacute;p k&iacute;n, giường tủ b&agrave;n bếp&hellip;<br />\r\n-&nbsp;Nh&agrave; si&ecirc;u đẹp, sạch sẽ tho&aacute;ng m&aacute;t, ph&ugrave; hợp ở nh&oacute;m nhỏ, hộ gia đ&igrave;nh.</p>\r\n', 50, 0, 0, 'khép kín', 'thông với phòng ngủ', 1, 1, 1, 'điện 4k/số, nước 30k/khối', 4800000, 1, '2020-12-22'),
(36, 'Chung cư đường Ngọc Khánh', '16086552309.jpg', 10, 4, 9, '15-17 Đường Ngọc Khánh, Phường Giảng Võ', '<p>Chung cư đường Ngọc Kh&aacute;nh</p>\r\n', '<p>- Căn hộ c&oacute; diện t&iacute;ch 136m2 - 3pn - 2vs - 1pk v&agrave; kh&ocirc;ng gian nh&agrave; bếp.<br />\r\n- Thiết kế mới trần cao bao c&ocirc;ng rộng tạo n&ecirc;n kh&ocirc;ng gian sống tho&aacute;ng m&aacute;t cho căn hộ.<br />\r\n- Nh&agrave; sạch - đẹp, thiết kế hiện đại, kh&ocirc;ng gian tho&aacute;ng m&aacute;t, d&acirc;n cư văn minh.<br />\r\n- Tọa lạc vị tr&iacute; giao th&ocirc;ng thuận lợi, gần nhiều trung t&acirc;m văn ph&ograve;ng, chợ, si&ecirc;u thị, trường học, tiện &iacute;ch 24/24.<br />\r\n- Nh&agrave; đ&atilde; trang bị full nội thất: ĐH, NL, b&agrave;n ghế, giường tủ, tivi, tủ lạnh, m&aacute;y giặt ...v...v<br />\r\n- Rất ph&ugrave; hợp hộ gđ ở, kinh doanh online,...</p>\r\n', 136, 2, 0, '2 phòng khép kín', 'thông với phòng khách', 1, 1, 1, 'điện nước giá dân', 16000000, 1, '2020-12-22'),
(37, 'CCMN đường Xuân Đỉnh', '160865555011.jpg', 10, 2, 6, '401, Đường Xuân Đỉnh, Phường Xuân Đỉnh', '<p>CCMN đường Xu&acirc;n Đỉnh</p>\r\n', '<p>CCMN mới 100%.<br />\r\n- Nội thất: Điều h&ograve;a, n&oacute;ng lạnh, kệ bếp, sofa.<br />\r\n- Vị tr&iacute;: Nằm ngay giữa giao Phạm Văn Đồng - Xu&acirc;n Đỉnh, giao th&ocirc;ng thuận lợi.<br />\r\n- Kh&ocirc;ng gian y&ecirc;n tĩnh, tho&aacute;ng m&aacute;t, cực thoải m&aacute;i sau một ng&agrave;y l&agrave;m việc mệt mỏi.<br />\r\n- Khu để xe rộng r&atilde;i free, c&oacute; camera, kh&oacute;a ra v&agrave;o v&acirc;n tay.</p>\r\n', 32, 0, 0, 'khép kín', 'khu bếp trong phòng', 1, 0, 1, 'điện 3,5k/số, nước 25k/khối', 3700000, 1, '2020-12-22'),
(38, 'Nhà riêng phố Lý Nam Đế', '160865577912.jpg', 10, 3, 3, ' 93, Đường Lý Nam Đế, Phường Cửa Đông', '<p>Nh&agrave; ri&ecirc;ng phố L&yacute; Nam Đế</p>\r\n', '<p>1. M&ocirc; tả:<br />\r\n- Diện t&iacute;ch x&acirc;y: 70m2 x 6 tầng.<br />\r\n- Diện t&iacute;ch cho thu&ecirc;: Tầng 1, 2, 3.<br />\r\n- Mặt tiền rộng: 5m.<br />\r\n- Nh&agrave; c&aacute;ch mặt phố chỉ từ 15 m.<br />\r\n2. Nh&agrave; mới, 2 mặt tho&aacute;ng trước v&agrave; sau, đ&atilde; trang bị đầy đủ c&aacute;c thiết bị cơ bản như: Điều h&ograve;a, thiết bị vệ sinh mới, s&agrave;n gỗ, cầu thang gỗ. Điện 3 pha ri&ecirc;ng c&ocirc;ng tơ 3 tầng, nước đầy đủ.<br />\r\n- Mỗi tầng chia 2 ph&ograve;ng, c&oacute; cửa kh&oacute;a ri&ecirc;ng biệt.<br />\r\n- Tầng 2 c&oacute; cầu thang c&oacute; thể l&ecirc;n từ ngo&agrave;i cổng.<br />\r\n3. Lối đi sử dụng chung tầng 1.<br />\r\n- C&aacute;c ph&ograve;ng cửa kh&oacute;a ri&ecirc;ng biệt.<br />\r\n- Nh&agrave; chỉ c&oacute; 2 người, đi l&agrave;m cả ng&agrave;y.<br />\r\n4. Nh&agrave; thuộc khu d&acirc;n cư văn h&oacute;a, d&acirc;n tr&iacute; cao, an ninh cực kỳ tốt, ph&ugrave; hợp cho c&aacute;c đơn vị thu&ecirc; l&agrave;m văn ph&ograve;ng hoặc kinh doanh spa, đồ online...<br />\r\n- Ng&otilde; to rộng gần 5m, &ocirc; t&ocirc; con c&oacute; thể đỗ cửa.<br />\r\n5. Gi&aacute; thu&ecirc;: Hỗ trợ dịch covid 19 triệu/th&aacute;ng.&nbsp;Gi&aacute; thu&ecirc; sau dịch: gặp trực tiếp đ&agrave;m ph&aacute;n</p>\r\n', 70, 0, 0, 'khép kín', 'khu nấu ăn chung', 1, 1, 1, 'điện nước giá dân', 19000000, 1, '2020-12-22'),
(39, 'Phòng trọ đường Trịnh Công Sơn', '160865595813.jpg', 10, 1, 10, ' 7, Đường Trịnh Công Sơn, Phường Nhật Tân', '<p>Ph&ograve;ng trọ đường Trịnh C&ocirc;ng Sơn</p>\r\n', '<p>Th&ocirc;ng tin ph&ograve;ng:<br />\r\n- Ph&ograve;ng đầy đủ đổ đạc n&oacute;ng lạnh,điều h&ograve;a, c&oacute; ban c&ocirc;ng nhỏ v&agrave; nh&agrave; vệ sinh ngay cạnh ph&ograve;ng.<br />\r\n- C&oacute; khu vực nấu ăn v&agrave; tủ lạnh ở tầng 1 - m&aacute;y giặt ở s&acirc;n thượng.<br />\r\n- Chỗ để xe rộng r&atilde;i, nh&agrave; ở khu d&acirc;n tr&iacute; cao ng&otilde; rộng.<br />\r\n- Ph&ograve;ng tho&aacute;ng, kh&ocirc;ng kh&iacute; trong l&agrave;nh ở Hồ T&acirc;y l&agrave; nơi sinh sống l&yacute; tưởng.</p>\r\n', 25, 0, 0, 'khép kín', 'khu vực nấu ăn chung', 1, 1, 1, 'điện nước giá dân', 3200000, 1, '2020-12-22'),
(40, 'Phòng trọ đường Võ Chí Công', '160865647314.jpg', 11, 1, 10, ' 398, Đường Võ Chí Công, Phường Xuân La', '<p>Ph&ograve;ng trọ đường V&otilde; Ch&iacute; C&ocirc;ng</p>\r\n', '<p>- Nội thất: Điều h&ograve;a, N&oacute;ng lạnh, Đệm, Tủ nhựa, M&aacute;y giặt, H&uacute;t m&ugrave;i, Quạt trần, Tủ lạnh.<br />\r\n-&nbsp;Giờ giấc tự do, mỗi người 1 ch&igrave;a kh&oacute;a, c&oacute; chỗ để xe rộng r&atilde;i miễn ph&iacute;.<br />\r\n-&nbsp;Thuận tiện cho c&aacute;c bạn học tập v&agrave; l&agrave;m việc khu Cầu Giấy, Ho&agrave;ng Quốc Việt, Hồ T&acirc;y...<br />\r\n- Vị tr&iacute;: Gần c&aacute;c trường Học viện B&aacute;o Ch&iacute;, đại học Quốc Gia...</p>\r\n', 15, 0, 0, 'chung với 1 phòng khác', 'khu bếp chung', 1, 0, 1, 'điện giá dân, nước 80k/người', 2800000, 1, '2020-12-23'),
(41, 'Nhà riêng ngõ Trại Cá', '160865667015.jpg', 11, 3, 11, '1B/87, Đường Trương Định, Phường Trương Định', '<p>Nh&agrave; ri&ecirc;ng ng&otilde; Trại C&aacute;</p>\r\n', '<p>- DT: 24m2 x&acirc;y 4 tầng.<br />\r\n+ Tầng 1: Ph&ograve;ng kh&aacute;ch + bếp + 1 VS<br />\r\n+ Tầng 2,3: Mỗi tầng 1 ph&ograve;ng ngủ + *1 VS*.<br />\r\n- Điện nước ri&ecirc;ng biệt, t&iacute;nh theo gi&aacute; nh&agrave; nước.<br />\r\n- Nh&agrave; ngay gần chợ, c&aacute;c trường học. Kinh Tế, B&aacute;ch khoa, X&acirc;y dựng.<br />\r\n- Khu vực an ninh tốt, thuận tiện cho sinh hoạt.</p>\r\n', 28, 0, 0, 'khép kín', 'khép kín', 1, 1, 1, 'điện nước giá dân', 6000000, 1, '2020-12-23'),
(42, 'CCMN Đường Láng', '160865687216.jpg', 11, 2, 2, 'Đường Láng, Phường Trung Liệt', '<p>CCMN Đường L&aacute;ng</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>Nh&agrave; c&aacute;ch chợ chỉ 10m. Mới x&acirc;y c&oacute; nhiều ph&ograve;ng cho thu&ecirc;, rộng 25m2 v&agrave; 30m2.<br />\r\nNgay cạnh đường L&aacute;ng, đi ng&otilde; 562 đường L&aacute;ng v&agrave;o.<br />\r\n- Ph&ograve;ng 30m2: đủ đồ c&oacute; ban c&ocirc;ng<br />\r\n+ c&oacute; tủ lạnh: 5tr<br />\r\n+ kh&ocirc;ng tủ lạnh: 4tr7<br />\r\n- Ph&ograve;ng 25m2: đủ đồ kh&ocirc;ng ban c&ocirc;ng<br />\r\n+ c&oacute; tủ lạnh: 4tr7<br />\r\n+ kh&ocirc;ng tủ lạnh: 4tr5<br />\r\nC&Oacute; THỂ tự mua tự l&aacute;p tủ lạnh của m&igrave;nh để tiết kiệm 200-300k một th&aacute;ng. Đồ đạc c&ograve;n lại đầy đủ như h&igrave;nh, c&oacute; m&aacute;y giặt chung.<br />\r\n-&nbsp;Gi&aacute; dịch vụ: Điện 3,8k/ số; nước 100k/người; vệ sinh, thang m&aacute;y, điện h&agrave;nh lang, m&aacute;y giặt d&ugrave;ng chung 100k/ người; internet 100k/ ph&ograve;ng.</p>\r\n', 30, 0, 0, 'khép kín', 'nấu ăn trong phòng', 1, 1, 1, 'điện 3,8k/số, nước 100k/người', 4500000, 4, '2020-12-23'),
(43, 'Chung cư Văn Phú - Hà Đông', '160865706617.jpg', 11, 4, 8, 'Đường Lê Trọng Tấn, Phường Quang Trung', '<p>Chung cư Văn Ph&uacute; - H&agrave; Đ&ocirc;ng</p>\r\n', '<p>- Diện t&iacute;ch 70m2 thiết kế 2pn 2wc, c&oacute; thể v&agrave;o ở lu&ocirc;n<br />\r\n-&nbsp;Nội thất sắm đầy đủ: s&agrave;n gỗ, tủ bếp, bếp, điều h&ograve;a, n&oacute;ng lạnh, sofa, b&agrave;n ăn, giường, tủ đồ, nội thất liền tường...<br />\r\n-&nbsp;Tiện &iacute;ch đầy đủ dưới ch&acirc;n t&ograve;a chung cư: si&ecirc;u thị, nh&agrave; h&agrave;ng, quầy thuốc, salon, spa, gym, yoga, bể bơi..;<br />\r\n- Vị tr&iacute;: khu đ&ocirc; thị Văn Ph&uacute; - H&agrave; Đ&ocirc;ng; thuận tiện giao th&ocirc;ng, gần trường học c&aacute;c cấp, bệnh viện, trung t&acirc;m thương mại lớn.</p>\r\n', 70, 0, 0, '2 phòng khép kín', 'khép kín', 1, 1, 1, 'điện nước giá dân', 10000000, 1, '2020-12-23'),
(44, 'Nhà nguyên căn Mỗ Lao', '160865722818.jpg', 12, 3, 8, 'Đường Mỗ Lao, Phường Mộ Lao', '<p>Nh&agrave; nguy&ecirc;n căn Mỗ Lao</p>\r\n', '<p>Cho thu&ecirc; nh&agrave; 31m2 4 tầng bao gồm 4PN, 2 nh&agrave; vệ sinh.<br />\r\n- Nội thất: trang bị 3 điều h&ograve;a, 1 tivi, 1 bộ b&agrave;n ghế, tủ bếp v&agrave; 1 số đồ d&ugrave;ng th&ocirc;ng dụng.<br />\r\n-&nbsp;Mặt tiền 4m, &ocirc; t&ocirc; đỗ cửa, c&aacute;ch mặt đường Trần Ph&uacute; 50m.<br />\r\n- Vị tr&iacute;: gần trường Đại học Kiến Tr&uacute;c, ngay &aacute;p lưng si&ecirc;u thị Điện m&aacute;y Media.<br />\r\n-&nbsp;Rất th&iacute;ch hợp cho thu&ecirc; l&agrave;m văn ph&ograve;ng kinh doanh v&agrave; hộ gia đ&igrave;nh ở.</p>\r\n', 30, 0, 0, '3 phòng khép kín', 'khép kín', 1, 1, 1, 'điện nước giá dân', 11000000, 1, '2020-12-23'),
(45, 'Chung cư Cầu Giấy', '160865760719.jpg', 12, 2, 1, 'Đường Nguyễn Khánh Toàn, Phường Quan Hoa', '<p>Chung cư Cầu Giấy</p>\r\n', '<p>- Căn hộ kh&eacute;p k&iacute;n diện t&iacute;ch 35m2, c&oacute; thể v&agrave;o ở lu&ocirc;n, mới tinh, sạch sẽ v&agrave; y&ecirc;n tĩnh.<br />\r\n- Nội thất: Điều h&ograve;a, n&oacute;ng lạnh, tủ lạnh, tủ bếp, b&agrave;n ăn, b&agrave;n uống nước, b&agrave;n trang điểm, giường đệm,...<br />\r\n- Kh&ocirc;ng chung chủ, giờ giấc tự do.<br />\r\n- C&oacute; chỗ để xe m&aacute;y, oto.<br />\r\n- Giao th&ocirc;ng thuận lợi, gần c&aacute;c trường ĐH lớn tại Cầu Giấy (ĐHQG, Học viện B&aacute;o ch&iacute; v&agrave; tuy&ecirc;n truyền, ĐH Sư phạm,...), gần c&aacute;c TTTM (Discovery Cầu Giấy, IPH, ...)</p>\r\n', 35, 0, 0, 'khép kín', 'nấu ăn trong phòng', 1, 1, 1, 'điện 3,5k/số, nước 25k/khối', 4500000, 1, '2020-12-23'),
(46, 'CCMN đường Nghĩa Dũng', '160865782420.jpg', 12, 2, 9, 'Số 33, nghách 27, ngõ 12, Đường Nghĩa Dũng, Phường Phúc Xá', '<p>CCMN đường Nghĩa Dũng</p>\r\n', '<p>To&agrave; nh&agrave; chung cư mini mới x&acirc;y cuối năm 2018 c&oacute; c&aacute;c căn ph&ugrave; hợp cho gia đ&igrave;nh với c&aacute;c tiện &iacute;ch:<br />\r\n- Thang m&aacute;y, để xe tại tầng 1 với camera an ninh.<br />\r\n- C&aacute;c ph&ograve;ng đều c&oacute; ban c&ocirc;ng, được trang bị điều ho&agrave; 2 chiều, wifi tốc độ cao, truyền h&igrave;nh c&aacute;p miễn ph&iacute;.<br />\r\n- Bếp c&oacute; kệ, tủ, h&uacute;t m&ugrave;i.<br />\r\n- M&aacute;y giặt v&agrave; s&acirc;n thượng phơi đồ ri&ecirc;ng biệt.<br />\r\n- Vị tr&iacute; rất ph&ugrave; hợp với cuộc sống, c&ocirc;ng việc tại khu phố cổ, trung t&acirc;m HN. Gần chợ d&acirc;n sinh, s&acirc;n b&oacute;ng đ&aacute; Hồng H&agrave;, viện Medlatec, viện Ho&egrave; Nhai. Chỉ 3p xe m&aacute;y l&agrave; ra đương Thanh Ni&ecirc;n hay sang phố cổ An ninh tốt do gần UBND Phường.<br />\r\n-&nbsp;Cộng đồng gồm c&aacute;c gia đ&igrave;nh văn minh, lịch sự - kh&ocirc;ng c&oacute; sinh vi&ecirc;n hay lao động tự do ở chung.</p>\r\n', 25, 0, 0, 'khép kín', 'nấu ăn trong phòng', 1, 1, 1, 'điện 3,5k/số, nước 25k/khối', 3500000, 1, '2020-12-23'),
(47, 'Phòng trọ Định Công', '160865803321.jpg', 12, 1, 4, ' 10, Nguyễn Cảnh Dị, Phường Định Công', '<p>Ph&ograve;ng trọ Định C&ocirc;ng</p>\r\n', '<p>- Ph&ograve;ng trọ ở&nbsp;trong nh&agrave; ri&ecirc;ng đầy đủ nội thất n&oacute;ng lạnh điều h&ograve;a giường tủ, c&oacute; m&aacute;y lọc nước chung, tho&aacute;ng, y&ecirc;n tĩnh, an ninh tốt<br />\r\n-&nbsp;C&oacute; giảm gi&aacute; cho nếu chuyển v&agrave;o ngay.<br />\r\n- Vị tr&iacute;:<br />\r\n+&nbsp;Giao th&ocirc;ng thuận tiện, oto đỗ cửa, gần c&aacute;c tuyến phố lớn GI&aacute;p B&aacute;t, Định C&ocirc;ng, , L&ecirc; Trọng Tấn, Linh Đ&agrave;m, Nguyễn Xiển ...<br />\r\n+&nbsp;Gần nhiều trường : ĐH Y, HV Ng&acirc;n h&agrave;ng, Thủy Lợi, X&acirc;y Dựng, BV Bạch Mai...</p>\r\n', 18, 2, 0, 'khép kín', 'nấu ăn trong phòng', 1, 0, 1, 'điện 3,5k/số, nước 100k/người', 2500000, 1, '2020-12-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `renter_users`
--

CREATE TABLE `renter_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phonenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `renter_users`
--

INSERT INTO `renter_users` (`id`, `name`, `email`, `password`, `phonenumber`) VALUES
(1, ' tien', 'tienhga@gmail.com', '202cb962ac59075b964b07152d234b70', 842432000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `photo`, `title`, `description`) VALUES
(5, '16086320010.jpg', '<p>NHATRO TOT</p>\r\n', '<p>Đơn vị uy t&iacute;n h&agrave;ng đầu</p>\r\n'),
(6, '16086320701.jpg', '<p>CHI PH&Iacute; PHẢI CHĂNG</p>\r\n', '<p>Bảo đảm gi&aacute; cả tốt nhất</p>\r\n'),
(7, '16086321032.jpg', '<p>HẾT L&Ograve;NG V&Igrave; KH&Aacute;CH H&Agrave;NG</p>\r\n', '<p>Đội ngũ tư vấn chi tiết v&agrave; tận t&igrave;nh</p>\r\n');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `owner_users`
--
ALTER TABLE `owner_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `renter_users`
--
ALTER TABLE `renter_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `owner_users`
--
ALTER TABLE `owner_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `renter_users`
--
ALTER TABLE `renter_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
