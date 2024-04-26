-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 07:23 PM
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
-- Database: `car_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_detail`
--

CREATE TABLE `car_detail` (
  `id_car` int(8) NOT NULL,
  `Id_Type` int(5) NOT NULL DEFAULT 1,
  `imageLink` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_detail`
--

INSERT INTO `car_detail` (`id_car`, `Id_Type`, `imageLink`) VALUES
(2, 7, 'dummy/boards/1.jpg'),
(3, 7, 'dummy/boards/2.jpg'),
(4, 7, 'dummy/boards/3.jpg'),
(5, 7, 'dummy/boards/4.jpg'),
(6, 7, 'dummy/boards/5.jpg'),
(7, 7, 'dummy/boards/6.jpg'),
(8, 7, 'dummy/boards/7.jpg'),
(9, 7, 'dummy/boards/8.jpg'),
(10, 7, 'dummy/boards/9.jpg'),
(11, 7, 'dummy/boards/10.jpg'),
(12, 7, 'dummy/boards/11.jpg'),
(16, 4, 'dummy/cpu/1.jpg'),
(17, 4, 'dummy/cpu/2.jpg'),
(18, 4, 'dummy/cpu/3.jpg'),
(19, 4, 'dummy/cpu/5.jpg'),
(23, 6, 'dummy/rams/1.jpg'),
(24, 6, 'dummy/rams/2.jpg'),
(25, 6, 'dummy/rams/3.jpg'),
(26, 4, 'dummy/rams/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id-Type` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `del` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id-Type`, `name`, `del`) VALUES
(1, 'race', 1),
(2, 'interior', 1),
(3, 'other', 1),
(4, 'cpu', 0),
(5, 'cars', 1),
(6, 'RAM', 0),
(7, 'Boards', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_detail`
--
ALTER TABLE `car_detail`
  ADD PRIMARY KEY (`id_car`),
  ADD KEY `Id_Type` (`Id_Type`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id-Type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_detail`
--
ALTER TABLE `car_detail`
  MODIFY `id_car` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id-Type` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_detail`
--
ALTER TABLE `car_detail`
  ADD CONSTRAINT `car_detail_ibfk_1` FOREIGN KEY (`Id_Type`) REFERENCES `type` (`id-Type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
