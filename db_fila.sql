-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 12:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fila`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `freelance` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `languages` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `name`, `country`, `freelance`, `university`, `languages`, `address`, `status`) VALUES
(1, 'Gray Savage', 'Unde et voluptas eni', 'Vitae commodo fugit', 'Labore fuga Illo te', 'Possimus enim aut a', 'Odit est ea nemo cul', 1),
(3, '', 'Reprehenderit accusa', 'Exercitationem dolor', 'Sapiente tempore as', 'Voluptas molestiae e', 'Deserunt deserunt qu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `btn` varchar(100) NOT NULL,
  `btn_url` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `name`, `descrip`, `image`, `btn`, `btn_url`, `status`) VALUES
(8, 'Dara Joyce', 'Id molestias quia ex', NULL, 'Magni consectetur a', 'https://www.rumu.tv', 0),
(12, 'Alice Maynard', 'Ex in non quia dolor', NULL, 'Ut repellendus Amet', 'https://www.xodof.co.uk', 0),
(13, 'Hedwig Cooper', 'Fugiat consequatur ', NULL, 'Obcaecati qui perfer', 'https://www.kitukajetysyru.ws', 1),
(14, '', '', NULL, '', '', 0),
(15, '', '', NULL, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
