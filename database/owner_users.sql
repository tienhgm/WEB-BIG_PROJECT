-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2020 lúc 06:45 PM
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
-- Cấu trúc bảng cho bảng `owner_users`
--

CREATE TABLE `owner_users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `cmnd` bigint(20) NOT NULL,
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
(12, 'Nguyễn Thu Hà', 'hant@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, 30300002177, 'Hải Dương'),
(13, 'Nguyễn Thu Hương', 'huonght@gmail.com', '202cb962ac59075b964b07152d234b70', 356284538, 55566778, 'Hải Dương'),
(14, 'Hoàng Trung Phong', 'phonght@gmail.com', '202cb962ac59075b964b07152d234b70', 47368757, 76554578, 'Hà Nội'),
(15, 'Trịnh Thị Thư', 'thutt@gmail.com', '202cb962ac59075b964b07152d234b70', 465873269, 1234567, 'Nam Định');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `owner_users`
--
ALTER TABLE `owner_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `owner_users`
--
ALTER TABLE `owner_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
