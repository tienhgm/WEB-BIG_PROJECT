-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2020 lúc 07:01 PM
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
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `renter_users_id` int(11) NOT NULL,
  `star` float NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `product_id`, `renter_users_id`, `star`, `comment`, `date`) VALUES
(15, 57, 2, 10, 'Nhà đẹp, giá tốt, không gian sáng sủa, thoáng mát, dễ chịu, điểm trừ là chủ nhà quá xinh gái! :)', '2020-12-27'),
(16, 57, 3, 9, 'Có sàn gỗ, đèn led xịn xò, giá hơi chát ', '2020-12-27'),
(17, 58, 3, 8, 'Phòng trọ mới, cửa sổ rộng nên khá nhiều ánh sáng, thoáng mát, điểm trừ là không có khu để xe, phải gửi xe ngoài', '2020-12-27'),
(18, 58, 2, 9, 'Phòng đẹp nhưng giá hơi chát so với diện tích, điểm cộng là chủ nhà dễ tính', '2020-12-27'),
(19, 58, 4, 10, 'Phòng đẹp, thoáng mát, nhiều ánh sáng, chủ nhà dễ tính', '2020-12-27'),
(20, 57, 5, 8, 'Nhà đẹp, nội thất chanh xả, view đẹp, giao thông khá thuận lợi, gần nơi làm việc', '2020-12-27');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
