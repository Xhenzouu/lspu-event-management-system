-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2025 at 02:03 PM
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
-- Database: `symbols`
--

-- --------------------------------------------------------

--
-- Table structure for table `symbols`
--

CREATE TABLE `symbols` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `year` int(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `people` int(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `venue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `symbols`
--

INSERT INTO `symbols` (`id`, `name`, `email`, `title`, `year`, `gender`, `fromdate`, `todate`, `people`, `department`, `venue`) VALUES
(15, 'Henson Brix Amiyan Arroyo', 'Arroyo_Bing@yahoo.com.ph', 'CCS Days', 2024, 'male', '2024-12-27', '2024-12-19', 5, 'Arts and Sciences', ''),
(16, 'Aragorn Strider', 'isildurheir@gmail.com', 'War of The Rings', 2024, 'male', '2024-12-19', '2024-12-13', 1, 'Information Technology', ''),
(17, 'Hotarou', 'Hotarou@gmail.com', 'I Like That', 2024, 'male', '2024-12-27', '2024-12-06', 5, 'Information Technology', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'arroyobrix@gmail.com', '$2y$10$Y8s1aL7w.uZpVEIMW2EXHOaUVQWSZC2LzrOMjafItTJJobS77Rhmu', 'user', '2024-12-11 06:38:15'),
(2, 'admin', 'admin', 'admin', '2024-12-11 07:45:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `symbols`
--
ALTER TABLE `symbols`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `symbols`
--
ALTER TABLE `symbols`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
