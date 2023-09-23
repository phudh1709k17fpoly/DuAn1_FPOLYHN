-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2023 at 03:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1_fpoly_summer`
--

-- --------------------------------------------------------

--
-- Table structure for table `addres_user`
--

CREATE TABLE `addres_user` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addres_user`
--

INSERT INTO `addres_user` (`id`, `name`, `phone`, `adress`, `note`, `id_user`) VALUES
(1, 'Đặng-Phú', '0963392869', 'Tuyen Quang', 'Phan Thiết-Tuyên Quang', 4),
(4, 'Đặng-Phú', '0963392869', 'Tuyen Quang', 'Phan Thiết_Tuyên Quang', 4),
(9, 'ĐặngPhú', '963392869', 'Tuyen Quang', 'ânnanaa', 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `condition` tinyint NOT NULL DEFAULT '0',
  `createDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `condition`, `createDate`) VALUES
(1, 'Bánh Kem', 0, '2023-07-11'),
(2, 'Bánh Mì', 0, '2023-07-11'),
(3, 'Bánh ngọt', 0, '2023-07-11'),
(4, 'Bánh tráng miệng', 0, '2023-07-11'),
(5, 'Đồ uống', 0, '2023-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  `id_pr` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `content`, `id_user`, `id_pr`) VALUES
(4, 'sản phẩm rất ổn', 5, 1),
(9, 'dfsadfasdfasd', 4, 1),
(10, 'Sản phẩm khá xấu', 4, 1),
(11, 'rất ổn', 5, 1),
(12, 'hihiih', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_pr` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `link`, `id_pr`) VALUES
(2, 'pexels-pixabay-302468.jpg', 1),
(5, 'pexels-polina-tankilevitch-4110012 (1).jpg', 1),
(6, 'pexels-lil-artsy-1793037.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oderdetails`
--

CREATE TABLE `oderdetails` (
  `dts_id` int NOT NULL,
  `id_order` int NOT NULL,
  `id_pr` int NOT NULL,
  `dts_sale` int NOT NULL,
  `dts_price` int NOT NULL,
  `dts_quantity` int NOT NULL,
  `dts_status` tinyint NOT NULL DEFAULT '1',
  `dts_createdate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `oderdetails`
--

INSERT INTO `oderdetails` (`dts_id`, `id_order`, `id_pr`, `dts_sale`, `dts_price`, `dts_quantity`, `dts_status`, `dts_createdate`) VALUES
(16, 10, 2, 30000, 170000, 1, 1, 1693825106),
(17, 10, 3, 30000, 200000, 1, 1, 1693825106),
(18, 10, 6, 0, 170000, 1, 1, 1693825106),
(19, 11, 2, 30000, 170000, 1, 1, 1693829780),
(20, 11, 6, 0, 170000, 1, 1, 1693829780),
(21, 12, 1, 30000, 250000, 1, 1, 1694039505),
(22, 12, 2, 30000, 170000, 3, 1, 1694039505),
(23, 12, 3, 30000, 200000, 4, 1, 1694039505),
(24, 13, 1, 30000, 250000, 1, 1, 1694064251),
(25, 14, 2, 30000, 170000, 1, 1, 1694064361);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `od_id` int NOT NULL,
  `id_address` int NOT NULL,
  `id_user` int NOT NULL,
  `od_totalsale` int DEFAULT NULL,
  `od_totalprice` int NOT NULL,
  `od_quantity` int NOT NULL,
  `od_codebill` varchar(255) NOT NULL,
  `od_status` tinyint NOT NULL DEFAULT '1',
  `od_creatadate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`od_id`, `id_address`, `id_user`, `od_totalsale`, `od_totalprice`, `od_quantity`, `od_codebill`, `od_status`, `od_creatadate`) VALUES
(10, 1, 4, 60000, 480000, 3, '1790509827', 2, 1693825106),
(11, 1, 4, 30000, 310000, 2, '1103470992', 0, 1693829780),
(12, 1, 4, 90000, 1320000, 3, '330844302', 4, 1694039505),
(13, 1, 4, 30000, 220000, 1, '1709999171', 0, 1694064251),
(14, 1, 4, 30000, 140000, 1, '1578997088', 4, 1694064361);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `sale` float DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sold` tinyint DEFAULT '0',
  `view` int DEFAULT '0',
  `id_cate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `detail`, `quantity`, `sale`, `status`, `img`, `sold`, `view`, `id_cate`) VALUES
(1, 'Bánh Cake Dâu', 250000, 'news\r\n', 498, 30000, 1, 'banh-cake-dau.webp', 0, 0, 1),
(2, 'Red Daisy', 170000, 'news', 496, 30000, 1, 'red-daisy.webp', 0, 20, 1),
(3, 'Hazenut Chocolate Cake', 200000, 'news', 496, 30000, 1, 'hazenut-chocolate-cake.webp', 26, 0, 1),
(6, 'Bánh dừa sữa chua', 170000, 'news', 500, 0, 1, 'banh-dua-sua-chua.webp', 30, 0, 1),
(13, ' Red velvet cake', 265000, 'news', 500, 20000, 1, 'red_velvet_cake.webp', 25, 0, 1),
(14, 'Bánh hamburger 3pcs', 150000, 'news', 500, 0, 1, 's1.webp', 0, 12, 2),
(15, ' Bánh mì Hàn Quốc chocolate', 23000, 'news', 110, 0, 1, 's2.webp', 21, 0, 2),
(16, ' Bánh mì Hàn Quốc mè đen', 30000, 'news', 40, 0, 1, 's3.webp', 29, 0, 2),
(23, ' Bánh mỳ hoa cúc đậu đỏ', 15000, 'news', 40, 0, 1, 's12.webp', 24, 0, 2),
(24, ' Bánh ốc quế kem', 15000, 'news', 50, 2, 1, 'banh_oc_que_kem.webp', 23, 0, 3),
(25, ' Bánh Madeleine ruốc', 17000, 'news', 60, 2, 1, 'banh-madeleine-ruoc_.webp', 22, 0, 3),
(26, ' Bánh donut chocolate đen', 25000, 'news', 80, 3, 1, 'banh_donut_chocolate_den.webp', 28, 17, 3),
(27, ' Bánh donut chocolate trắng', 20000, 'news', 80, 2, 1, 'banh_donut_chocolate_trang.webp', 0, 0, 3),
(28, ' Bánh Donut xoài', 17000, 'news\r\n', 70, 0, 1, 'banh_donut_xoai.webp', 0, 16, 3),
(34, 'Bánh Opera 90G', 36000, 'news', 50, 0, 1, 'tm1.webp', 0, 0, 4),
(35, 'Bánh Tiramisu 90G', 30000, 'news', 20, 0, 1, 'tm2.webp', 0, 14, 4),
(36, 'Bánh Red Velvet 90G', 35000, 'news', 20, 0, 1, 'tm3.webp', 27, 0, 4),
(37, 'Mousse Chanh Leo', 20000, 'news', 50, 0, 1, 'tm4.webp', 0, 0, 4),
(38, 'Mousse Trà Xanh', 31000, 'news', 50, 0, 1, 'tm5.webp', 0, 0, 4),
(39, 'Trà Đào', 15000, 'news', 20, 0, 1, 'tm8.webp', 0, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` tinyint NOT NULL DEFAULT '0',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password_mahoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `role`, `img`, `password_mahoa`) VALUES
(4, 'Đặng Huy Phú', 'nhism2', '$2y$10$RneL5WMrkGPwVrSnSvDH3.wwqGRryTVSrXAPqhdL/wtJUSIDwXZ8i', 'phudhph30417@fpt.edu.vn', 0, '', '123456'),
(5, 'PHẠM DŨNG', 'nhism3', '$2y$10$HDCLUOR1JkAQarZtZwrMyOIBJf2KiN3ZIgpEHMwX97EpviytE3uc.', 'phudhph30417@fpt.edu.vn', 0, '', '123456'),
(6, 'admin', 'admin', '$2y$10$AzPh5/w68Nw4fUWIHy71MegUf1Gonaut.y4.IhNyyRj2k0hNuxAmS', 'phudhph30417@fpt.edu.vn', 1, '', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addres_user`
--
ALTER TABLE `addres_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pr` (`id_pr`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pr` (`id_pr`);

--
-- Indexes for table `oderdetails`
--
ALTER TABLE `oderdetails`
  ADD PRIMARY KEY (`dts_id`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_pr` (`id_pr`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`od_id`),
  ADD KEY `id_address` (`id_address`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addres_user`
--
ALTER TABLE `addres_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oderdetails`
--
ALTER TABLE `oderdetails`
  MODIFY `dts_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `od_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addres_user`
--
ALTER TABLE `addres_user`
  ADD CONSTRAINT `addres_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_pr`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `img_ibfk_1` FOREIGN KEY (`id_pr`) REFERENCES `products` (`id`);

--
-- Constraints for table `oderdetails`
--
ALTER TABLE `oderdetails`
  ADD CONSTRAINT `oderdetails_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`od_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `oderdetails_ibfk_2` FOREIGN KEY (`id_pr`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_address`) REFERENCES `addres_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
