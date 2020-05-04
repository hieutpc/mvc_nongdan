-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2020 at 10:58 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_table`
--

CREATE TABLE `item_table` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_table`
--

INSERT INTO `item_table` (`id`, `title`, `description`, `image`, `status`, `create_at`, `update_at`) VALUES
(12, 'banh mi', 'vietnam', './upload/image2.png', 1, '2020-05-04 10:05:56', '2020-05-04 10:05:56'),
(20, 'banh bao', 'trung quoc', './upload/image2.png', 0, '2020-05-04 10:11:23', '2020-05-04 10:11:23'),
(23, 'banhdacua', 'ngon', './upload/image2.png', 1, '2020-05-04 10:11:31', '2020-05-04 10:11:31'),
(26, 'banh u', '123', './upload/imag1.png', 0, '2020-05-04 10:11:40', '2020-05-04 10:11:40'),
(30, 'banh xu xue', 'mau do', './upload/imag1.png', 0, '2020-05-04 10:11:47', '2020-05-04 10:11:47'),
(31, 'Banh gio', 'Trung thu', './upload/imag1.png', 1, '2020-05-04 10:13:20', '2020-05-04 10:13:20'),
(32, 'Banh trang tron', 'Hang Trong', './upload/image2.png', 1, '2020-05-04 10:13:29', '2020-05-04 10:13:29'),
(33, 'Banh Tom', 'Ho Tay', '', 1, '2020-05-03 23:33:55', '2020-05-03 23:33:55'),
(34, 'Banh canh ghe', 'O Cho Dua', '', 1, '2020-05-03 23:34:25', '2020-05-03 23:34:25'),
(35, 'banh xeo', 'tom', '', 1, '2020-05-04 08:23:28', '2020-05-04 08:23:28'),
(36, 'banh bong lan', '123', '', 1, '2020-05-04 08:28:28', '2020-05-04 08:28:28'),
(37, 'banh deo', 'trung thu', '', 1, '2020-05-04 08:44:50', '2020-05-04 08:44:50'),
(45, 'banh mi khong', 'DatG', './upload/banhmi.jpeg', 1, '2020-05-04 10:35:22', '2020-05-04 10:35:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_table`
--
ALTER TABLE `item_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_table`
--
ALTER TABLE `item_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
