-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2020 lúc 05:04 AM
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
-- Cấu trúc bảng cho bảng `owner_users`
--

CREATE TABLE `owner_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `owner_users`
--

INSERT INTO `owner_users` (`id`, `name`, `email`, `password`, `phonenumber`, `cmnd`, `address`) VALUES
(2, 'Vu Thi Oanh', 'vto@gmail.com', '202cb962ac59075b964b07152d234b70\r\n', 987654321, 123654, 'Hai Duong'),
(3, ' tien', 'tienhgm@gmail.com', '123', 842432000, 73709999, 'Ha Noi'),
(4, 'Dang van tuan', 'dvt@gmail.com', '123', 91512345, 234895, 'Vinh Phuc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `area` double NOT NULL,
  `discount` double NOT NULL,
  `chung_chu` int(11) NOT NULL,
  `phong_tam` varchar(500) NOT NULL,
  `phong_bep` varchar(500) NOT NULL,
  `dieu_hoa` int(11) NOT NULL,
  `ban_cong` int(11) NOT NULL,
  `gia_dien_nuoc` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantities` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `category_id`, `address`, `description`, `area`, `discount`, `chung_chu`, `phong_tam`, `phong_bep`, `dieu_hoa`, `ban_cong`, `gia_dien_nuoc`, `price`, `quantities`, `date`) VALUES
(7, 'nhà nghỉ thành công', '16054120581.jpg', 4, 'Htm, Cầu Giấy', '<p>đ&acirc;y l&agrave; nh&agrave; nghỉ to&agrave;n g&aacute;i&nbsp;</p>\r\n', 100, 5, 1, 'không', 'có', 1, 0, '15k/số', 1500000, 2, '2020-11-15');

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
(1, ' tien', 'tienhga@gmail.com', '123', 842432000);

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
-- AUTO_INCREMENT cho bảng `owner_users`
--
ALTER TABLE `owner_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `renter_users`
--
ALTER TABLE `renter_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
