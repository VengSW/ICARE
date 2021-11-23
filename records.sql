-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 05:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icare`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `recordID` bigint(20) UNSIGNED NOT NULL,
  `UserID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`recordID`, `UserID`, `Date`, `Image`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-14', '456', '2021-11-14 06:14:00', '2021-11-14 06:14:00'),
(2, '1', '2021-11-15', '123', '2021-11-14 06:24:12', '2021-11-14 06:24:12'),
(2001, '1000', '2021-10-29', '456', '2021-10-28 09:28:12', '2021-10-28 09:28:12'),
(2002, '1000', '2021-10-31', '123', '2021-10-31 04:20:37', '2021-10-31 04:20:37'),
(2007, '1000', '2021-11-01', '123', '2021-11-01 04:41:57', '2021-11-01 04:41:57'),
(2008, '1000', '2021-11-14', '123', '2021-11-14 06:10:15', '2021-11-14 06:10:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`recordID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `recordID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
