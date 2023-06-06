-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 06:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `ID` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `LoginTime` varchar(20) NOT NULL,
  `Admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`ID`, `username`, `surname`, `email`, `password`, `LoginTime`, `Admin`) VALUES
(1, '[lindelani]', '[Xaba]', '[lindelanixaba07@gmail.com]', '[mli]', '', 1),
(2, '[lindelani]', '[Xaba]', '[iuyhtg@ehj]', '[hjk]', '[May2023Sat, 20 May ', 0),
(3, '[lindelani]', '[Xaba]', '[iuyhtg@ehj]', '[hjk]', '[May2023Sat, 20 May ', 0),
(4, '[lindelani]', '[Xaba]', '[lindelanixaba07@gmail.com]', '[$2y$10$dym/2MDhBxNyzMLEFmnD2.lv59SU9/kKmB/SdPnxsVA9xJNXcf8Cy]', '[May2023Sat, 20 May ', 0),
(5, '[lindelani]', '[Xaba]', '[lindelanixaba07@gmail.com]', '[$2y$10$VcakB9o7TNxLIjqilmt0PeXZmv.1xbAfr3XTsTtO7UoMBnNbSl2pq]', '[May2023Sat, 20 May ', 0),
(6, '[lindelani]', '[Xaba]', '[lindelanixaba07@gmail.com]', '[$2y$10$YT9Y9ox4EXD4xIVtyr6Pu.tk8Vh4lqgyjpgCxlfY0THsqbP/UvhNe]', '[May2023Sat, 20 May ', 0),
(7, '[lindelani]', '[Xaba]', '[lindelanixaba07@gmail.com]', '[$2y$10$LgoOFNRSBkNE5ogb9u85EOPRijdUwiMNiSzeT3Mt/qdw2M/R4osl2]', '[May2023Sat, 20 May ', 0),
(8, '[lindelani]', '[Xaba]', '[lindelanixaba07@gmail.com]', '[$2y$10$lp8OxaAZA0TNvUx2SQij/.6jEPHWWBBPyRjduLW6qPjArBgeul4XW]', '[May2023Sat, 20 May ', 0),
(9, '[lindelani]', '[Xaba]', '[2222@ehj]', '[$2y$10$FCDUC5DyBSsydBkD4l0QmOv.ZE66mk6aWoZfXiVY1B8NdyceJCINa]', '[May2023Thu, 25 May ', 0),
(10, '[lindelani]', '[Xaba]', '[2222@ehj]', '[$2y$10$KOAH/nbiZkzjHlR9.N9RW.HowXJeIq1e3ntIWuBmwaBxLR5/8MmN6]', '[May2023Thu, 25 May ', 0),
(11, '[lindelani]', '[Xaba]', '[2222@ehj]', '[$2y$10$cE9RwtdzNVDcAofFcbqzrO981QovvvF8R1u7TWLNzly2jBHPxZIa2]', '[May2023Thu, 25 May ', 0),
(12, '[lindelani]', '[Xaba]', '[minenhle@xikuytrfd]', '[$2y$10$yRJGW93JpAU4d/JsRAqZcOQWSijOIKnJ2nFTOT.5xfMr3Ewbt/Wgy]', '[May2023Thu, 25 May ', 0),
(14, '[ mm]', '[Xaba]', '[2222@ehj]', '[$2y$10$bEmSsKM6/jbSgVBc3JoL5.v4/Gr6JOt6POUL6Lfv9z9NDAEb.frEG]', '[May2023Thu, 25 May ', 0),
(15, '[lindelani]', '[Xaba]', '[nombusofelicia15@gmail.com]', '[$2y$10$6bSTgDrP.qKvlICt8.PQluFU3K1T63.zZFEniJwmYILLb4ScCf/aO]', '[May2023Thu, 25 May ', 0),
(16, '[lindelani]', '[Xaba]', '[lindelanixaba07@gmail.com]', '[$2y$10$j6zPTsjpOLoJP2Kq5iCcHu34jp1QVJ27ztTIdwKElaFd2VIR/M1fG]', '[May2023Thu, 25 May ', 0),
(17, '[lindelani]', '[Xaba]', '[nombusofelicia15@gmail.com]', '[$2y$10$.ykX5y5SIx8jC8b10B566.mcy41hp6wrTm.TdvpDjXglW/3VXeqyK]', '[May2023Thu, 25 May ', 0),
(18, '[lindelani]', '[Xaba]', '[lindelanixaba07@gmail.com]', '[$2y$10$SlrkBvOYGnjNj6oAPU5JnOhrcI2GLq3jwghAO8CxckcCmcEoIwVXq]', '[May2023Thu, 25 May ', 0),
(19, '[lindelani]', '[Xaba]', '[nombusofelicia15@gmail.com]', '[$2y$10$6oIUHHkRbUc8LC5zkqR2FuYMdIAKDy8Eph6KszviDbiB8mWPT3N8i]', '[May2023Sat, 27 May ', 0),
(21, '[lindelani]', '[Xaba]', '[hgfd@erthyj]', '[$2y$10$w8xyXnPA4g2k2uu.pHrrcuVhMMUtDZRjd5UfH6Km3dxpTvcUrK9yG]', '[June2023Thu, 01 Jun', 0),
(22, '[lindelani]', '[Xaba]', '[man@me]', '[$2y$10$ENuGxyRXkVLOTSYtomAUSeWo2UKqNOTgE9TcD4AhveYUE9W182Kz2]', '[June2023Thu, 01 Jun', 0),
(23, '[lindelani]', '[Xaba]', '[eddy@me]', '[$2y$10$CVs9s1RUj4nHmg8H.n.tF.0o/E3jxXq1dibQjxzolrg6d4myerVfG]', '[June2023Thu, 01 Jun', 0),
(24, '[lindelani]', '[Xaba]', '[new@eh]', '[$2y$10$GPx0/KKdFDAa1.g/SS6xEe47i9ctbVSuwssc4nHFNA14tP4QltzRy]', '[June2023Thu, 01 Jun', 1),
(25, '[lindelani]', '[Xaba]', '[goddamn@ghj]', '[$2y$10$euNPLtxkCiqjZumlQ9cHbuIeGnsRqDpl1rqMuC.bpNLMf2yerlQqu]', '[June2023Fri, 02 Jun', 0),
(26, '[ronica]', '[Xaba]', '[ronica@n]', '[$2y$10$rjZR03BPDmfKNK9m5id6W.ko1V6dfTKJrRYvhkxG6GBtEDoMW/oWe]', '[June2023Fri, 02 Jun', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
