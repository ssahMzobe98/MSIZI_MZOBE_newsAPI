-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 01:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginattempt`
--

CREATE TABLE `loginattempt` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `time_attempt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginattempt`
--

INSERT INTO `loginattempt` (`id`, `username`, `status`, `time_attempt`) VALUES
(1, '123@gmail.com', 1, '2021-05-30 21:07:15'),
(2, '123@gmail.com', 1, '2021-05-30 21:09:30'),
(3, '123@gmail.com', 1, '2021-05-30 21:16:02'),
(4, '123@gmail.com', -1, '2021-05-31 19:13:50'),
(5, '123@gmail.com', 1, '2021-05-31 19:15:09'),
(6, '123@gmail.com', -1, '2021-06-01 12:43:21'),
(7, 'akahle@gmail.com', 1, '2021-06-01 12:44:22'),
(8, '123@gmail.com', 1, '2021-06-01 15:39:51'),
(9, '123@gmail.com', -1, '2021-06-01 19:12:27'),
(10, '123@gmail.com', 1, '2021-06-02 18:55:34'),
(11, '123@gmail.com', -1, '2021-06-02 21:02:15'),
(12, '123@gmail.com', 1, '2021-06-02 21:25:58'),
(13, '123@gmail.com', -1, '2021-06-03 13:04:01'),
(14, 'mac@gmail.com', 1, '2021-06-03 11:31:43'),
(15, 'mac@gmail.com', -1, '2021-06-03 11:39:14'),
(16, '123@gmail.com', 1, '2021-06-06 11:55:18'),
(17, '123@gmail.com', 1, '2021-06-07 08:38:46'),
(18, '123@gmail.com', 1, '2021-06-09 06:06:47'),
(19, '123@gmail.com', 1, '2021-06-15 09:25:06'),
(20, '123@gmail.com', -1, '2021-06-15 10:54:31'),
(21, 'testing@gmail.com', 1, '2021-06-15 10:55:29'),
(22, 'testing@gmail.com', -1, '2021-06-15 10:55:55'),
(23, 'testing@gmail.com', 0, '2021-06-15 10:56:15'),
(24, 'testing@gmail.com', 0, '2021-06-15 10:56:28'),
(25, 'testing@gmail.com', 1, '2021-06-15 10:56:45'),
(26, 'testing@gmail.com', -1, '2021-06-15 10:58:49'),
(27, 'testing@gmail.com', 0, '2021-06-15 10:59:01'),
(28, 'testing@gmail.com', 1, '2021-06-15 10:59:11'),
(29, 'testing@gmail.com', -1, '2021-06-15 11:17:55'),
(30, '123@gmail.com', 0, '2021-06-15 12:14:24'),
(31, 'qweasd@gmail.com', 0, '2021-06-15 12:15:52'),
(32, '123@gmail.com', 1, '2021-06-16 16:08:24'),
(33, '123@gmail.com', -1, '2021-06-16 16:19:03'),
(34, '123@gmail.com', 1, '2021-06-18 05:59:04'),
(35, '123@gmail.com', 1, '2021-06-18 08:11:04'),
(36, 'allowa@gmail.com', 1, '2021-06-18 08:23:44'),
(37, 'allowa@gmail.com', -1, '2021-06-18 08:25:56'),
(38, '123@gmail.com', 1, '2021-06-18 08:48:48'),
(39, '123@gmail.com', -1, '2021-06-18 08:49:05'),
(40, 'allowa@gmail.com', 1, '2021-06-18 08:49:44'),
(41, 'allowa@gmail.com', -1, '2021-06-18 08:49:49'),
(42, 'allowa@gmail.com', 1, '2021-06-18 08:50:10'),
(43, 'allowa@gmail.com', -1, '2021-06-18 08:51:17'),
(44, 'malo@gmail.com', 0, '2021-06-18 08:56:11'),
(45, 'allowa@gmail.com', 1, '2021-06-18 08:56:43'),
(46, '123@gmail.com', 1, '2021-06-21 10:58:46'),
(47, '123@gmail.com', -1, '2021-06-21 11:38:31'),
(48, '123@gmail.com', 1, '2021-06-21 21:20:22'),
(49, '123@gmail.com', -1, '2021-06-22 01:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `newsdb`
--

CREATE TABLE `newsdb` (
  `item_id` varchar(60) NOT NULL,
  `view_count` int(10) NOT NULL,
  `img` text NOT NULL,
  `item_type` text NOT NULL,
  `source` text NOT NULL,
  `author` text NOT NULL,
  `descr` text NOT NULL,
  `url` text NOT NULL,
  `content` text NOT NULL,
  `title` text NOT NULL,
  `date_uploaded` date NOT NULL,
  `time_uploaded` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `password` varchar(500) NOT NULL,
  `isadmin` int(1) NOT NULL,
  `isloggedin` int(1) NOT NULL,
  `about` text NOT NULL,
  `time_reg` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `password`, `isadmin`, `isloggedin`, `about`, `time_reg`) VALUES
(1, 'abc@gmail.com', 'bbb', 'kjnkjnjk', 'ef51306214d9a6361ee1d5b452e6d2bb70dc7ebb85bf9e02c3d4747fb57d6bec', 0, 1, '0', '2021-05-30 20:57:09'),
(2, 'admin@gmail.com', 'aa', 'aa', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 0, 1, '0', '2021-05-30 20:59:51'),
(3, '123@gmail.com', '123', 'qwe', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 0, 0, '0', '2021-05-30 21:01:34'),
(4, 'akahle@gmail.com', 'akahle', 'man', 'eebe8b5af6d2d5536e3cca806887b5428d44b9dde64428177942e33c3d2b8de9', 0, 1, '0', '2021-06-01 12:44:07'),
(5, 'mac@gmail.com', 'mac', 'tester', '122a715cb8ca1e71e3d80808d4311f001b6264db20f5b7f701de74107cb15919', 0, 0, '0', '2021-06-03 11:31:25'),
(6, 'testing@gmail.com', 'testing', 'apiTester', 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', 0, 0, '0', '2021-06-15 10:55:12'),
(7, '123@gmail.com', '123qwe', '123qweasd', '6d9b6782040a82ac95e9707ff8de831259578c1b1848435cd3dc6502294d1755', 0, 0, '0', '2021-06-15 12:14:04'),
(8, 'qweasd@gmail.com', 'qweasd', 'qweasd', 'a3761c18fc9326c80a0141e7ee4f168192982ac578ddd47ed3db964ba565e36c', 0, 0, '0', '2021-06-15 12:15:07'),
(9, 'Allowa@gmail.com', 'mac', 'max', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 0, 1, '0', '2021-06-18 08:22:58'),
(10, 'malo@gmaol.com', 'mando', 'mazi', '7d1745355140118284866bde4685b699a4e3cbfa8efa7941665d2b6274a3dcbc', 0, 0, '0', '2021-06-18 08:51:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginattempt`
--
ALTER TABLE `loginattempt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsdb`
--
ALTER TABLE `newsdb`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginattempt`
--
ALTER TABLE `loginattempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
