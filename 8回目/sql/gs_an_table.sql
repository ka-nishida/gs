-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 09, 2021 at 09:36 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci,
  `fname` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `fname`, `indate`) VALUES
(6, '西田 一裕', 'ka-nishida@original-plan.com', 'bbb', '', '2021-06-21 03:49:25'),
(7, '西田一裕', 'ka-nishida@original-plan.com', 'test', '', '2021-06-25 22:32:49'),
(11, '西田一裕', 'k-motoyama@original-plan.com', '', '', '2021-06-27 16:37:07'),
(13, '西田一裕', 'ka-nishida@original-plan.com', 'r', '', '2021-06-28 16:25:26'),
(17, 'ニシダ　カズヒロ', 'share@original-plan.com', 'g;haiwea', '', '2021-07-05 09:43:36'),
(18, 'ニシダ　カズヒロ', 'ka-nishida@original-plan.com', 'テスト', NULL, '2021-07-10 05:33:23'),
(19, 'ニシダ　カズヒロ', 'ka-nishida@original-plan.com ', '', 'E5DF3ED5-0206-414F-8124-DB6407B160E0.JPG', '2021-07-10 05:36:20'),
(20, '', '', '', 'E5DF3ED5-0206-414F-8124-DB6407B160E0.JPG', '2021-07-10 05:51:33'),
(21, '', '', '', 'E5DF3ED5-0206-414F-8124-DB6407B160E0.JPG', '2021-07-10 05:52:43'),
(22, 'ニシダ　カズヒロ', 'share@original-plan.com', 'test', 'header_access.jpg', '2021-07-10 05:57:52'),
(23, 'ｇｓれせｒ', 'ｄｂｇｓｆせ', 'げがえｗが', '58DDAC8C-B568-49B2-9268-A297C6218A50_1_105_c.jpeg', '2021-07-10 06:04:29'),
(24, 'nishida', 'ka-nishida@original-plan.com', 'kanfow', '58DDAC8C-B568-49B2-9268-A297C6218A50_1_105_c.jpeg', '2021-07-10 06:07:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
