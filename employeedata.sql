-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 08:21 AM
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
-- Database: `employeedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` int(10) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `email`, `phone`, `gender`, `created_at`, `updated_at`) VALUES
(4, 'sadsd', 'dd@gmail.com', '0987654321', 2, '2023-04-18 16:09:21', '2023-04-18 16:29:00'),
(5, 'dfdf', 'a@gmail.com', '0987654321', 2, '2023-04-19 04:29:09', '2023-04-19 04:29:09'),
(6, 'admin', 'admin@gmail.com', '9812345678', 1, '2023-04-19 04:35:50', '2023-04-19 04:35:50'),
(7, 'Anjali', 'anjali@gmail.com', '1234567890', 1, '2023-04-19 04:43:01', '2023-04-19 04:43:01'),
(8, 'Kiran', 'Kiran@gmail.com', '4567890422', 1, '2023-04-19 04:49:16', '2023-04-19 04:49:16'),
(9, 'Jaya', 'Jaya@gmail.com', '5678906543', 3, '2023-04-19 04:49:39', '2023-04-19 04:49:39'),
(10, 'Hari', 'Hari@gmail.com', '4567832145', 1, '2023-04-19 04:50:09', '2023-04-19 04:50:09'),
(11, 'Maya', 'Maya@gmail.com', '8976666766', 2, '2023-04-19 04:50:32', '2023-04-19 04:50:32'),
(12, 'Sana', 'Sana@gmail.com', '1232123432', 2, '2023-04-19 04:52:33', '2023-04-19 04:52:33'),
(13, 'Naina', 'Naina@gmail.com', '4321232123', 2, '2023-04-19 04:53:00', '2023-04-19 04:53:00'),
(15, 'dsd', 'dsds@fdgg.com', '1234567890', 1, '2023-04-19 04:59:50', '2023-04-19 04:59:50'),
(16, 'Test data', 'testadd@gmail.com', '4532123456', 1, '2023-04-19 06:04:17', '2023-04-19 06:04:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
