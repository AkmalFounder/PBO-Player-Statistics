-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 03:09 PM
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
-- Database: `databasepemain`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `umur` int(3) NOT NULL,
  `liga` varchar(30) NOT NULL,
  `club` varchar(30) NOT NULL,
  `kontrak` date NOT NULL,
  `rating` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id`, `nama`, `posisi`, `umur`, `liga`, `club`, `kontrak`, `rating`) VALUES
(1, 'Eren Jeger', 'Striker', 25, 'Bundesliga', 'Hannover96', '2024-11-05', 87),
(2, 'Happy Neuer', 'GK', 24, 'Bundesliga', 'Hannover96', '2025-09-05', 92),
(3, 'Ricky Kroos', 'Center Midfield', 24, 'Bundesliga', 'Hannover96', '2024-08-04', 93),
(4, 'Asnawi Zanneti', 'Left Back', 20, 'Bundesliga', 'Hannover96', '2024-12-12', 88),
(5, 'Pratama Alba', 'Left Back', 21, 'Bundesliga', 'Hannover96', '2025-02-02', 89);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
