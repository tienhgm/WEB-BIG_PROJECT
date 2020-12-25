-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 25, 2020 lúc 04:46 AM
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
-- Cấu trúc bảng cho bảng `img_products`
--

CREATE TABLE `img_products` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `img_products`
--

INSERT INTO `img_products` (`id`, `id_product`, `image`) VALUES
(32, 31, '3.jpg'),
(33, 31, '2.jpg'),
(34, 31, '1.jpg'),
(35, 30, '6.jpg'),
(36, 30, '5.jpg'),
(37, 30, '4.jpg'),
(38, 29, '11.jpg'),
(39, 29, '9.jpg'),
(40, 29, '8.jpg'),
(47, 35, '19.jpg'),
(48, 35, '17.jpg'),
(49, 35, '16.jpg'),
(50, 34, '22.jpg'),
(51, 34, '21.jpg'),
(52, 34, '20.jpg'),
(53, 28, '15.jpg'),
(54, 28, '14.jpg'),
(55, 28, '12.jpg'),
(56, 33, '25.jpg'),
(57, 33, '24.jpg'),
(58, 33, '23.jpg'),
(59, 32, '28.jpg'),
(60, 32, '27.jpg'),
(61, 32, '26.jpg'),
(62, 39, '31.jpg'),
(63, 39, '30.jpg'),
(64, 39, '29.jpg'),
(65, 38, '34.jpg'),
(66, 38, '33.jpg'),
(67, 38, '32.jpg'),
(68, 37, '37.jpg'),
(69, 37, '36.jpg'),
(70, 37, '35.jpg'),
(71, 36, '40.jpg'),
(72, 36, '39.jpg'),
(73, 36, '38.jpg'),
(74, 43, '43.jpg'),
(75, 43, '42.jpg'),
(76, 43, '41.jpg'),
(77, 42, '46.jpg'),
(78, 42, '45.jpg'),
(79, 42, '44.jpg'),
(80, 41, '49.jpg'),
(81, 41, '48.jpg'),
(82, 41, '47.jpg'),
(83, 40, '51.jpg'),
(84, 40, '50.jpg'),
(85, 40, '52.jpg'),
(87, 47, '55.jpg'),
(88, 47, '54.jpg'),
(89, 47, '53.jpg'),
(90, 46, '58.jpg'),
(91, 46, '57.jpg'),
(92, 46, '56.jpg'),
(93, 45, '61.jpg'),
(94, 45, '60.jpg'),
(95, 45, '59.jpg'),
(96, 44, '64.jpg'),
(97, 44, '63.jpg'),
(98, 44, '62.jpg'),
(99, 51, '67.jpg'),
(100, 51, '66.jpg'),
(101, 51, '65.jpg'),
(102, 50, '70.jpg'),
(103, 50, '69.jpg'),
(104, 50, '68.jpg'),
(105, 49, '73.jpg'),
(106, 49, '72.jpg'),
(107, 49, '71.jpg'),
(108, 48, '76.jpg'),
(109, 48, '75.jpg'),
(110, 48, '74.jpg'),
(111, 55, '79.jpg'),
(112, 55, '78.jpg'),
(113, 55, '77.jpg'),
(114, 54, '82.jpg'),
(115, 54, '81.jpg'),
(116, 54, '80.jpg'),
(117, 53, '85.jpg'),
(118, 53, '84.jpg'),
(119, 53, '83.jpg'),
(120, 52, '88.jpg'),
(121, 52, '87.jpg'),
(122, 52, '86.jpg'),
(123, 59, '91.jpg'),
(124, 59, '90.jpg'),
(125, 59, '89.jpg'),
(126, 58, '94.jpg'),
(127, 58, '93.jpg'),
(128, 58, '92.jpg'),
(129, 57, '97.jpg'),
(130, 57, '96.jpg'),
(131, 57, '95.jpg'),
(132, 56, '100.jpg'),
(133, 56, '99.jpg'),
(134, 56, '98.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `img_products`
--
ALTER TABLE `img_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
