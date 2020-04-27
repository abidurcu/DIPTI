-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 12:02 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b67m`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Shakil Ahned', 'shakil@gmail.com', '01845165994'),
(2, 'Rakibul Hasan', 'rakib@gmail.com', '01955517560'),
(3, 'Jiniya Parvin', 'jinia@gmail.com', '01711360288'),
(4, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(5, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(6, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(8, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(9, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(10, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(13, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(14, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(15, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(16, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(17, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(18, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(19, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(20, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(21, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(22, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(23, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(24, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(25, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(26, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(27, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(28, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(29, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(30, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(31, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(32, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(33, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(34, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(35, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(36, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(37, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(38, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(39, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(40, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(41, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(42, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(43, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(44, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(45, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(46, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(47, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(48, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(49, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(50, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(51, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(52, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(53, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(54, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(55, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(56, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(57, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(58, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(59, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(60, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(61, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(62, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(63, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(64, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(65, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(66, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(67, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(68, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(69, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(70, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(71, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(72, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(73, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(74, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(75, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(76, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(77, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(78, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(79, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(80, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(81, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(82, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(83, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(84, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(85, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(86, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(87, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(88, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(89, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(90, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(91, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(92, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(93, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(94, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(95, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(96, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(97, 'Rakibul Hasann Khan', 'rakibul@gmail.com', '01712542099'),
(98, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(99, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(100, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(103, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(104, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(105, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(106, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(107, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(108, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(109, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(110, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(111, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(112, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(113, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(114, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(115, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(116, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(117, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(118, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(119, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(120, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(121, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(122, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(123, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(124, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(125, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(126, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(127, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(128, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(129, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(130, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(131, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(132, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(133, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(134, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(135, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(136, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(137, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(138, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(139, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(140, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(141, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(142, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(143, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(144, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(145, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(146, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(147, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(148, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(149, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(150, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(151, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(152, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(153, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(154, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(155, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(156, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(157, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(158, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(159, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(160, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(161, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(162, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(163, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(164, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(165, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(166, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(167, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(168, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(169, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(170, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(171, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(172, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(173, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(174, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(175, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(176, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(177, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(178, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(179, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(180, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(181, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(182, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(183, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(184, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(185, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(187, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(188, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(189, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(190, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(191, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099'),
(192, 'Jiniya Parvin', 'jinia@gmail.com', '01712542099'),
(193, 'Rakibul Hasann', 'rakibul@gmail.com', '01712542099'),
(194, 'Abidur Rahman', 'abid@gmail.com', '01712542099'),
(195, 'Shakil Ahmed', 'shakil@gmail.com', '01712542099');

-- --------------------------------------------------------

--
-- Table structure for table `revcrud`
--

CREATE TABLE `revcrud` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `revcrud`
--

INSERT INTO `revcrud` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Zakir Khan', 'ashraful@gmail.com', '01955517560'),
(2, 'Zakir Khan', 'ashraful@gmail.com', '01955517560'),
(3, 'Chinmoy', 'zakir@hoissain.com', '01955077791');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revcrud`
--
ALTER TABLE `revcrud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `revcrud`
--
ALTER TABLE `revcrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
