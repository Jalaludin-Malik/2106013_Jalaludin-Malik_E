-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 08:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106013_jalal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket_sepakbola`
--

CREATE TABLE `tiket_sepakbola` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `tiket` varchar(20) NOT NULL,
  `tribun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket_sepakbola`
--

INSERT INTO `tiket_sepakbola` (`id`, `nama`, `email`, `tanggal`, `tiket`, `tribun`) VALUES
(1, 'Jalaludin Malik', '2106013@itg.ac.id', '2023-11-21', 'Regular', 'Timur'),
(3, 'Jalaludin Malik', 'jalaludin.malik13@gmail.com', '2023-11-21', 'VIP', 'Barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket_sepakbola`
--
ALTER TABLE `tiket_sepakbola`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket_sepakbola`
--
ALTER TABLE `tiket_sepakbola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
