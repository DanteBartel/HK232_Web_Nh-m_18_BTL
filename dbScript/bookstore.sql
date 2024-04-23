-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 03:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `type`, `email`) VALUES
(1, 'Testofadmin', '0123456789nN@', 0, 'testadmin@gmail.com'),
(2, 'Testofuser', '0123456789nN@', 1, 'testuser@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `name`, `price`, `author`, `description`, `image`, `quantity`) VALUES
(1, '9786042261746', 'DANH TÁC THẾ GIỚI - NHỮNG NGƯỜI KHỐN KHỔ', 28000, NULL, 'Víchto Huygô (1802-1885) là đại văn hào Pháp, ông vừa là nhà thơ, nhà văn, nhà viết kịch vĩ đại sáng tác theo khuynh hướng lãng mạn. Các tác phẩm nổi tiếng của ông phải kể đến: vở hài kịch HECNANI, tiểu thuyết THẰNG GÙ NHÀ THỜ ĐỨC BÀ, NHỮNG NGƯỜI KHỐN KHỔ. Trong tác phẩm NHỮNG ...', 'https://product.hstatic.net/200000343865/product/nhung-nguoi-khon-kho_ea89f7947ec94041b2cfacbd3d2cbcc0_master.jpg', 10),
(2, '9786042312790', 'SỐ ĐỎ', 42000, NULL, 'Trong cái sống phải chăng của Phụng, có một cái phải chăng này đáng cảm động hơn hết. Là những thứ văn phong tứ bảo. Mực anh dùng viết là một thứ mực tím ít khi tươi màu, phần nhiều là loãng và luôn luôn là nhạt, là chết. Giấy anh dùng là thứ giấy sáu xu… Ngòi bút Phụng thích dùng nhất là thứ ngòi cái Incomparable, xu ba ngòi… Thế mà lời văn dùng bút ấy mà kí thác lên giấy ấy lại chẳng xoàng xĩnh chút nào…', 'https://product.hstatic.net/200000343865/product/so-do_bia-1_bc6f8b9559f54fd3b3b93c6962f89ab8_master.jpg', 10),
(3, '9786042372787', 'CÀ NÓNG CHU DU TRƯỜNG SA', 68600, NULL, 'Là một chiếc máy ảnh, Cà Nóng may mắn cùng cô chủ phóng viên tham gia chuyến hải trình đặc biệt: Đi thăm Trường Sa. Những ngày trên tàu rồi đặt chân lên các điểm đảo, Cà Nóng được sống một cuộc đời mà con người và máy ảnh đều ước mơ. ', 'https://product.hstatic.net/200000343865/product/ca-nong-chu-du-truong-sa_bia_tb-2024_34351ca6382842c4bcc1117b23ea8874_master.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `book_genre`
--

CREATE TABLE `book_genre` (
  `book_id` int(11) NOT NULL,
  `genre_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_genre`
--

INSERT INTO `book_genre` (`book_id`, `genre_id`) VALUES
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `favorite_book`
--

CREATE TABLE `favorite_book` (
  `book_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favorite_book`
--

INSERT INTO `favorite_book` (`book_id`, `account_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(5) NOT NULL,
  `genreName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genreName`) VALUES
(1, 'Văn hóa - xã hội'),
(2, 'Lịch sử'),
(3, 'Văn học viễn tưởng'),
(4, 'Thiếu nhi'),
(5, 'Tôn giáo'),
(6, 'Tâm lý - tình cảm'),
(7, 'Tiểu sử - tự truyện'),
(8, 'Kinh dị - bí ẩn'),
(9, 'Nấu ăn'),
(10, 'Khoa học - công nghệ'),
(11, 'Truyền cảm hứng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `favorite_book`
--
ALTER TABLE `favorite_book`
  ADD KEY `account_id` (`account_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD CONSTRAINT `book_genre_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `favorite_book`
--
ALTER TABLE `favorite_book`
  ADD CONSTRAINT `favorite_book_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `favorite_book_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
