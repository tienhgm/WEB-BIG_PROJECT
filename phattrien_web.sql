-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 22, 2020 lúc 01:37 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

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
(10, 'Tây Hồ');

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
(7, 'Nguyen TIen', 'tienhg@gmail.com', '202cb962ac59075b964b07152d234b70', 842432000, 123456789, '23 hg'),
(8, 'Tuấn chó ', 'tuancho@gmail.com', '202cb962ac59075b964b07152d234b70', 842432000, 12345, 'vinh phuc');

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
(8, 'Chung cư mini DEMO', '16054183181.jpg', 7, 4, 8, '120 Hồ Tùng Mậu', '', '<p>Đ&acirc;y l&agrave; chung cư mini</p>\r\n', 40, 5, 1, 'Phòng tắm kín', 'Bếp chung', 1, 1, 1, '15k/số điện , 20k/m3 nước', 3000000, 2, '2020-11-15'),
(10, 'chung cư NOHOPE', '', 0, 4, 8, 'htm VN HN', '', '<p>day la nha nghi 5*</p>\r\n', 123, 11, 1, 'có', 'Không', 1, 1, 1, '15k/số điện , 100k/m3 nước', 12345678, 2, '2020-12-16'),
(11, 'Resort siêu cấp vũ trụ', '', 7, 4, 8, 'Minh Khai , Hà Nội', '', '<p>Resort 500*</p>\r\n', 999, 54, 1, 'Phòng tắm kím', 'có', 1, 0, 1, '15k/số điện , 100k/m3 nước', 9999999, 100, '2020-12-16'),
(15, 'tienhg', '', 0, 4, 8, '321', '', '<p>321</p>\r\n', 321, 321, 1, 'dsa', 'dsa', 1, 0, 1, '321', 123, 321, '2020-12-16'),
(21, ' tien', '', 0, 4, 8, '321', '', '<p>323</p>\r\n', 321, 321, 1, '321', '321', 0, 0, 0, '321321', 321, 32, '2020-12-16'),
(22, ' tien hotel', '16086311341.jpg', 0, 4, 10, '321', '', '<p>332</p>\r\n', 32, 33, 1, '321', '321321', 1, 1, 1, '1321', 321, 323, '2020-12-16'),
(23, 'Nguyễn Mạnh Tiến', '', 7, 4, 5, '32132', '', '<p>21321</p>\r\n', 321, 323, 1, '1321', '3232', 1, 0, 1, '32', 32, 321, '2020-12-16'),
(24, 'tuấn chó ', '', 8, 4, 5, '23 hg', '', '<p>3121</p>\r\n', 123, 1, 1, 'Phòng tắm kín', '321', 1, 0, 1, '321321', 1, 2, '2020-12-16'),
(25, 'Nguyễn Mạnh Tiến', '16086319320.jpg', 7, 4, 10, '23 hg', '<p>1234v</p>\r\n', '<p>456132</p>\r\n', 123, 5, 0, 'Phòng tắm kím', 'Bếp chung', 1, 0, 1, '1321', 123456, 5, '2020-12-20'),
(26, '123Nguyễn Văn E  ', '16086308721.jpg', 0, 4, 10, '3', '<p>day ls&aacute;d&nbsp;</p>\r\n', '<p>sda34</p>\r\n', 321, 21321, 1, '321', 'Bếp chung', 1, 1, 1, '15k/số', 231, 12, '2020-12-20'),
(27, 'Nguyễn Mạnh Tiến', '16086399640.jpg', 7, 4, 7, '3', '<p>21</p>\r\n', '<p>421</p>\r\n', 1, 2, 0, '321', '321', 1, 1, 1, '321', 12, 32, '2020-12-22');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `owner_users`
--
ALTER TABLE `owner_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
