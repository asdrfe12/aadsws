-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 يونيو 2023 الساعة 02:48
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddac`
--

-- --------------------------------------------------------

--
-- بنية الجدول `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `month` varchar(255) DEFAULT '',
  `week` varchar(255) DEFAULT '',
  `mostselling` varchar(255) NOT NULL DEFAULT '',
  `mostselling_pieces` varchar(255) NOT NULL DEFAULT '',
  `minselling` varchar(255) NOT NULL DEFAULT '',
  `minselling_pieces` varchar(255) NOT NULL DEFAULT '',
  `monthsales` text NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `files`
--

INSERT INTO `files` (`id`, `userId`, `file`, `month`, `week`, `mostselling`, `mostselling_pieces`, `minselling`, `minselling_pieces`, `monthsales`) VALUES
(14, 5, 'data-marketing.csv', 'on', '', '9', '158484', '1', '9914', '1_2_3_4_5_6_7_8_9_10_11_12_');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(3, 'Test', 'test@gmail.com', '1234'),
(4, 'Test', 'test2@gmail.com', '1234'),
(5, 'test test', 'test@test.com', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
