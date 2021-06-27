-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 27, 2021 at 04:04 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `osekkai`
--

CREATE TABLE `osekkai` (
  `id` int(12) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `image_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `image_type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `image_content` mediumblob NOT NULL,
  `image_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `osekkai`
--

INSERT INTO `osekkai` (`id`, `name`, `tel`, `email`, `address`, `date`, `image_name`, `image_type`, `image_content`, `image_size`) VALUES
(1, '西田一裕', '090-9502-6011', 'ka-nishida@original-plan.com', '東京都渋谷区神宮前3-25-18', '2021-06-25 22:47:32', '', '', '', 0),
(2, '本山芳', '090-0000-0000', 'k-motoyama@original-plan.com', '西東京市', '2021-06-25 22:54:22', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `osekkai`
--
ALTER TABLE `osekkai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `osekkai`
--
ALTER TABLE `osekkai`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
