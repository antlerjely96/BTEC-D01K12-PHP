-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 07, 2022 lúc 03:27 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `d01k12`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`id`, `name`) VALUES
(1, 'loại 1'),
(2, 'loại 2'),
(3, 'loại 3'),
(4, 'loại 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `amount` int(11) NOT NULL,
  `anh` varchar(100) DEFAULT NULL,
  `id_loai_san_pham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `name`, `price`, `amount`, `anh`, `id_loai_san_pham`) VALUES
(1, 'sản phẩm 1', 20, 10, 'anh1.jpg', 1),
(2, 'sản phẩm 2', 10, 20, 'anh2.jpg', 2),
(3, 'sản phẩm 3', 15, 15, 'anh3.jpg', 3),
(4, 'sản phẩm 4', 15, 20, 'anh4.jpg', 4),
(5, 'sản phẩm 5', 25, 15, 'anh5.jpg', 2),
(6, 'sản phẩm 6', 100, 100, 'anh6.jpg', 2),
(7, 'sản phẩm 7', 200, 200, 'anh1.jpg', 3),
(8, 'sản phẩm 8', 25, 1, NULL, 1),
(9, 'sản phẩm 9', 20, 1, NULL, 3),
(10, 'sản phẩm 10', 25, 5, NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`, `address`, `date_of_birth`, `gender`) VALUES
(1, 'a', '0123456789', 'a@gmail.com', '123456', 'Hà Nội', '2022-02-08', 0),
(2, 'b', '0147852369', 'b@gmail.com', '987654', 'Hà Nội', '2022-01-12', 1),
(3, 'c', '0123456788', 'c@gmail.com', '223456', 'Hà Nội', '2022-01-08', 0),
(4, 'd', '0147852363', 'd@gmail.com', '57654', 'Hà Nội', '2021-01-12', 1),
(5, 'admin', '0963852741', 'admin@gmail.com', 'admin', 'Hà Nội', '2021-07-07', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai_san_pham` (`id_loai_san_pham`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_loai_san_pham`) REFERENCES `loai_san_pham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
